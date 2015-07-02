<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

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


    //var $components = array('Email', 'Auth', 'Session');
    
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
       $this->Session->setFlash(__($msg, true));
       if(!empty($url))
       {
            $this->redirect($url, null, true);
       }
    }
}
