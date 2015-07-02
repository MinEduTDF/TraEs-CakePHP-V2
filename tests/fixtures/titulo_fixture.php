<?php
/* Titulo Fixture generated on: 2014-03-03 18:03:23 : 1393871123 */
class TituloFixture extends CakeTestFixture {
	var $name = 'Titulo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'instituci??n' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'docente_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'instituci??n' => 'Lorem ipsum dolor sit amet',
			'docente_id' => 1
		),
	);
}
?>