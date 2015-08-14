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
	  'Session', 
	  'Auth'=> array(
        'loginAction' => array(
          'controller' => 'users',
        'action' => 'login'
      ),
	      'loginRedirect' => array(
		      'controller' => 'centros',
			  'action' => 'index'
		  ),
		  'logoutRedirect' => array(
		      'controller' => 'pages',
			  'action' => 'display'
		  ),
		)
	);
	
	      	  
	public function beforeFilter(){
$this->Auth->authenticate = array('Form');	    				                     
    } // fin de function beforeFilter() }
			 
    
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
