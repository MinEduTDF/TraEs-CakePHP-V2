<?php
class InscripcionsController extends AppController {

	var $name = 'Inscripcions';
    var $paginate = array('Inscripcion' => array('limit' => 5, 'order' => 'Inscripcion.id DESC'));
	
	function beforeFilter(){

        parent::beforeFilter();
		$this->Auth->allowedActions = array('index', 'view');
    }
	
	function index() {
		//$this->Inscripcion->recursive = 0;
		$this->set('inscripcions', $this->paginate());
		$alumnos = $this->Inscripcion->Alumno->find('list');
		$ciclos = $this->Inscripcion->Ciclo->find('list');
		$centros = $this->Inscripcion->Centro->find('list');
		$materias = $this->Inscripcion->Materia->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list');
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['ciclo_id']))
		{
			$conditions['Inscripcion.ciclo_id ='] = $this->params['named']['ciclo_id'];
		}
		if(!empty($this->params['named']['centro_id']))
		{
			$conditions['Inscripcion.centro_id ='] = $this->params['named']['centro_id'];
		}
		if(!empty($this->params['named']['materia_id']))
		{
			$conditions['Inscripcion.materia_id ='] = $this->params['named']['materia_id'];
		}
		if(!empty($this->params['named']['empleado_id']))
		{
			$conditions['Inscripcion.empleado_id ='] = $this->params['named']['empleado_id'];
		}
		if(!empty($this->params['named']['day_f']) && !empty($this->params['named']['month_f']) && !empty($this->params['named']['year_f']))
		{
			$conditions['Inscripcion.fechaInscripcion >='] = $this->params['named']['year_f'].'-'.$this->params['named']['month_f'].'-'.$this->params['named']['day_f'];
		}
		if(!empty($this->params['named']['day_t']) && !empty($this->params['named']['month_t']) && !empty($this->params['named']['year_t']))
		{
			$conditions['Inscripcion.fechaInscripcion <='] = $this->params['named']['year_t'].'-'.$this->params['named']['month_t'].'-'.$this->params['named']['day_t'];
		}
		
		$inscripcions = $this->paginate('Inscripcion',$conditions);
		
		$this->set(compact('ciclos', 'centros', 'materias', 'empleados'));
		
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
				$this->Session->setFlash(__('La inscripcion ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La inscripcion no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		$alumnos = $this->Inscripcion->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$ciclos = $this->Inscripcion->Ciclo->find('list');
		$centros = $this->Inscripcion->Centro->find('list');
		$materias = $this->Inscripcion->Materia->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$this->set(compact('alumnos', 'ciclos', 'centros','materias', 'empleados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Inscripcion no valida.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inscripcion->save($this->data)) {
				$this->Session->setFlash(__('La inscripcion ha sido grabada.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La inscripcion no ha sido grabada. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscripcion->read(null, $id);
		}
		$alumnos = $this->Inscripcion->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$ciclos = $this->Inscripcion->Ciclo->find('list');
		$centros = $this->Inscripcion->Centro->find('list');
		$materias = $this->Inscripcion->Materia->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$this->set(compact('alumnos', 'ciclos', 'centros','materias', 'empleados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valida para inscripcion.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inscripcion->delete($id)) {
			$this->Session->setFlash(__('Inscripcion borrada.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inscripcion no fue borrada.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>