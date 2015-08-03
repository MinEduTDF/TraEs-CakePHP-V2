<?php
class ServiciosController extends AppController {

	var $name = 'Servicios';
	var $paginate = array('Servicio' => array('limit' => 3, 'order' => 'Servicio.id DESC'));

	/*
	function beforeFilter(){

        parent::beforeFilter();
	//	$this->Auth->allowedActions = array('index', 'view');
    }
	*/
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Servicio no valido'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->set('servicio', $this->Servicio->read(null, $id));
				
	}

	function add() {
		if (!empty($this->data)) {
			$this->Servicio->create();
			if ($this->Servicio->save($this->data)) {
				$this->Session->setFlash(__('El servicio ha sido grabado'));
				$this->redirect(array('controller' => 'alumnos','action' => 'index'));
			} else {
				$this->Session->setFlash(__('El servicio no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
		$alumnos = $this->Servicio->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->set(compact('alumnos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Servicio no valido'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Servicio->save($this->data)) {
				$this->Session->setFlash(__('El servicio ha sido grabado'));
				$this->redirect(array('controller' => 'alumnos','action' => 'index'));
			} else {
				$this->Session->setFlash(__('El servicio no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Servicio->read(null, $id);
		}
		$alumnos = $this->Servicio->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->set(compact('alumnos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para servicio'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		if ($this->Servicio->delete($id)) {
			$this->Session->setFlash(__('Servicio borrado'));
			$this->redirect(array('controller' => 'alumnos','action' => 'index'));
		}
		$this->Session->setFlash(__('Servicio no fue borrado'));
		$this->redirect(array('controller' => 'alumnos','action' => 'index'));
	}
}
?>
