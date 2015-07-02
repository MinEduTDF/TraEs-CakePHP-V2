<?php
class EstadosController extends AppController {

	var $name = 'Estados';
	
	function index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Estado no valido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estado', $this->Estado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Estado->create();
			if ($this->Estado->save($this->data)) {
				$this->Session->setFlash(__('El estado ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estado no ha sido grabado. Favor, intente nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Estado no valido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estado->save($this->data)) {
				$this->Session->setFlash(__('El estado ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estado no ha sido grabado. Favor, intente nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estado->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valida para estado.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Estado->delete($id)) {
			$this->Session->setFlash(__('Estado borrado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estado no fue borrado.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>