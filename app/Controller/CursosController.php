<?php
App::uses('AppController', 'Controller');

class CursosController extends AppController {

	var $name = 'Cursos';
    var $helpers = array('Session');
	var $components = array('Auth','Session');
	var $paginate = array('Curso' => array('limit' => 4, 'order' => 'Curso.anio ASC'));

	function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['anio']))
		{
			$conditions['Curso.anio ='] = $this->params['named']['anio'];
		}
		if(!empty($this->params['named']['division']))
		{
			$conditions['Curso.division ='] = $this->params['named']['division'];
		}
		if(!empty($this->params['named']['turno']))
		{
			$conditions['Curso.turno ='] = $this->params['named']['turno'];
		}
		$cursos = $this->paginate('Curso',$conditions);
		$this->set(compact('cursos'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Curso no valido.', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('curso', $this->Curso->read(null, $id));
		//genera nombres para datos relacionados.
		$inscripcionAlumnoId = $this->Curso->Inscripcion->find('list', array('fields'=>array('alumno_id')));
		$this->loadModel('Alumno');
		$alumnoNombre = $this->Alumno->find('list', array('fields'=>array('nombre_completo_alumno'), 'conditions'=>array('id'=>$inscripcionAlumnoId)));
		$this->set(compact('alumnoNombre'));
	}

	function add() {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		if (!empty($this->data)) {
			$this->Curso->create();
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash('El curso ha sido grabado.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Curso->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El curso no fué grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$centros = $this->Curso->Centro->find('list');
		$titulacions = $this->Curso->Titulacion->find('list');
		$materias = $this->Curso->Materia->find('list');
		$ciclos = $this->Curso->Ciclo->find('list');
		$this->set(compact('centros', 'titulacions', 'materias', 'ciclos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Curso no valido.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
               $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
               $this->redirect( array( 'action' => 'index' ));
		  }
		  if ($this->Curso->save($this->data)) {
				$this->Session->setFlash('El curso ha sido grabado.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Curso->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El curso no fue grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Curso->read(null, $id);
		}
		$centros = $this->Curso->Centro->find('list');
		$titulacions = $this->Curso->Titulacion->find('list');
		//$modalidads = $this->Curso->Modalidad->find('list');
		$ciclos = $this->Curso->Ciclo->find('list');
		$this->set(compact('centros', 'titulacions', 'modalidads', 'ciclos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para curso', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Curso->delete($id)) {
			$this->Session->setFlash('El curso ha sido borrado', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('El curso no fue borrado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>