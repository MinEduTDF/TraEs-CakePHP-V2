<?php
class EmpleadosController extends AppController {

	var $name = 'Empleados';
    var $helpers = array('Session');
	public $components = array('Auth','Session', 'RequestHandler');
	var $paginate = array('Empleado' => array('limit' => 3, 'order' => 'Empleado.id DESC'));
	
    function index() {
		$this->Empleado->recursive = 0;
		
		$activeLetter = isset($this->params['named']['letter']) ? $this->params['named']['letter']: '';
		$letters = array('A','B','C','D','E','F','G','H',
						 'I','J','K','L','M','N','O','P',
						 'Q','R','S','T','U','V','W','X','Y','Z');
		
		$empleados = isset($activeLetter)? $this->paginate('Empleado', array('Empleado.apellidos LIKE ' => 
		                                                  $activeLetter.'%')) : $this->paginate();
		$urlArgs = array('url' => $this->params['named']);
		
		$this->set(compact('empleados','letters','activeLetter','urlArgs'));
	}
        		
    function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Empleado no valido.', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('empleado', $this->Empleado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Empleado->create();
			if ($this->Empleado->save($this->data)) {
				$this->Session->setFlash('El empleado ha sido grabado.', 'default', array('class' => 'alert alert-success'));
				$inserted_id = $this->Empleado->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El empleado no fué grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cargos = $this->Empleado->Cargo->find('list');
		$centros = $this->Empleado->Centro->find('list');
		$this->set(compact('cargos', 'centros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Empleado no valido.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Empleado->save($this->data)) {
				$this->Session->setFlash('El empleado ha sido grabado.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El empleado no ha sido grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
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
			$this->Session->setFlash('Id no valida para empleado.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Empleado->delete($id)) {
			$this->Session->setFlash('El Empleado ha sido borrado.', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('El Empleado no fue borrado.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>