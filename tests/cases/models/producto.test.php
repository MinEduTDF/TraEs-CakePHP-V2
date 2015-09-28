<?php
/* Producto Test cases generated on: 2014-03-03 18:03:59 : 1393871099*/
App::import('Model', 'Producto');

class ProductoTestCase extends CakeTestCase {
	var $fixtures = array('app.producto', 'app.inventario', 'app.empleado', 'app.estado', 'app.docente', 'app.titulo', 'app.cargo', 'app.centro', 'app.alumno', 'app.curso', 'app.orientacion', 'app.modalidad', 'app.inscripcion', 'app.ciclo', 'app.cargos_ciclo', 'app.ciclos_curso', 'app.materia', 'app.nota', 'app.alumnos_materia', 'app.ciclos_materia', 'app.docentes_materia', 'app.usuario', 'app.centros_empleado', 'app.cargos_docente', 'app.cargos_empleado', 'app.horario', 'app.cargos_horario');

	function startTest() {
		$this->Producto =& ClassRegistry::init('Producto');
	}

	function endTest() {
		unset($this->Producto);
		ClassRegistry::flush();
	}

}
?>