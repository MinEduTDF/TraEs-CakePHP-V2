<?php
/* Materias Test cases generated on: 2014-03-03 18:03:36 : 1393871556*/
App::import('Controller', 'Materias');

class TestMateriasController extends MateriasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MateriasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.materia', 'app.curso', 'app.centro', 'app.alumno', 'app.inscripcion', 'app.ciclo', 'app.cargo', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.cargos_ciclo', 'app.horario', 'app.cargos_horario', 'app.ciclos_curso', 'app.ciclos_materia', 'app.nota', 'app.alumnos_materia', 'app.modalidad', 'app.orientacion');

	function startTest() {
		$this->Materias =& new TestMateriasController();
		$this->Materias->constructClasses();
	}

	function endTest() {
		unset($this->Materias);
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