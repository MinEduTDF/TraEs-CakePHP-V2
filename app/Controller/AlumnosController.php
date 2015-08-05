<?php
class AlumnosController extends AppController {

	var $name = 'Alumnos';

	var $paginate = array('Alumno' => array('limit' => 5, 'order' => 'Alumno.id DESC'));


	/*
	function beforeFilter(){

        parent::beforeFilter();
	//	$this->Auth->allowedActions = array('index', 'view');
    }
	*/
	
	function index() {
		//$this->Alumno->recursive = 0;
        $this->set('alumnos', $this->paginate());
		$this->redirectToNamed();
		$conditions = array();	
		
		$activeLetter = isset($this->params['named']['letter']) ? $this->params['named']['letter']: '';
		$letters = array('A','B','C','D','E','F','G','H',
						 'I','J','K','L','M','N','O','P',
						 'Q','R','S','T','U','V','W','X','Y','Z');
		
		$alumnos = isset($activeLetter)? $this->paginate('Alumno', array('Alumno.apellidos LIKE ' => 
		                                                  $activeLetter.'%')) : $this->paginate();
		$urlArgs = array('url' => $this->params['named']);
		
		if(!empty($this->params['named']['documento_nro']))
		{
			$conditions['Alumno.documento_nro ='] = $this->params['named']['documento_nro'];
		}
		$alumnos = $this->paginate('Alumno',$conditions);
		$this->set(compact('alumnos','letters','activeLetter','urlArgs'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Alumno no valido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('alumno', $this->Alumno->read(null, $id));
				
	}

	function add() {
		if (!empty($this->data)) {
			$this->Alumno->create();
			if ($this->Alumno->save($this->data)) {
				$this->Session->setFlash(__('El alumno ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El alumno no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}

	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Alumno no valido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Alumno->save($this->data)) {
				$this->Session->setFlash(__('El alumno ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El alumno no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Alumno->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para alumno'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Alumno->delete($id)) {
			$this->Session->setFlash(__('Alumno borrado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Alumno no fue borrado'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
