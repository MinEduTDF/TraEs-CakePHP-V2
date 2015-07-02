<?php
/* Usuario Fixture generated on: 2014-03-03 18:03:46 : 1393871146 */
class UsuarioFixture extends CakeTestFixture {
	var $name = 'Usuario';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombreUsuario' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'clave' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'area' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'puesto' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'centro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'empleado_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombreUsuario' => 'Lorem ipsum dolor sit amet',
			'clave' => 'Lorem ipsum dolor sit amet',
			'area' => 'Lorem ipsum dolor sit amet',
			'puesto' => 'Lorem ipsum dolor sit amet',
			'centro_id' => 1,
			'empleado_id' => 1
		),
	);
}
?>