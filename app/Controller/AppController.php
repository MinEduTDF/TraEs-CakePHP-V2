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
class AppController extends Controller {
public $components = array(
            'Auth' => array('authenticate' => array('Form' => array( 'userModel' => 'User',
                                    'fields' => array(
                                                        'username' => 'username',
                                                        'password' => 'password'
                                                        )
                                                )
                            ),
                    'authorize' => array('Controller'),
                    'loginAction' => array('controller' => 'users', 'action' => 'login'),
                    'loginRedirect' => array('controller' => 'alumnos', 'action' => 'index'),
                    'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
                    'authError' => 'You don\'t have access here.',
            ),
        );

    public function beforeFilter() {
        /* set actions that will not require login */
        $this->Auth->allow('index','display', 'view');
    }
	
    public function isAuthorized($user) {
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
