<?php
/* Ciclos Test cases generated on: 2014-03-03 18:03:03 : 1393871343*/
App::import('Controller', 'Ciclos');

class TestCiclosController extends CiclosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CiclosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ciclo', 'app.inscripcion', 'app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docente', 'app.estado', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.ciclos_curso', 'app.cargos_ciclo', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Ciclos =& new TestCiclosController();
		$this->Ciclos->constructClasses();
	}

	function endTest() {
		unset($this->Ciclos);
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