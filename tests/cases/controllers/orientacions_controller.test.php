<?php
/* Orientacions Test cases generated on: 2014-03-03 18:03:56 : 1393871756*/
App::import('Controller', 'Orientacions');

class TestOrientacionsController extends OrientacionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OrientacionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.orientacion', 'app.centro', 'app.alumno', 'app.curso', 'app.modalidad', 'app.cargo', 'app.materia', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.nota', 'app.alumnos_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Orientacions =& new TestOrientacionsController();
		$this->Orientacions->constructClasses();
	}

	function endTest() {
		unset($this->Orientacions);
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