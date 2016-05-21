<?php
App::uses('CursosInscripcion', 'Model');

/**
 * CursosInscripcion Test Case
 */
class CursosInscripcionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cursos_inscripcion',
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
		'app.materia',
		'app.nota',
		'app.horario',
		'app.inscripcions_materia',
		'app.inasistencia',
		'app.cursos_inasistencia',
		'app.inasistencias_materia',
		'app.estado',
		'app.cargos_ciclo',
		'app.cargos_docente',
		'app.cargos_empleado',
		'app.inventario',
		'app.producto',
		'app.user',
		'app.centros_empleado',
		'app.ciclos_curso',
		'app.mesaexamen',
		'app.titulacion',
		'app.alumnos_mesaexamen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CursosInscripcion = ClassRegistry::init('CursosInscripcion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CursosInscripcion);

		parent::tearDown();
	}

}
