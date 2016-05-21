<?php
App::uses('AppController', 'Controller');

class CursosInscripcionsController extends AppController {

	var $name = 'CursosInscripcions';
    var $helpers = array('Session');
    var $components = array('Paginator', 'Auth','Session');
   	var $paginate = array('CursosInscripcion' => array('limit' => 4, 'order' => 'CursosInscripcion.id DESC'));


/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->CursosInscripcion->recursive = 0;
		$this->loadModel('Ciclo');
		$this->loadModel('Alumno');
		$this->set('cursosInscripcions', $this->Paginator->paginate());
	   	$cicloId = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('ciclo_id')));
		$ciclos = $this->Ciclo->findById($cicloId, 'nombre');
		$cursos = $this->CursosInscripcion->Curso->find('list', array('fields'=>array('id', 'nombre_completo_curso')));
		$inscripcions = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('id', 'legajo_nro')));
        $alumnoId = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('alumno_id')));
		$alumnos = $this->Alumno->findById($alumnoId, 'nombre_completo_alumno');
		$this->redirectToNamed();
		
		$conditions = array();
		
		if(!empty($this->params['named']['curso_id']))
		{
			$conditions['CursosInscripcion.curso_id ='] = $this->params['named']['curso_id'];
		}
		if(!empty($this->params['named']['inscripcion_id']))
		{
			$conditions['CursosInscripcion.inscripcion_id ='] = $this->params['named']['inscripcion_id'];
		}
		$cursosInscripcions = $this->paginate('CursosInscripcion', $conditions);
		$this->set(compact('cursosInscripcions', 'ciclos', 'cursos', 'inscripcions', 'alumnos'));
   }
}
