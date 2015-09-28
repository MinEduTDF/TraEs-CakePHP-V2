<?php
/* Inventario Test cases generated on: 2014-03-03 18:03:51 : 1393870791*/
App::import('Model', 'Inventario');

class InventarioTestCase extends CakeTestCase {
	var $fixtures = array('app.inventario', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.ciclos_materia', 'app.nota', 'app.alumnos_materia', 'app.usuario', 'app.centros_empleado', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.docentes_materia', 'app.producto');

	function startTest() {
		$this->Inventario =& ClassRegistry::init('Inventario');
	}

	function endTest() {
		unset($this->Inventario);
		ClassRegistry::flush();
	}

}
?>