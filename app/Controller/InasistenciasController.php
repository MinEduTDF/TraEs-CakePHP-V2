<?php
class InasistenciasController extends AppController {

	//public $uses = array('Curso', 'Materia', 'Alumno', 'Inasistencia');
    var $name = 'Inasistencias';
	var $paginate = array('Inasistencia' => array('limit' => 4, 'order' => 'Inasistencia.id DESC'));

	/*
	function beforeFilter(){

        parent::beforeFilter();
	//	$this->Auth->allowedActions = array('index', 'view');
    }
	*/
	
	function index() {
		
		//$this->Inasistencia->recursive = 0;
		$this->set('inasistencias', $this->paginate());
		$this->loadModel('Curso');
		$cursos = $this->Curso->find('list');
		$this->loadModel('Materia');
		$materias = $this->Materia->find('list');
		$alumnos = $this->Inasistencia->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
				
		$this->redirectToNamed();
		$conditions = array();
		if(!empty($this->params['named']['curso_id']))
		{
			$conditions['Inasistencia.curso_id ='] = $this->params['named']['curso_id'];
		}
		if(!empty($this->params['named']['materia_id']))
		{
			$conditions['Inasistencia.materia_id ='] = $this->params['named']['materia_id'];
		}
		if(!empty($this->params['named']['alumno_id']))
		{
			$conditions['Inasistencia.alumno_id ='] = $this->params['named']['alumno_id'];
		}
		if(!empty($this->params['named']['creado']))
		{
			$conditions['Inasistencia.creado ='] = $this->params['named']['creado'];
		}
		if(!empty($this->params['named']['modificado']))
		{
			$conditions['Inasistencia.modificado ='] = $this->params['named']['modificado'];
		}
		if(!empty($this->params['named']['tipo']))
		{
			$conditions['Inasistencia.tipo ='] = $this->params['named']['tipo'];
		}
		if(!empty($this->params['named']['causa']))
		{
			$conditions['Inasistencia.causa ='] = $this->params['named']['causa'];
		}
		if(!empty($this->params['named']['justificado']))
		{
			$conditions['Inasistencia.justificado ='] = $this->params['named']['justificado'];
		}
		/*if(!empty($this->params['named']['day_f']) && !empty($this->params['named']['month_f']) && !empty($this->params['named']['year_f']))
		{
			$conditions['Inscripcion.fechaInscripcion >='] = $this->params['named']['year_f'].'-'.$this->params['named']['month_f'].'-'.$this->params['named']['day_f'];
		}
		if(!empty($this->params['named']['day_t']) && !empty($this->params['named']['month_t']) && !empty($this->params['named']['year_t']))
		{
			$conditions['Inscripcion.fechaInscripcion <='] = $this->params['named']['year_t'].'-'.$this->params['named']['month_t'].'-'.$this->params['named']['day_t'];
		}
		*/
		$inasistencias = $this->paginate('Inasistencia',$conditions);
		$this->set(compact('cursos', 'materias', 'alumnos'));
	}
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Inasistencia no valida'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inasistencia', $this->Inasistencia->read(null, $id));
				
	}

	function add() {
		if (!empty($this->data)) {
			$this->Inasistencia->create();
			if ($this->Inasistencia->save($this->data)) {
				$this->Session->setFlash(__('La inasistencia ha sido grabada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La inasistencia no ha sido grabado. Favor, intentelo nuevamente.'));
			}
		}
		$alumnos = $this->Inasistencia->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$materias = $this->Inasistencia->Materia->find('list');
		$this->set(compact('alumnos', 'materias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Inasistencia no valida'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inasistencia->save($this->data)) {
				$this->Session->setFlash(__('La inasistencia ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La inasistencia no ha sido grabada. Favor, intentelo nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inasistencia->read(null, $id);
		}
		$alumnos = $this->Inasistencia->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$materias = $this->Inasistencia->Materia->find('list');
		$this->set(compact('alumnos','materias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para inasistencia'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Inasistencia->delete($id)) {
			$this->Session->setFlash(__('Inasistencia borrado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Inasistencia no fue borrado'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
