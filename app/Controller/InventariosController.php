<?php
class InventariosController extends AppController {

	var $name = 'Inventarios';
    var $paginate = array('Inventario' => array('limit' => 5, 'order' => 'Inventario.id DESC'));
	
	/*
	function beforeFilter(){

        parent::beforeFilter();
		$this->Auth->allowedActions = array('index', 'view');
    }
	*/
	
	function index() {
		//$this->Inventario->recursive = 0;
		$this->set('inventarios', $this->paginate());
		$empleados = $this->Inventario->Empleado->find('list');
		$this->redirectToNamed();
		$conditions = array();
		
		if(!empty($this->params['named']['nombre']))
		{
			$conditions['Inventario.nombre ='] = $this->params['named']['nombre'];
		}
		if(!empty($this->params['named']['empleado_id']))
		{
			$conditions['Inventario.empleado_id ='] = $this->params['named']['empleado_id'];
		}	
		
		$inventarios = $this->paginate('Inventario',$conditions);
		
		$this->set(compact('inventarios', 'empleados'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Inventario no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inventario', $this->Inventario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Inventario->create();
			if ($this->Inventario->save($this->data)) {
				$this->Session->setFlash(__('El inventario ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El inventario no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$empleados = $this->Inventario->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$this->set(compact('empleados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Inventario no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inventario->save($this->data)) {
				$this->Session->setFlash(__('El inventario ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El inventario no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inventario->read(null, $id);
		}
		$empleados = $this->Inventario->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$this->set(compact('empleados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para inventario.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inventario->delete($id)) {
			$this->Session->setFlash(__('Inventario borrado.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inventario no fue borrado.'));
		$this->redirect(array('action' => 'index'));
	}
}
?>