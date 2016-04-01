<?php
class HorariosController extends AppController {

	var $name = 'Horarios';

	function index() {
		$this->Horario->recursive = 0;
		$this->set('horarios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Horario no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('horario', $this->Horario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Horario->create();
			if ($this->Horario->save($this->data)) {
				$this->Session->setFlash(__('EL horario ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('EL horario no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$cargos = $this->Horario->Cargo->find('list');
		$this->set(compact('cargos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Horario no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Horario->save($this->data)) {
				$this->Session->setFlash(__('EL horario ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('EL horario no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Horario->read(null, $id);
		}
		$cargos = $this->Horario->Cargo->find('list');
		$this->set(compact('cargos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para horario.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Horario->delete($id)) {
			$this->Session->setFlash(__('Horario borrado.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Horario no fue borrado.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>