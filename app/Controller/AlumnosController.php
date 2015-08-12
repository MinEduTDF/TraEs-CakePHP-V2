<?php
class AlumnosController extends AppController {

	var $name = 'Alumnos';

	var $paginate = array('Alumno' => array('limit' => 4, 'order' => 'Alumno.id DESC'));

	function index() {
		$this->Alumno->recursive = 0;
		
		$activeLetter = isset($this->params['named']['letter']) ? $this->params['named']['letter']: '';
		$letters = array('A','B','C','D','E','F','G','H',
						 'I','J','K','L','M','N','O','P',
						 'Q','R','S','T','U','V','W','X','Y','Z');
		
		$alumnos = isset($activeLetter)? $this->paginate('Alumno', array('Alumno.apellidos LIKE ' => $activeLetter.'%')) : $this->paginate();
		$urlArgs = array('url' => $this->params['named']);
		
		$this->set(compact('alumnos','letters','activeLetter','urlArgs'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Alumno no valido', 'default', array('class' => 'warning'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('alumno', $this->Alumno->read(null, $id));
				
	}
	

	function add() {
		if (!empty($this->data)) {
			$this->Alumno->create();
			if ($this->Alumno->save($this->data)) {
				$this->Session->setFlash('El alumno ha sido grabado', 'default', array('class' => 'succes'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El alumno no ha sido grabado. Favor, intentelo nuevamente.', 'default', array('class' => 'error'));
			}
		}

	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Alumno no valido', 'default', array('class' => 'warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Alumno->save($this->data)) {
				$this->Session->setFlash('El alumno ha sido grabado', 'default', array('class' => 'succes'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El alumno no ha sido grabado. Favor, intentelo nuevamente.', 'default', array('class' => 'error'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Alumno->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para alumno', 'default', array('class' => 'warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Alumno->delete($id)) {
			$this->Session->setFlash('Alumno borrado', 'default', array('class' => 'succes'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Alumno no fue borrado', 'default', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
