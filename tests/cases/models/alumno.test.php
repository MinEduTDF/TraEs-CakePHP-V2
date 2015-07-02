<?php
/* Alumno Test cases generated on: 2014-03-03 18:03:19 : 1393870399*/
App::import('Model', 'Alumno');

class AlumnoTestCase extends CakeTestCase {
	var $fixtures = array('app.alumno', 'app.centro', 'app.curso', 'app.inscripcion', 'app.nota', 'app.materia', 'app.alumnos_materia');

	function startTest() {
		$this->Alumno =& ClassRegistry::init('Alumno');
	}

	function endTest() {
		unset($this->Alumno);
		ClassRegistry::flush();
	}

}
?>