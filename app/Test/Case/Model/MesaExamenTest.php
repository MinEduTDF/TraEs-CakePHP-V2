<?php
App::uses('MesaExamen', 'Model');

/**
 * MesaExamen Test Case
 */
class MesaExamenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mesa_examen',
		'app.ciclo',
		'app.inscripcion',
		'app.alumno',
		'app.familiar',
		'app.integracion',
		'app.centro',
		'app.cargo',
		'app.curso',
		'app.titulacion',
		'app.materia',
		'app.nota',
		'app.inscripcions_materia',
		'app.inasistencia',
		'app.inasistencias_materia',
		'app.cursos_inasistencia',
		'app.ciclos_curso',
		'app.cursos_inscripcion',
		'app.estado',
		'app.licencia',
		'app.docente',
		'app.titulo',
		'app.cargos_docente',
		'app.empleado',
		'app.inventario',
		'app.producto',
		'app.user',
		'app.cargos_empleado',
		'app.centros_empleado',
		'app.cargos_ciclo',
		'app.horario',
		'app.cargos_horario',
		'app.servicio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MesaExamen = ClassRegistry::init('MesaExamen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MesaExamen);

		parent::tearDown();
	}

}
