<?php
class CiclosController extends AppController {

	var $name = 'Ciclos';

	function index() {
		$this->Ciclo->recursive = 0;
		$this->set('ciclos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ciclo no valido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ciclo', $this->Ciclo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ciclo->create();
			if ($this->Ciclo->save($this->data)) {
				$this->Session->setFlash(__('El ciclo ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El ciclo no fue grabado. Favor, intente nuevamente.', true));
			}
		}
		$cargos = $this->Ciclo->Cargo->find('list');
		$cursos = $this->Ciclo->Curso->find('list');
		$this->set(compact('cargos', 'cursos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Ciclo no valido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ciclo->save($this->data)) {
				$this->Session->setFlash(__('El ciclo ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El ciclo no fue grabado. Favor, intente nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ciclo->read(null, $id);
		}
		$cargos = $this->Ciclo->Cargo->find('list');
		$cursos = $this->Ciclo->Curso->find('list');
		$this->set(compact('cargos', 'cursos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para ciclo.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ciclo->delete($id)) {
			$this->Session->setFlash(__('Ciclo borrado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ciclo no fue borrado.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>