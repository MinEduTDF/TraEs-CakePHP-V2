<?php
/* Centro Fixture generated on: 2014-03-03 18:03:32 : 1393870472 */
class CentroFixture extends CakeTestFixture {
	var $name = 'Centro';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'sigla' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'fechaFundacion' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'equipoDirectivo' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'ciudad' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150),
		'url' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'sigla' => 'Lorem ipsum dolor sit amet',
			'fechaFundacion' => '2014-03-03',
			'equipoDirectivo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'ciudad' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'url' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>