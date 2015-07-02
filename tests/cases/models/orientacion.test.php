<?php
/* Orientacion Test cases generated on: 2014-03-03 18:03:36 : 1393871076*/
App::import('Model', 'Orientacion');

class OrientacionTestCase extends CakeTestCase {
	var $fixtures = array('app.orientacion', 'app.centro', 'app.alumno', 'app.curso', 'app.modalidad', 'app.cargo', 'app.materia', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.nota', 'app.alumnos_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Orientacion =& ClassRegistry::init('Orientacion');
	}

	function endTest() {
		unset($this->Orientacion);
		ClassRegistry::flush();
	}

}
?>