<?php
/* Curso Test cases generated on: 2014-03-03 18:03:10 : 1393870570*/
App::import('Model', 'Curso');

class CursoTestCase extends CakeTestCase {
	var $fixtures = array('app.curso', 'app.centro', 'app.alumno', 'app.inscripcion', 'app.nota', 'app.materia', 'app.alumnos_materia', 'app.cargo', 'app.estado', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.docente', 'app.cargos_docente', 'app.empleado', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.modalidad', 'app.orientacion', 'app.usuario', 'app.centros_empleado');

	function startTest() {
		$this->Curso =& ClassRegistry::init('Curso');
	}

	function endTest() {
		unset($this->Curso);
		ClassRegistry::flush();
	}

}
?>