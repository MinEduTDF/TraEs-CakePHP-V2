<?php
/* Docentes Test cases generated on: 2014-03-03 18:03:52 : 1393871392*/
App::import('Controller', 'Docentes');

class TestDocentesController extends DocentesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DocentesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.docente', 'app.estado', 'app.empleado', 'app.inscripcion', 'app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.docentes_materia', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.usuario', 'app.centros_empleado', 'app.inventario', 'app.producto', 'app.titulo');

	function startTest() {
		$this->Docentes =& new TestDocentesController();
		$this->Docentes->constructClasses();
	}

	function endTest() {
		unset($this->Docentes);
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