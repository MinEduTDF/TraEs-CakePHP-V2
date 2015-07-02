<?php
/* Ciclo Fixture generated on: 2014-03-03 18:03:12 : 1393870512 */
class CicloFixture extends CakeTestFixture {
	var $name = 'Ciclo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ciclo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'fechaInicio' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'fechaFinal' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'primerCuatrimestre' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'segundoCuatrimestre' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'observaciones' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'ciclo' => 'Lorem ips',
			'fechaInicio' => '2014-03-03',
			'fechaFinal' => '2014-03-03',
			'primerCuatrimestre' => '2014-03-03',
			'segundoCuatrimestre' => '2014-03-03',
			'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>