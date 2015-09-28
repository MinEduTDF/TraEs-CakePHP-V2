<?php
/* Estado Test cases generated on: 2014-03-03 18:03:13 : 1393870693*/
App::import('Model', 'Estado');

class EstadoTestCase extends CakeTestCase {
	var $fixtures = array('app.estado', 'app.docente', 'app.titulo', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.nota', 'app.alumnos_materia', 'app.usuario', 'app.empleado', 'app.inventario', 'app.cargos_empleado', 'app.centros_empleado', 'app.cargos_docente', 'app.horario', 'app.cargos_horario', 'app.docentes_materia');

	function startTest() {
		$this->Estado =& ClassRegistry::init('Estado');
	}

	function endTest() {
		unset($this->Estado);
		ClassRegistry::flush();
	}

}
?>