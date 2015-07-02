<?php
/* Cargo Test cases generated on: 2014-03-03 18:03:59 : 1393870439*/
App::import('Model', 'Cargo');

class CargoTestCase extends CakeTestCase {
	var $fixtures = array('app.cargo', 'app.centro', 'app.curso', 'app.materia', 'app.estado', 'app.ciclo', 'app.cargos_ciclo', 'app.docente', 'app.cargos_docente', 'app.empleado', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Cargo =& ClassRegistry::init('Cargo');
	}

	function endTest() {
		unset($this->Cargo);
		ClassRegistry::flush();
	}

}
?>