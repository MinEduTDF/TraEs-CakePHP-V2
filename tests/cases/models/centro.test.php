<?php
/* Centro Test cases generated on: 2014-03-03 18:03:33 : 1393870473*/
App::import('Model', 'Centro');

class CentroTestCase extends CakeTestCase {
	var $fixtures = array('app.centro', 'app.alumno', 'app.curso', 'app.inscripcion', 'app.nota', 'app.materia', 'app.alumnos_materia', 'app.cargo', 'app.estado', 'app.ciclo', 'app.cargos_ciclo', 'app.docente', 'app.cargos_docente', 'app.empleado', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.modalidad', 'app.orientacion', 'app.usuario', 'app.centros_empleado');

	function startTest() {
		$this->Centro =& ClassRegistry::init('Centro');
	}

	function endTest() {
		unset($this->Centro);
		ClassRegistry::flush();
	}

}
?>