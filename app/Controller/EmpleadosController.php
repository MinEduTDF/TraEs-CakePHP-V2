<?php
class EmpleadosController extends AppController {

	var $name = 'Empleados';
    var $paginate = array('Empleado' => array('limit' => 3, 'order' => 'Empleado.id DESC'));
	
    function index() {
		$this->Empleado->recursive = 0;
		
		$activeLetter = isset($this->params['named']['letter']) ? $this->params['named']['letter']: '';
		$letters = array('A','B','C','D','E','F','G','H',
						 'I','J','K','L','M','N','O','P',
						 'Q','R','S','T','U','V','W','X','Y','Z');
		
		$empleados = isset($activeLetter)? $this->paginate('Empleado', array('Empleado.apellido LIKE ' => 
		                                                  $activeLetter.'%')) : $this->paginate();
		$urlArgs = array('url' => $this->params['named']);
		
		$this->set(compact('empleados','letters','activeLetter','urlArgs'));
	}
        		
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Empleado no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('empleado', $this->Empleado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Empleado->create();
			if ($this->Empleado->save($this->data)) {
				$this->Session->setFlash(__('El empleado ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El empleado no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$cargos = $this->Empleado->Cargo->find('list');
		$centros = $this->Empleado->Centro->find('list');
		$this->set(compact('cargos', 'centros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Empleado no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Empleado->save($this->data)) {
				$this->Session->setFlash(__('El empleado ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El empleado no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Empleado->read(null, $id);
		}
		$cargos = $this->Empleado->Cargo->find('list');
		$centros = $this->Empleado->Centro->find('list');
		$this->set(compact('cargos', 'centros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valida para empleado.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Empleado->delete($id)) {
			$this->Session->setFlash(__('Empleado borrado.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Empleado no fue borrado.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>