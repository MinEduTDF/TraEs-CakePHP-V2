<?php
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
App::uses('Controller', 'Controller');

class AppController extends Controller {
    // added the debug toolkit
	// sessions support
	// authorization for login and logut redirect
    public $components = array(
            //'DebugKit.Toolbar',
			'Session',
		    'Auth' => array(
                        'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
					    'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),                        'authError' => 'Debes estar logueado para continuar.', 
					    'loginError' => 'Nombre de usuario o contraseña incorrectos.',
						'authorize' => array('Controller'),
    ));

    // only allow the login controllers only
	public function beforeFilter() {
        $this->Auth->allow('login');
		$this->set('current_user', $this->Auth->user());
    }
	
    public function isAuthorized($user) {
		// Admin puede acceder a todo
		// Si no es así entonces se trata de un usuario común y lo redirigimos a otra página.
		// En este caso a la acción usuario del controller users
    		if (isset($user['username']) == "usuario") { $this->redirect('usuario'); }
    	
    	return true;
}
    
    /**
    * Mensaje de exito para las vistas
    * @param string $url
    * @param string $msg
    */ 
    function flashSuccess($msg, $url = null)
    {
       $this->Session->setFlash(__($msg));
       if(!empty($url))
       {
            $this->redirect($url, null, true);
       }
    }
     
    /**
    * Mensaje de error para las vistas
    * @param string $url
    * @param string $msg
    */ 
    function flashWarnings($msg, $url = null)
    {
       $this->Session->setFlash(__($msg));
       if(!empty($url))
       {
            $this->redirect($url, null, true);
       }
    }
	
	/**
	* ejecuta acciones cuando el id se encuentra vacio
	* @param int $id
	* @param string $url
	* @return bool
	*/
	function idEmpty($id, $url)
	{
		if (empty($id)) {
			$this->flashWarnings('ID incorrecto',$url);
		}
	}
	
	/**
	* Recarga la pÃ¡gina ubicando los valores de la matriz 'params[url]' 
	* dentro de la matriz 'params[named]'
	*/
	function redirectToNamed()
	{
		$urlArray = $this->params['url'];
		unset($urlArray['url']);
		if(!empty($urlArray))
		{
			$this->redirect($urlArray,null,true);
		}
	}
    
	function __deleteFile($file)
	{
	  if (file_exists($file)) 
		{
			unlink($file);
		}
	}
}
