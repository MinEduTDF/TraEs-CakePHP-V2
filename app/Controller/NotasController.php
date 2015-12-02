<?php
class NotasController extends AppController {

	var $name = 'Notas';
    var $helpers = array('Session');
	var $components = array('Auth','Session');
    var $paginate = array('Nota' => array('limit' => 4, 'order' => 'Nota.creado DESC'));

	function index() {
		$this->Nota->recursive = 0;
		$this->set('notas', $this->paginate());
		$alumnos = $this->Nota->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
        $materias = $this->Nota->Materia->find('list', array('fields'=>array('id', 'alia')));
		$ciclos = $this->Nota->Ciclo->find('list', array('fields'=>array('id', 'ciclo')));
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['alumno_id']))
		{
			$conditions['Nota.alumno_id ='] = $this->params['named']['alumno_id'];
		}
		if(!empty($this->params['named']['ciclo_id']))
		{
			$conditions['Nota.ciclo_id ='] = $this->params['named']['ciclo_id'];
		}
		if(!empty($this->params['named']['materia_id']))
		{
			$conditions['Nota.materia_id ='] = $this->params['named']['materia_id'];
		}
		
		$notas = $this->paginate('Nota',$conditions);
		$this->set(compact('notas', 'alumnos', 'ciclos', 'materias'));

	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Calificación no valida.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nota', $this->Nota->read(null, $id));
	}

	function add() {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		  if (!empty($this->data)) {
			$this->Nota->create();
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash('La calificación ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Nota->id;
				$this->redirect(array('action' => 'view', $inserted_id));
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
		  //abort if cancel button was pressed  
            if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash('La calificación ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Nota->id;
				$this->redirect(array('action' => 'view', $inserted_id));
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