<?php
/*
 * Controller/FullCalendarController.php
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
class FullCalendarController extends FullCalendarAppController {

	var $name = 'FullCalendar';
    var $helpers = array('Session', 'Html');
	public $components = array('Auth','Session', 'RequestHandler');


	function index() {
	}

}
?>
