<?php

class AppController extends Controller {


    var $components = array(
	  'Session', 
	  'Auth'=> array(
	      /*'loginAction' => array(
		      'controller' => 'users',
			  'action' => 'login'
		  ),*/
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
    	
    /**
    * Inicializo AuthComponent.
    */
	function inicializarAuth(){       
                 
         $this->Auth->allow('login', 'logout', 'display');
		 $this->Auth->loginError = "El nombre de usuario y/o la contrasena no son correctos. Por favor, intente nuevamente.";
		 $this->Auth->authError = "Para entrar en la zona privada tienes que autenticarte";
		 $this->Auth->authorize = array('model'=>'User');
		 //$this->Auth->authorize = 'controller';
		 //$this->Auth->allow('display');
         		 		 		 		 
    } // fin de function inicializarAuth
  
     	  
	public function beforeFilter(){
   
        $this->inicializarAuth();
		$this->Session->write('Auth.redirect', null);
	    $this->set('current_user', $this->Auth->user());
				                     
    } // fin de function beforeFilter() }
			 
    
    /**
    * Manejo de acciones a las cuales tiene acceso el usuario luego de autentificarse.
    * @param array $user
    * @return bool
    *
	public function isAuthorized($user){
	
	    if(isset($user['User']['role']) && $user['User']['role'] === 'administrador')
		{
		   return true;
		}
		
		return false;
	}*/
		
	/**
    * Mensaje de exito para las vistas
    * @param string $url
    * @param string $msg
    */ 
    function flashSuccess($msg, $url = null)
    {
       $this->Session->setFlash(__($msg, true));
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
	   $this->Session->setFlash($msg, true);
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
