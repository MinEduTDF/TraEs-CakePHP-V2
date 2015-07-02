<?php
/* Horario Fixture generated on: 2014-03-03 18:03:43 : 1393870723 */
class HorarioFixture extends CakeTestFixture {
	var $name = 'Horario';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fechaCreacion' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'dia' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'horaInicio' => array('type' => 'time', 'null' => false, 'default' => NULL),
		'horaFin' => array('type' => 'time', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'fechaCreacion' => '2014-03-03',
			'dia' => 'Lorem ips',
			'horaInicio' => '18:18:43',
			'horaFin' => '18:18:43'
		),
	);
}
?>