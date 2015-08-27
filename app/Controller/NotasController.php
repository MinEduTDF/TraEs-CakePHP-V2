<?php
class NotasController extends AppController {

	var $name = 'Notas';
    var $components = array('Session');

	function index() {
		$this->Nota->recursive = 0;
		$this->set('notas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Calificación no valida.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nota', $this->Nota->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nota->create();
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash('La calificación ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La calificación no fue grabada. Intente nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alumnos = $this->Nota->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$materias = $this->Nota->Materia->find('list');
		$ciclos = $this->Nota->Ciclo->find('list');
		$this->set(compact('alumnos', 'materias', 'ciclos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Calificación no valida.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash('La calificación ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La calificación no fue grabada. Intente nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nota->read(null, $id);
		}
		$alumnos = $this->Nota->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$materias = $this->Nota->Materia->find('list');
		$ciclos = $this->Nota->Ciclo->find('list');
		$this->set(compact('alumnos', 'materias', 'ciclos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valida para calificación.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nota->delete($id)) {
			$this->Session->setFlash('La calificación ha sido borrada.', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('La calificación no fue borrada.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>