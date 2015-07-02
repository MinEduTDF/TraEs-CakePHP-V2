<?php
class LicenciasController extends AppController {

	var $name = 'Licencias';

	function beforeFilter(){

        parent::beforeFilter();
		$this->Auth->allowedActions = array('index', 'view');
    }
	
	function index() {
		$this->Licencia->recursive = 0;
		$this->set('licencias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Licencia no valida.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('licencia', $this->Licencia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Licencia->create();
			if ($this->Licencia->save($this->data)) {
				$this->Session->setFlash(__('La licencia ha sido grabada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La licencia no ha sido grabada. Favor, intente nuevamente.', true));
			}
		}
		$docentes = $this->Licencia->Docente->find('list');
		$empleados = $this->Licencia->Empleado->find('list');
		$cargos = $this->Licencia->Cargo->find('list');
		$this->set(compact('docentes', 'empleados', 'cargos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Licencia no valida.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Licencia->save($this->data)) {
				$this->Session->setFlash(__('La licencia ha sido grabada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La licencia no ha sido grabada. Favor, intente nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Licencia->read(null, $id);
		}
		$docentes = $this->Licencia->Docente->find('list');
		$empleados = $this->Licencia->Empleado->find('list');
		$cargos = $this->Licencia->Cargo->find('list');
		$this->set(compact('docentes', 'empleados', 'cargos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para licencia.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Licencia->delete($id)) {
			$this->Session->setFlash(__('Licencia borrada.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Licencia no fue borrada.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>