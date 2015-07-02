<?php
/* Centros Test cases generated on: 2014-03-03 18:03:34 : 1393871314*/
App::import('Controller', 'Centros');

class TestCentrosController extends CentrosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CentrosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.cargo', 'app.materia', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.nota', 'app.alumnos_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Centros =& new TestCentrosController();
		$this->Centros->constructClasses();
	}

	function endTest() {
		unset($this->Centros);
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