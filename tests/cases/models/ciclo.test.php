<?php
/* Ciclo Test cases generated on: 2014-03-03 18:03:12 : 1393870512*/
App::import('Model', 'Ciclo');

class CicloTestCase extends CakeTestCase {
	var $fixtures = array('app.ciclo', 'app.inscripcion', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.nota', 'app.materia', 'app.alumnos_materia', 'app.modalidad', 'app.orientacion', 'app.usuario', 'app.empleado', 'app.centros_empleado', 'app.estado', 'app.cargos_ciclo', 'app.docente', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.ciclos_curso', 'app.ciclos_materia');

	function startTest() {
		$this->Ciclo =& ClassRegistry::init('Ciclo');
	}

	function endTest() {
		unset($this->Ciclo);
		ClassRegistry::flush();
	}

}
?>