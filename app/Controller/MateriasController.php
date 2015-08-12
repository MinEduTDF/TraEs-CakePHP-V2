<?php
class MateriasController extends AppController {

	var $name = 'Materias';

	function index() {
		$this->Materia->recursive = 0;
		$this->set('materias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Materia no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('materia', $this->Materia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Materia->create();
			if ($this->Materia->save($this->data)) {
				$this->Session->setFlash(__('La materia ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La materia no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		$cursos = $this->Materia->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
		$this->set(compact('cursos', 'alumnos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Materia no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Materia->save($this->data)) {
				$this->Session->setFlash(__('La materia ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La materia no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Materia->read(null, $id);
		}
		$cursos = $this->Materia->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
		$this->set(compact('cursos', 'alumnos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para materia.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Materia->delete($id)) {
			$this->Session->setFlash(__('Materia borrada.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Materia no fue borrada.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>