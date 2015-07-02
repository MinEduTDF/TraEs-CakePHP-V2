<?php
/* Cargos Test cases generated on: 2014-03-03 18:03:08 : 1393871288*/
App::import('Controller', 'Cargos');

class TestCargosController extends CargosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CargosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docente', 'app.estado', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Cargos =& new TestCargosController();
		$this->Cargos->constructClasses();
	}

	function endTest() {
		unset($this->Cargos);
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