<?php
/* Titulos Test cases generated on: 2014-03-03 18:03:05 : 1393871825*/
App::import('Controller', 'Titulos');

class TestTitulosController extends TitulosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TitulosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.titulo', 'app.docente', 'app.estado', 'app.empleado', 'app.inscripcion', 'app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.docentes_materia', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.usuario', 'app.centros_empleado', 'app.inventario', 'app.producto');

	function startTest() {
		$this->Titulos =& new TestTitulosController();
		$this->Titulos->constructClasses();
	}

	function endTest() {
		unset($this->Titulos);
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