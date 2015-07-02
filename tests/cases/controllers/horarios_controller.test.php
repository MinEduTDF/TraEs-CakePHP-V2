<?php
/* Horarios Test cases generated on: 2014-03-03 18:03:04 : 1393871464*/
App::import('Controller', 'Horarios');

class TestHorariosController extends HorariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HorariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.horario', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docente', 'app.estado', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.cargos_horario');

	function startTest() {
		$this->Horarios =& new TestHorariosController();
		$this->Horarios->constructClasses();
	}

	function endTest() {
		unset($this->Horarios);
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