<?php
/* Aco Test cases generated on: 2015-04-01 17:04:42 : 1427908362*/
App::import('Model', 'Aco');

class AcoTestCase extends CakeTestCase {
	var $fixtures = array('app.aco', 'app.aro', 'app.aros_aco');

	function startTest() {
		$this->Aco =& ClassRegistry::init('Aco');
	}

	function endTest() {
		unset($this->Aco);
		ClassRegistry::flush();
	}

}
?>