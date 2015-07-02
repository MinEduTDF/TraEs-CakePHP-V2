<?php
/* Inventarios Test cases generated on: 2014-03-03 18:03:20 : 1393871540*/
App::import('Controller', 'Inventarios');

class TestInventariosController extends InventariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InventariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.inventario', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docentes_materia', 'app.usuario', 'app.centros_empleado', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.producto');

	function startTest() {
		$this->Inventarios =& new TestInventariosController();
		$this->Inventarios->constructClasses();
	}

	function endTest() {
		unset($this->Inventarios);
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