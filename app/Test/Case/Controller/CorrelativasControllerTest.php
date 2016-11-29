<?php
App::uses('CorrelativasController', 'Controller');

/**
 * CorrelativasController Test Case
 */
class CorrelativasControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.correlativa',
		'app.materia',
		'app.curso',
		'app.centro',
		'app.integracion',
		'app.alumno',
		'app.familiar',
		'app.servicio',
		'app.ciclo',
		'app.inscripcion',
		'app.empleado',
		'app.licencia',
		'app.docente',
		'app.titulo',
		'app.cargo',
		'app.estado',
		'app.cargos_ciclo',
		'app.cargos_docente',
		'app.cargos_empleado',
		'app.inventario',
		'app.producto',
		'app.user',
		'app.inasistencia',
		'app.cursos_inasistencia',
		'app.inasistencias_materia',
		'app.centros_empleado',
		'app.cursos_inscripcion',
		'app.inscripcions_materia',
		'app.nota',
		'app.ciclos_curso',
		'app.mesaexamen',
		'app.titulacion',
		'app.alumnos_mesaexamen',
		'app.horario',
		'app.correlativas_materia'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
