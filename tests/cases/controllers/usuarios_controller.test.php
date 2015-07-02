<?php
/* Usuarios Test cases generated on: 2014-03-03 18:03:38 : 1393871858*/
App::import('Controller', 'Usuarios');

class TestUsuariosController extends UsuariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsuariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.usuario', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.cargo', 'app.materia', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.ciclos_materia', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargos_docente', 'app.docentes_materia', 'app.inventario', 'app.producto', 'app.cargos_empleado', 'app.centros_empleado', 'app.nota', 'app.alumnos_materia', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Usuarios =& new TestUsuariosController();
		$this->Usuarios->constructClasses();
	}

	function endTest() {
		unset($this->Usuarios);
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