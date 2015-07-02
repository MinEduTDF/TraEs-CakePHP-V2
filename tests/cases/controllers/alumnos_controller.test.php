<?php
/* Alumnos Test cases generated on: 2014-03-03 18:03:44 : 1393871264*/
App::import('Controller', 'Alumnos');

class TestAlumnosController extends AlumnosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AlumnosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.alumno', 'app.centro', 'app.cargo', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docente', 'app.estado', 'app.empleado', 'app.inventario', 'app.producto', 'app.usuario', 'app.cargos_empleado', 'app.centros_empleado', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Alumnos =& new TestAlumnosController();
		$this->Alumnos->constructClasses();
	}

	function endTest() {
		unset($this->Alumnos);
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