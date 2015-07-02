<?php
/* Modalidad Test cases generated on: 2014-03-03 18:03:47 : 1393871027*/
App::import('Model', 'Modalidad');

class ModalidadTestCase extends CakeTestCase {
	var $fixtures = array('app.modalidad', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.cargo', 'app.materia', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.nota', 'app.alumnos_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Modalidad =& ClassRegistry::init('Modalidad');
	}

	function endTest() {
		unset($this->Modalidad);
		ClassRegistry::flush();
	}

}
?>