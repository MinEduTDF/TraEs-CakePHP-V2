<?php
/* Estados Test cases generated on: 2014-03-03 18:03:43 : 1393871443*/
App::import('Controller', 'Estados');

class TestEstadosController extends EstadosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EstadosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.estado', 'app.docente', 'app.titulo', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docentes_materia', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.cargos_docente', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Estados =& new TestEstadosController();
		$this->Estados->constructClasses();
	}

	function endTest() {
		unset($this->Estados);
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