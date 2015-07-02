<?php
class ModalidadsController extends AppController {

	var $name = 'Modalidads';

	function index() {
		$this->Modalidad->recursive = 0;
		$this->set('modalidads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Modalidad no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('modalidad', $this->Modalidad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Modalidad->create();
			if ($this->Modalidad->save($this->data)) {
				$this->Session->setFlash(__('La modalidad ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La modalidad no pudo ser grabada. Favor, intente nuevamente.'));
			}
		}
		$centros = $this->Modalidad->Centro->find('list');
		$this->set(compact('centros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Modalidad no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Modalidad->save($this->data)) {
				$this->Session->setFlash(__('La modalidad ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La modalidad no fue grabada. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Modalidad->read(null, $id);
		}
		$centros = $this->Modalidad->Centro->find('list');
		$this->set(compact('centros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para modalidad.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Modalidad->delete($id)) {
			$this->Session->setFlash(__('Modalidad borrada.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Modalidad no fue borrada.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>