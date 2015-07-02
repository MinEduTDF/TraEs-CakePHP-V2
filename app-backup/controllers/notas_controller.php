<?php
class NotasController extends AppController {

	var $name = 'Notas';

	function beforeFilter(){

        parent::beforeFilter();
		$this->Auth->allowedActions = array('index', 'view');
    }
	
	function index() {
		$this->Nota->recursive = 0;
		$this->set('notas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Nota no valida.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nota', $this->Nota->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nota->create();
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('La nota ha sido grabada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La nota no ha sido grabada. Favor, intente nuevamente.', true));
			}
		}
		$alumnos = $this->Nota->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$materias = $this->Nota->Materia->find('list');
		$ciclos = $this->Nota->Ciclo->find('list');
		$this->set(compact('alumnos', 'materias', 'ciclos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Nota no valida.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('La nota ha sido grabada.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La nota no ha sido grabada. Favor, intente nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nota->read(null, $id);
		}
		$alumnos = $this->Nota->Alumno->find('list');
		$materias = $this->Nota->Materia->find('list');
		$ciclos = $this->Nota->Ciclo->find('list');
		$this->set(compact('alumnos', 'materias', 'ciclos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valida para nota.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nota->delete($id)) {
			$this->Session->setFlash(__('Nota borrada.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nota no fue borrada.', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
}
?>