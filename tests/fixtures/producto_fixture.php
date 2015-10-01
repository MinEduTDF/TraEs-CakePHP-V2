<?php
/* Producto Fixture generated on: 2014-03-03 18:03:58 : 1393871098 */
class ProductoFixture extends CakeTestFixture {
	var $name = 'Producto';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'marca' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'cantidad' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'proovedor' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'ubicacion' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'areaDestino' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'observacion' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'inventario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'marca' => 'Lorem ipsum dolor sit amet',
			'cantidad' => 1,
			'proovedor' => 'Lorem ipsum dolor sit amet',
			'ubicacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'areaDestino' => 'Lorem ipsum dolor sit amet',
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'inventario_id' => 1
		),
	);
}
?>