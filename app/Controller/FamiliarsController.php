<?php
class FamiliarsController extends AppController {

	var $name = 'Familiars';
	var $paginate = array('Familiar' => array('limit' => 3, 'order' => 'Familiar.id DESC'));

	/*
	function beforeFilter(){

        parent::beforeFilter();
	//	$this->Auth->allowedActions = array('index', 'view');
    }
	*/
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Familiar no valido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('familiar', $this->Familiar->read(null, $id));
				
	}

	function add() {
		if (!empty($this->data)) {
			$this->Familiar->create();
			if ($this->Familiar->save($this->data)) {
				$this->Session->setFlash(__('El familiar ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El familiar no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
		$alumnos = $this->Familiar->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->set(compact('alumnos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Familiar no valido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Familiar->save($this->data)) {
				$this->Session->setFlash(__('El familiar ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El familiar no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Familiar->read(null, $id);
		}
		$alumnos = $this->Familiar->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->set(compact('alumnos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para familiar'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Familiar->delete($id)) {
			$this->Session->setFlash(__('Familiar borrado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Familiar no fue borrado'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
