<?php
App::uses('AppController', 'Controller');

class GraficosController extends AppController {
	var $name = 'Graficos';

    var $helpers = array('Session');
	public $components = array('Auth','Session', 'RequestHandler');
	
	function beforeFilter(){
		parent::beforeFilter();
	}

	
	function index() {
    } 

}
?>