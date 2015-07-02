<?php
/* Empleados Test cases generated on: 2014-03-03 18:03:19 : 1393871419*/
App::import('Controller', 'Empleados');

class TestEmpleadosController extends EmpleadosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmpleadosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docentes_materia', 'app.usuario', 'app.centros_empleado', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario', 'app.inventario', 'app.producto');

	function startTest() {
		$this->Empleados =& new TestEmpleadosController();
		$this->Empleados->constructClasses();
	}

	function endTest() {
		unset($this->Empleados);
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