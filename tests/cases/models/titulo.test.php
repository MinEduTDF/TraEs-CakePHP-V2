<?php
/* Titulo Test cases generated on: 2014-03-03 18:03:24 : 1393871124*/
App::import('Model', 'Titulo');

class TituloTestCase extends CakeTestCase {
	var $fixtures = array('app.titulo', 'app.docente', 'app.estado', 'app.empleado', 'app.inscripcion', 'app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.docentes_materia', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.usuario', 'app.centros_empleado', 'app.inventario', 'app.producto');

	function startTest() {
		$this->Titulo =& ClassRegistry::init('Titulo');
	}

	function endTest() {
		unset($this->Titulo);
		ClassRegistry::flush();
	}

}
?>