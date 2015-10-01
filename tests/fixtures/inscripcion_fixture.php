<?php
/* Inscripcion Fixture generated on: 2014-03-03 18:03:18 : 1393870758 */
class InscripcionFixture extends CakeTestFixture {
	var $name = 'Inscripcion';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tipoInscripcion' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30),
		'fechaInscripcion' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'ciclo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'centro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'empleado_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'tipoInscripcion' => 'Lorem ipsum dolor sit amet',
			'fechaInscripcion' => '2014-03-03',
			'alumno_id' => 1,
			'ciclo_id' => 1,
			'centro_id' => 1,
			'curso_id' => 1,
			'materia_id' => 1,
			'empleado_id' => 1
		),
	);
}
?>