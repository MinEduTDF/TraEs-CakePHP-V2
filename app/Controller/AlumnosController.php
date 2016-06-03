<?php
App::uses('AppController', 'Controller');

class AlumnosController extends AppController {

	var $name = 'Alumnos';
    public $helpers = array('Session', 'Form', 'Time', 'Js');
	public $components = array('Auth','Session', 'RequestHandler');
	public $paginate = array('Alumno' => array('limit' => 4, 'order' => 'Alumno.creado DESC'));

	public function index() {
		$this->Alumno->recursive = 0;
		$this->paginate['Alumno']['limit'] = 4;
		$this->paginate['Alumno']['order'] = array('Alumno.id' => 'asc');
		//$this->paginate['Alumno']['conditions'] = array('Alumno.status' => 1);
		//$this->set('alumnos', $this->paginate());
		$this->redirectToNamed();
		$conditions = array();
        
		if(!empty($this->params['named']['nombre_completo_alumno']))
		{
			$conditions['Alumno.nombre_completo_alumno ='] = $this->params['named']['nombre_completo_alumno'];
		}

		if(!empty($this->params['named']['documento_nro']))
		{
			$conditions['Alumno.documento_nro ='] = $this->params['named']['documento_nro'];
		}
		
		$alumnos = $this->paginate('Alumno', $conditions);
		$this->set(compact('alumnos'));
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Alumno no valido', 'default', array('class' => 'alert alert-danger'));
			$this->redirect(array('action' => 'index'));
		}
		$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'alumno_' . $id .'.pdf'
		);
		$this->set('alumno', $this->Alumno->read(null, $id));
	}
	
	public function add() {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
          if (!empty($this->data)) {
			$this->Alumno->create();
			
			// Antes de guardar se calcula la edad
			$day = $this->request->data['Alumno']['fecha_nac']['day'];
			$month = $this->request->data['Alumno']['fecha_nac']['month'];
			$year = $this->request->data['Alumno']['fecha_nac']['year'];
			
			// Se calcula la edad y se deja en los datos que se intentaran guardar
			$this->request->data['Alumno']['edad'] = $this->__getEdad($day, $month, $year);
			
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash('El alumno ha sido grabado', 'default', array('class' => 'alert alert-success'));
				$inserted_id = $this->Alumno->id;
				$this->redirect(array('action' => 'view', $inserted_id));
			} else {
				$this->Session->setFlash('El alumno no fue grabado. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Alumno no valido', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
    	  // Antes de guardar se calcula la edad
		  $day = $this->request->data['Alumno']['fecha_nac']['day'];
		  $month = $this->request->data['Alumno']['fecha_nac']['month'];
		  $year = $this->request->data['Alumno']['fecha_nac']['year'];
		  // Se calcula la edad y se deja en los datos que se intentaran guardar
		  $this->request->data['Alumno']['edad'] = $this->__getEdad($day, $month, $year);
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

	public function delete($id = null) {
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
	
	//Métodos Privados
	
	private function __getEdad($day, $month, $year){
		$year_diff  = date("Y") - $year;
		$month_diff = date("m") - $month;
		$day_diff   = date("d") - $day;
		if ($day_diff < 0 && $month_diff==0) $year_diff--;
		if ($day_diff < 0 && $month_diff < 0) $year_diff--;
                return $year_diff;
	}
}
?>
