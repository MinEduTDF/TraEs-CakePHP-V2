<?php
/* Inscripcion Test cases generated on: 2014-03-03 18:03:18 : 1393870758*/
App::import('Model', 'Inscripcion');

class InscripcionTestCase extends CakeTestCase {
	var $fixtures = array('app.inscripcion', 'app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.empleado', 'app.inventario', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.horario', 'app.cargos_horario', 'app.nota', 'app.alumnos_materia');

	function startTest() {
		$this->Inscripcion =& ClassRegistry::init('Inscripcion');
	}

	function endTest() {
		unset($this->Inscripcion);
		ClassRegistry::flush();
	}

}
?>