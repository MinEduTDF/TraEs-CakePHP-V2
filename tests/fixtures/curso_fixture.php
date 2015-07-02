<?php
/* Curso Fixture generated on: 2014-03-03 18:03:10 : 1393870570 */
class CursoFixture extends CakeTestFixture {
	var $name = 'Curso';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'anio' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'division' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'turno' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'aulaNro' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'observacion' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'centro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'orientacion_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'modalidad_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'anio' => 'Lorem ips',
			'division' => 'Lorem ips',
			'turno' => 'Lorem ips',
			'aulaNro' => 1,
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'centro_id' => 1,
			'orientacion_id' => 1,
			'modalidad_id' => 1
		),
	);
}
?>