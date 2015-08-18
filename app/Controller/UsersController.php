<?php
class UsersController extends AppController {

public $name = 'Users';

  
public  function beforeFilter(){

        parent::beforeFilter();
    
    $this->Auth->allow('login', 'logout');
  }
  
   	
public	function login() {
    if ($this->request->is('post')) {
        // Important: Use login() without arguments! See warning below.
        if ($this->Auth->login($this->request->data)) {
$this->set('current_user', $this->Auth->user());
            return $this->redirect($this->Auth->redirectUrl());
            // Prior to 2.3 use
            // `return $this->redirect($this->Auth->redirect());`
        }
        $this->Session->setFlash(
            __('Username or password is incorrect'),
            'default',
            array(),
            'auth'
        );
    } 
    
	}	
     
    function logout() {
            
			$this->redirect($this->Auth->logout());
    }

	function index() {
		//$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			//$this->Session->flashWarnings('Usuario no valido', 'index');
            $this->Session->setFlash(__('Invalid usuario'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('El usuario ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				//$this->flashWarnings('El usuario no ha sido grabado. Favor, intente nuevamente.', 'index');
                                $this->Session->setFlash(__('The usuario could not be saved. Please, try again.'));
			}
		}
		$centros = $this->User->Centro->find('list');
		$empleados = $this->User->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$this->set(compact('centros', 'empleados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Usuario no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('El usuario ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$centros = $this->User->Centro->find('list');
		$empleados = $this->User->Empleado->find('list', array('fields'=>array('id', 'nombre_completo_empleado')));
		$this->set(compact('centros', 'empleados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valida para usuario.'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('Usuario borrado.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usuario no fue borrado.'));
		$this->redirect(array('action' => 'index'));
	}
	
}
?>
