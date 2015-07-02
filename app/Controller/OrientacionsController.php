<?php
class OrientacionsController extends AppController {

	var $name = 'Orientacions';

	/*function beforeFilter() {
	    $this->centro_id = $this->Session->centro('id'); 
	     
	}*/
	
	function index() {
		$this->Orientacion->recursive = 0;
		$this->set('orientacions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Orientacion no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('orientacions', $this->Orientacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
		    $this->Orientacion->create();
			if ($this->Orientacion->save($this->data)) {
				$this->Session->setFlash(__('La orientacion ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La orientacion no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		$centros = $this->Orientacion->Centro->find('list');
		$this->set(compact('centros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Orientacion no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Orientacion->save($this->data)) {
				$this->Session->setFlash(__('La orientacion ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La orientacion no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Orientacion->read(null, $id);
		}
		$centros = $this->Orientacion->Centro->find('list');
		$this->set(compact('centros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para orientacion.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Orientacion->delete($id)) {
			$this->Session->setFlash(__('Orientacion borrada.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Orientacion no fue borrada.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>