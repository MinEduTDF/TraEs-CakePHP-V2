<?php
App::uses('AppController', 'Controller');

class AlumnosController extends AppController {

	var $name = 'Alumnos';
    var $helpers = array('Session');
	public $components = array('Auth','Session', 'RequestHandler');
	var $paginate = array('Alumno' => array('limit' => 4, 'order' => 'Alumno.creado DESC'));

	function index() {
		//$this->Alumno->recursive = 0;
		$this->set('alumnos', $this->paginate());
		$this->redirectToNamed();
		$conditions = array();

		$activeLetter = isset($this->params['named']['letter']) ? $this->params['named']['letter']: '';
		$letters = array('A','B','C','D','E','F','G','H',
						 'I','J','K','L','M','N','O','P',
						 'Q','R','S','T','U','V','W','X','Y','Z');
		
		$alumnos = isset($activeLetter)? $this->paginate('Alumno', array('Alumno.apellidos LIKE ' => $activeLetter.'%')) : $this->paginate();
		$urlArgs = array('url' => $this->params['named']);
		
		if(!empty($this->params['named']['nombre_completo_alumno']))
		{
			$conditions['Alumno.nombre_completo_alumno ='] = $this->params['named']['nombre_completo_alumno'];
		}

		if(!empty($this->params['named']['documento_nro']))
		{
			$conditions['Alumno.documento_nro ='] = $this->params['named']['documento_nro'];
		}
		
		$alumnos = $this->paginate('Alumno', $conditions);
		$this->set(compact('alumnos','letters','activeLetter','urlArgs'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Alumno no valido', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('alumno', $this->Alumno->read(null, $id));
				
	}
	

	function add() {
		if (!empty($this->data)) {
			$this->Alumno->create();
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash('El alumno ha sido grabado', 'default', array('class' => 'alert alert-success'));
				$inserted_id = $this->Alumno->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El alumno no fue grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}

	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Alumno no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Alumno->save($this->data)) {
				$this->Session->setFlash('El alumno ha sido grabado', 'default', array('class' => 'alert alert-success'));
				$inserted_id = $this->Alumno->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El alumno no ha sido grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Alumno->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para el alumno', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Alumno->delete($id)) {
			$this->Session->setFlash('El alumno ha sido borrado', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('El alumno no fue borrado', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
