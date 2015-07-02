<?php
/* Materia Test cases generated on: 2014-03-03 18:03:25 : 1393871005*/
App::import('Model', 'Materia');

class MateriaTestCase extends CakeTestCase {
	var $fixtures = array('app.materia', 'app.curso', 'app.centro', 'app.alumno', 'app.inscripcion', 'app.ciclo', 'app.cargo', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.cargos_ciclo', 'app.horario', 'app.cargos_horario', 'app.ciclos_curso', 'app.ciclos_materia', 'app.nota', 'app.alumnos_materia', 'app.modalidad', 'app.orientacion');

	function startTest() {
		$this->Materia =& ClassRegistry::init('Materia');
	}

	function endTest() {
		unset($this->Materia);
		ClassRegistry::flush();
	}

}
?>