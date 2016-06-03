<?php
class InscripcionsController extends AppController {

	var $name = 'Inscripcions';
    
	public $helpers = array('Session');
	public $components = array('Auth', 'Session');
	public $paginate = array('Inscripcion' => array('limit' => 4, 'order' => 'Inscripcion.fecha_alta DESC'));
		
	function beforeFilter(){
	    parent::beforeFilter();
		if($this->ifActionIs(array('add', 'edit'))){
			$this->__lists();
		}
	}
	
	public function index() {
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
		$inscripcions = $this->paginate('Inscripcion',$conditions);
		$this->set(compact('inscripcions', 'alumnos'));
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Inscripcion no valida.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscripcion', $this->Inscripcion->read(null, $id));
	}

	public function add() {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		  if (!empty($this->data)) {
			$this->Inscripcion->create();
 		    
			// Antes de guardar se genera el nombre del agente
			$this->request->data['Inscripcion']['empleado_id'] = $this->Auth->user('empleado_id');
			
			// Antes de guardar se genera el número de legajo del Alumno.
			$cicloId = $this->request->data['Inscripcion']['ciclo_id'];
			$ciclos = $this->Inscripcion->Ciclo->findById($cicloId, 'nombre');
			$ciclo = substr($ciclos['Ciclo']['nombre'], -2);
			$alumnoId = $this->request->data['Inscripcion']['alumno_id'];
			$alumnosDoc = $this->Inscripcion->Alumno->findById($alumnoId, 'documento_nro');
            $alumnoDoc = $alumnosDoc['Alumno']['documento_nro'];
			
			//Se genera el nro de legajo y se deja en los datos que se intentaran guardar
			$this->request->data['Inscripcion']['legajo_nro'] = $this->__getCodigo($ciclo, $alumnoDoc);
			if ($this->Inscripcion->save($this->data)) {
				$this->Session->setFlash('La inscripcion ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				$inserted_id = $this->Inscripcion->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('La inscripcion no fue grabada. Intente nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Inscripcion no valida.', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
            if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
			if ($this->Inscripcion->save($this->data)) {
				$this->Session->setFlash('La inscripcion ha sido grabada.', 'default', array('class' => 'alert alert-success'));
				//$this->redirect(array('action' => 'index'));
				$inserted_id = $this->Inscripcion->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('La inscripcion no fue grabada. Intente nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscripcion->read(null, $id);
		}
	}

	public function delete($id = null) {
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
	
	//Métodos privados
	
	private function __lists(){
	    $this->loadModel('User');
        $this->loadModel('Empleado');
		$alumnos = $this->Inscripcion->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno'), 'order'=>'nombre_completo_alumno ASC'));
		$ciclos = $this->Inscripcion->Ciclo->find('list');
		$centros = $this->Inscripcion->Centro->find('list');
		$cursos = $this->Inscripcion->Curso->find('list', array('fields'=>array('id','nombre_completo_curso')));
		$materias = $this->Inscripcion->Materia->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado'), 'conditions'=>array('id'== 'empleadoId')));
	    $this->set(compact('alumnos', 'ciclos', 'centros', 'cursos', 'materias', 'empleados'));
	}
	
	private function __getCodigo($ciclo, $alumnoDoc){
		$legajo= $alumnoDoc."-".$ciclo;
		return $legajo;
    }
}
?>
