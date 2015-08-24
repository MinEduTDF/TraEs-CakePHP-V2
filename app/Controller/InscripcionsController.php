<?php
class InscripcionsController extends AppController {

	var $name = 'Inscripcions';
    var $paginate = array('Inscripcion' => array('limit' => 4, 'order' => 'Inscripcion.id DESC'));
	
	function index() {
		//$this->Inscripcion->recursive = 0;
		$this->set('inscripcions', $this->paginate());
		$alumnos = $this->Inscripcion->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['legajo_nro']))
		{
			$conditions['Inscripcion.legajo_nro ='] = $this->params['named']['legajo_nro'];
		}
		if(!empty($this->params['named']['alumno_id']))
		{
			$conditions['Inscripcion.alumno_id ='] = $this->params['named']['alumno_id'];
		}
		/*if(!empty($this->params['named']['fecha_alta']))
		{
			$conditions['Inscripcion.fecha_alta ='] = $this->params['named']['fecha_alta'];
		}
		if(!empty($this->params['named']['fecha_baja']))
		{
			$conditions['Inscripcion.fecha_baja ='] = $this->params['named']['fecha_baja'];
		}
		if(!empty($this->params['named']['fecha_egreso']))
		{
			$conditions['Inscripcion.fecha_egreso ='] = $this->params['named']['fecha_egreso'];
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
		$inscripcions = $this->paginate('Inscripcion',$conditions);
		$this->set(compact('inscripcions', 'alumnos'));
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Inscripcion no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscripcion', $this->Inscripcion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Inscripcion->create();
			if ($this->Inscripcion->save($this->data)) {
				$this->Session->setFlash('La inscripcion ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La inscripcion no ha sido grabada. Intente                                             nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alumnos = $this->Inscripcion->Alumno->find('list', array('fields'=>array('id',                                                    'nombre_completo_alumno')));
		$ciclos = $this->Inscripcion->Ciclo->find('list');
		$centros = $this->Inscripcion->Centro->find('list');
		$cursos = $this->Inscripcion->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
		$materias = $this->Inscripcion->Materia->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list', array('fields'=>array('id',                                                         'nombre_completo_empleado')));
		$this->set(compact('alumnos', 'ciclos', 'centros', 'cursos', 'materias', 'empleados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Inscripcion no valida.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inscripcion->save($this->data)) {
				$this->Session->setFlash('La inscripcion ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La inscripcion no ha sido grabada. Intente nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscripcion->read(null, $id);
		}
		$alumnos = $this->Inscripcion->Alumno->find('list', array('fields'=>array('id',                                                     'nombre_completo_alumno')));
		$ciclos = $this->Inscripcion->Ciclo->find('list');
		$centros = $this->Inscripcion->Centro->find('list');
		$cursos = $this->Inscripcion->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
		$materias = $this->Inscripcion->Materia->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list', array('fields'=>array('id',                                                         'nombre_completo_empleado')));
		$this->set(compact('alumnos', 'ciclos', 'centros', 'cursos', 'materias', 'empleados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valida para inscripcion.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inscripcion->delete($id)) {
			$this->Session->setFlash('La Inscripcion ha sido borrada.', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('La Inscripcion no fue borrada. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>