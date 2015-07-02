<?php
/* Horario Test cases generated on: 2014-03-03 18:03:43 : 1393870723*/
App::import('Model', 'Horario');

class HorarioTestCase extends CakeTestCase {
	var $fixtures = array('app.horario', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.nota', 'app.alumnos_materia', 'app.usuario', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.inventario', 'app.cargos_empleado', 'app.centros_empleado', 'app.cargos_horario');

	function startTest() {
		$this->Horario =& ClassRegistry::init('Horario');
	}

	function endTest() {
		unset($this->Horario);
		ClassRegistry::flush();
	}

}
?>