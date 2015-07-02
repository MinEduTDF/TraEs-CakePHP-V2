<?php
/* Cursos Test cases generated on: 2014-03-03 18:03:27 : 1393871367*/
App::import('Controller', 'Cursos');

class TestCursosController extends CursosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CursosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.curso', 'app.centro', 'app.alumno', 'app.inscripcion', 'app.ciclo', 'app.cargo', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docente', 'app.estado', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.cargos_ciclo', 'app.horario', 'app.cargos_horario', 'app.ciclos_curso', 'app.modalidad', 'app.orientacion');

	function startTest() {
		$this->Cursos =& new TestCursosController();
		$this->Cursos->constructClasses();
	}

	function endTest() {
		unset($this->Cursos);
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