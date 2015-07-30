<?php
class TitulacionsController extends AppController {

	var $name = 'Titulacions';

	/*function beforeFilter() {
	    $this->centro_id = $this->Session->centro('id'); 
	     
	}*/
	
	function index() {
		$this->Titulacion->recursive = 0;
		$this->set('titulacions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Titulación no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('titulacions', $this->Titulacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
		    $this->Titulacion->create();
			if ($this->Titulacion->save($this->data)) {
				$this->Session->setFlash(__('La titulacion ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La titulacion no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		$centros = $this->Titulacion->Centro->find('list');
		$this->set(compact('centros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Titulacion no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Titulacion->save($this->data)) {
				$this->Session->setFlash(__('La titulación ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La titulación no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Titulacion->read(null, $id);
		}
		$centros = $this->Titulacion->Centro->find('list');
		$this->set(compact('centros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para titulación.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Titulacion->delete($id)) {
			$this->Session->setFlash(__('Titulación borrada.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Titulación no fue borrada.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>