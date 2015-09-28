<?php
class TitulosController extends AppController {

	var $name = 'Titulos';

	function index() {
		$this->Titulo->recursive = 0;
		$this->set('titulos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Titulo no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('titulo', $this->Titulo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Titulo->create();
			if ($this->Titulo->save($this->data)) {
				$this->Session->setFlash(__('El titulo ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El titulo no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$docentes = $this->Titulo->Docente->find('list');
		$this->set(compact('docentes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Titulo no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Titulo->save($this->data)) {
				$this->Session->setFlash(__('El titulo ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El titulo no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Titulo->read(null, $id);
		}
		$docentes = $this->Titulo->Docente->find('list');
		$this->set(compact('docentes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para titulo.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Titulo->delete($id)) {
			$this->Session->setFlash(__('Titulo borrado.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Titulo no fue borrado.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>