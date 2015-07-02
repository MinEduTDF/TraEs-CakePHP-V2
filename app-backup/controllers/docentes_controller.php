<?php
class DocentesController extends AppController {

	var $name = 'Docentes';
	var $paginate = array('Docente' => array('limit' => 3, 'order' => 'Docente.id DESC'));

	function beforeFilter(){

        parent::beforeFilter();
		$this->Auth->allowedActions = array('index', 'view');
    }
	
	function index() {
		$this->Docente->recursive = 0;
		
		$activeLetter = isset($this->params['named']['letter']) ? $this->params['named']['letter']: '';
		$letters = array('A','B','C','D','E','F','G','H',
						 'I','J','K','L','M','N','O','P',
						 'Q','R','S','T','U','V','W','X','Y','Z');
		
		$docentes = isset($activeLetter)? $this->paginate('Docente', array('Docente.apellido LIKE ' => 
		                                                  $activeLetter.'%')) : $this->paginate();
		$urlArgs = array('url' => $this->params['named']);
		
		$this->set(compact('docentes','letters','activeLetter','urlArgs'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Docente no valido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('docente', $this->Docente->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Docente->create();
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('El docente ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El docente no ha sido grabado. Favor, intente nuevamente.', true));
			}
		}
		$cargos = $this->Docente->Cargo->find('list');
		$this->set(compact('cargos', 'materias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Docente no valido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Docente->save($this->data)) {
				$this->Session->setFlash(__('El docente ha sido grabado.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El docente no ha sido grabado. Favor, intente nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Docente->read(null, $id);
		}
		$cargos = $this->Docente->Cargo->find('list');
		$this->set(compact('cargos', 'materias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para docente.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Docente->delete($id)) {
			$this->Session->setFlash(__('Docente borrado.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Docente no fue borrado.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>