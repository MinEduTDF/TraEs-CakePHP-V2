<?php
/* Docente Test cases generated on: 2014-03-03 18:03:47 : 1393870607*/
App::import('Model', 'Docente');

class DocenteTestCase extends CakeTestCase {
	var $fixtures = array('app.docente', 'app.estado', 'app.titulo', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.nota', 'app.alumnos_materia', 'app.usuario', 'app.empleado', 'app.centros_empleado', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.docentes_materia');

	function startTest() {
		$this->Docente =& ClassRegistry::init('Docente');
	}

	function endTest() {
		unset($this->Docente);
		ClassRegistry::flush();
	}

}
?>