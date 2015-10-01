<?php
/* Empleado Fixture generated on: 2014-03-03 18:03:24 : 1393870644 */
class EmpleadoFixture extends CakeTestFixture {
	var $name = 'Empleado';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'dni' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 9),
		'apellido' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'primerNombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'ciudad' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'dni' => 1,
			'apellido' => 'Lorem ipsum dolor sit amet',
			'primerNombre' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'ciudad' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>