<?php
class InasistenciasController extends AppController {

	var $name = 'Inasistencias';
    var $helpers = array('Session');
	var $components = array('Auth','Session');
	var $paginate = array('Inasistencia' => array('limit' => 4, 'order' => 'Inasistencia.created DESC'));

    public function sanitize($string, $force_lowercase = true, $anal = false) {
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]","}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;","â€", "â€", ",", "<",">", "/", "?");
    $clean = trim(str_replace($strip, "", strip_tags($string)));
    $clean = preg_replace('/\s+/', "-", $clean);
    $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
    return ($force_lowercase) ?
        (function_exists('mb_strtolower')) ?
            mb_strtolower($clean, 'UTF-8') :
            strtolower($clean) :
        $clean;
    }


	function index() {
		
		$this->Inasistencia->recursive = 1;
		$cicloIdActual = $this->getLastCicloId();
		$this->paginate['Inasistencia']['limit'] = 8;
		$this->paginate['Inasistencia']['order'] = array('Inasistencia.created' => 'DESC');
		$this->paginate['Inasistencia']['conditions'] = array('Inasistencia.ciclo_id' => $cicloIdActual);
		
		$this->set('inasistencias', $this->paginate());
		$alumnos = $this->Inasistencia->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['alumno_id']))
		{
			$conditions['Inasistencia.alumno_id ='] = $this->params['named']['alumno_id'];
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
		$inasistencias = $this->paginate('Inasistencia', $conditions);
		$this->set(compact('inasistencias', 'alumnos'));
	}
	
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Inasistencia no valida', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inasistencia', $this->Inasistencia->read(null, $id));
				
	}

	public function add() {
        //abort if cancel button was pressed  
        if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Agregación cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
        if ($this->request->is('post')) {
            $this->Inasistencia->create();
            
            //Antes de guardar genera el nombre del agente
			$this->request->data['Inscripcion']['empleado_id'] = $this->Auth->user('empleado_id');

            if(empty($this->data['Inasistencia']['certificacion']['name'])){
               unset($this->request->data['Inasistencia']['certificacion']);
            }
	        if(!empty($this->data['Inasistencia']['certificacion']['name'])){
			   $file=$this->data['Inasistencia']['certificacion'];
			   $file['name']=$this->sanitize($file['name']);
			   $this->request->data['Inasistencia']['certificacion'] = time().$file['name'];
			   if($this->Inasistencia->save($this->request->data)) {
				  move_uploaded_file($file['tmp_name'], APP . 'webroot/files/certificaciones/' .DS. time().$file['name']);  
				  $this->Session->setFlash(__('La Certificación se guardó.'));
				  return $this->redirect(array('action' => 'index'));
		       }
	        }
           $this->Session->setFlash(__('La Certificación no se guardó.'));
        }
        $ciclos = $this->Inasistencia->Ciclo->find('list');
        $cicloIdActual = $this->getLastCicloId();
        $this->loadModel('Empleado');
        $empleados = $this->Inasistencia->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado'), 'conditions'=>array('id'== 'empleadoId')));
        $this->set(compact('empleados', 'ciclos', 'cicloIdActual'));
    }
 
	 
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Inasistencia no valida', 'default', array('class' => 'alert alert-warning'));
			//$this->redirect(array('action' => 'index'));
			$inserted_id = $this->Inasistencia->id;
			$this->redirect(array('action' => 'view', $inserted_id));
		}
		if (!empty($this->data)) {
		  //abort if cancel button was pressed  
          if(isset($this->params['data']['cancel'])){
                $this->Session->setFlash('Los cambios no fueron guardados. Edición cancelada.', 'default', array('class' => 'alert alert-warning'));
                $this->redirect( array( 'action' => 'index' ));
		  }
		  if ($this->Inasistencia->save($this->data)) {
				$this->Session->setFlash('La inasistencia ha sido grabado', 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La inasistencia no fue grabada. Intentelo nuevamente.', 'default', array('class' => 'alert alert-danger'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inasistencia->read(null, $id);
		}
		$alumnos = $this->Inasistencia->Alumno->find('list', array('fields'=>array('id', 'nombre_completo_alumno')));
		$cursos = $this->Inasistencia->Curso->find('list', array('fields'=>array('id', 'nombre_completo_curso')));
		$materias = $this->Inasistencia->Materia->find('list');
		$ciclos = $this->Inasistencia->Ciclo->find('list');
		$this->set(compact('alumnos', 'cursos', 'materias', 'ciclos'));
	}


	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Id no valido para inasistencia', 'default', array('class' => 'alert alert-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if ($this->Inasistencia->delete($id)) {
			$this->Session->setFlash('La inasistencia ha sido borrada', 'default', array('class' => 'alert alert-success'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('La inasistencia no fue borrado', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
