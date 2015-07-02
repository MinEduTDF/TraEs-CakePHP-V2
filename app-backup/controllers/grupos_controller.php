<?php
class GruposController extends AppController {

	var $name = 'grupos';

    
	function beforeFilter(){

        parent::beforeFilter();
		//$this->Auth->allow(array('*'));
	}
    
	
    function index() {
		$this->Grupo->recursive = 0;
		$this->set('grupos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->flashWarnings('Grupo no valido', 'index');
                        /*$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));*/
		}
		$this->set('grupo', $this->Grupo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('El grupo ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->flashWarnings('El grupo no ha sido grabado. Favor, intente nuevamente.', 'index');
                                //$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Grupo no valido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('El grupo ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El grupo no ha sido grabado. Favor, intente nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Grupo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valida para grupo.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Grupo->delete($id)) {
			$this->Session->setFlash(__('Grupo borrado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Grupo no fue borrado.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>