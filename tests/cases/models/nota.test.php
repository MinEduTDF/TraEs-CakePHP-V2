<?php
/* Nota Test cases generated on: 2014-03-03 18:03:11 : 1393871051*/
App::import('Model', 'Nota');

class NotaTestCase extends CakeTestCase {
	var $fixtures = array('app.nota', 'app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docente', 'app.estado', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Nota =& ClassRegistry::init('Nota');
	}

	function endTest() {
		unset($this->Nota);
		ClassRegistry::flush();
	}

}
?>