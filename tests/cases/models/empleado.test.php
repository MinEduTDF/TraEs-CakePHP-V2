<?php
/* Empleado Test cases generated on: 2014-03-03 18:03:24 : 1393870644*/
App::import('Model', 'Empleado');

class EmpleadoTestCase extends CakeTestCase {
	var $fixtures = array('app.empleado', 'app.estado', 'app.inscripcion', 'app.inventario', 'app.usuario', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.nota', 'app.alumnos_materia', 'app.centros_empleado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Empleado =& ClassRegistry::init('Empleado');
	}

	function endTest() {
		unset($this->Empleado);
		ClassRegistry::flush();
	}

}
?>