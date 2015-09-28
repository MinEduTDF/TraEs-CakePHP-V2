<?php
/* Inscripcions Test cases generated on: 2014-03-03 18:03:31 : 1393871491*/
App::import('Controller', 'Inscripcions');

class TestInscripcionsController extends InscripcionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InscripcionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.inscripcion', 'app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.docente', 'app.estado', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Inscripcions =& new TestInscripcionsController();
		$this->Inscripcions->constructClasses();
	}

	function endTest() {
		unset($this->Inscripcions);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>