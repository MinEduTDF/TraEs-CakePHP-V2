<?php
class MateriasController extends AppController {

	var $name = 'Materias';
    var $components = array('Session');
	var $paginate = array('Materia' => array('limit' => 6, 'order' => 'Materia.id DESC'));

	
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
				$this->Session->setFlash('La materia ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Materia->id;
    			$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('La materia no fué grabada. Intente nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cursos = $this->Materia->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
		$this->set(compact('cursos', 'alumnos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Materia no valida.', 'default', array('class' => 'alert alert-warning'));
                //$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Materia->id;
    			$this->redirect(array('action' => 'view', $inserted_id));
		}
		if (!empty($this->data)) {
			if ($this->Materia->save($this->data)) {
				$this->Session->setFlash('La materia ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La materia no fue grabada. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
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
			$this->Session->setFlash('Id no valido para materia.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Materia->delete($id)) {
			$this->Session->setFlash('La materia ha sido borrada.', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Materia no fue borrada.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>