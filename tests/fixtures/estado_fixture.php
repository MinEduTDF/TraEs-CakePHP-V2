<?php
/* Estado Fixture generated on: 2014-03-03 18:03:13 : 1393870693 */
class EstadoFixture extends CakeTestFixture {
	var $name = 'Estado';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'articulo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'fechaDesde' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'fechaHasta' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'observacion' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'docente_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'empleado_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'cargo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'articulo' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'fechaDesde' => '2014-03-03',
			'fechaHasta' => '2014-03-03',
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'docente_id' => 1,
			'empleado_id' => 1,
			'cargo_id' => 1
		),
	);
}
?>