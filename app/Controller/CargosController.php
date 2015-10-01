<?php
class CargosController extends AppController {

	var $name = 'Cargos';
    var $paginate = array('Cargo' => array('limit' => 5, 'order' => 'Cargo.id DESC'));
	/*	
    function beforeFilter(){

        parent::beforeFilter();
		$this->Auth->allowedActions = array('index', 'view');
    }	
	*/
	function index() {
		//$this->Cargo->recursive = 0;
		$this->set('cargos', $this->paginate());
		$estados = $this->Cargo->Estado->find('list');
		$centros = $this->Cargo->Centro->find('list');
		$materias = $this->Cargo->Materia->find('list');
		//$docentes = $this->Cargo->Docente->find('list');
		$this->redirectToNamed();
		$conditions = array();	
		
		if(!empty($this->params['named']['estado_id']))
		{
			$conditions['Cargo.estado_id ='] = $this->params['named']['estado_id'];
		}
		if(!empty($this->params['named']['centro_id']))
		{
			$conditions['Cargo.centro_id ='] = $this->params['named']['centro_id'];
		}
		if(!empty($this->params['named']['materia_id']))
		{
			$conditions['Cargo.materia_id ='] = $this->params['named']['materia_id'];
		}
		/*if(!empty($this->params['named']['docente_id']))
		{
			$conditions['Cargo.docente_id ='] = $this->params['named']['docente_id'];
		}*/
		if(!empty($this->params['named']['day_f']) && !empty($this->params['named']['month_f']) && !empty($this->params['named']['year_f']))
		{
			$conditions['Cargo.fechaAltaPersona >='] = $this->params['named']['year_f'].'-'.$this->params['named']['month_f'].'-'.$this->params['named']['day_f'];
		}
		if(!empty($this->params['named']['day_t']) && !empty($this->params['named']['month_t']) && !empty($this->params['named']['year_t']))
		{
			$conditions['Cargo.fechaAltaPersona <='] = $this->params['named']['year_t'].'-'.$this->params['named']['month_t'].'-'.$this->params['named']['day_t'];
		}
		$cargos = $this->paginate('Cargo',$conditions);
		$this->set(compact('cargos', 'centros', 'materias', 'estados'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Cargo no valido'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cargo', $this->Cargo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Cargo->create();
			if ($this->Cargo->save($this->data)) {
				$this->Session->setFlash(__('El cargo ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cargo no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$centros = $this->Cargo->Centro->find('list');
		$cursos = $this->Cargo->Curso->find('list');
		$materias = $this->Cargo->Materia->find('list');
		$ciclos = $this->Cargo->Ciclo->find('list');
		$docentes = $this->Cargo->Docente->find('list', array('fields'=>array('id', 'nombre_completo_docente')));
		$empleados = $this->Cargo->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$horarios = $this->Cargo->Horario->find('list');
		$estados = $this->Cargo->Estado->find('list');
		$this->set(compact('centros', 'cursos', 'materias', 'ciclos', 'docentes', 'empleados', 'horarios', 'estados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Cargo no valido'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cargo->save($this->data)) {
				$this->Session->setFlash(__('El cargo ha sido grabado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cargo no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cargo->read(null, $id);
		}
		$centros = $this->Cargo->Centro->find('list');
		$cursos = $this->Cargo->Curso->find('list');
		$materias = $this->Cargo->Materia->find('list');
		$ciclos = $this->Cargo->Ciclo->find('list');
		$docentes = $this->Cargo->Docente->find('list', array('fields'=>array('id', 'nombre_completo_docente')));
		$empleados = $this->Cargo->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$horarios = $this->Cargo->Horario->find('list');
		$estados = $this->Cargo->Estado->find('list');
		$this->set(compact('centros', 'cursos', 'materias', 'ciclos', 'docentes', 'empleados', 'horarios', 'estados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para cargo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cargo->delete($id)) {
			$this->Session->setFlash(__('Cargo borrado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cargo no borrado'));
		$this->redirect(array('action' => 'index'));
	}
	
}
?>