<?php
/* Nota Fixture generated on: 2014-03-03 18:03:11 : 1393871051 */
class NotaFixture extends CakeTestFixture {
	var $name = 'Nota';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'notaPrimeraCuatPrimero' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'notaSegundaCuatPrimero' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'promCuatPrimero' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'notaPrimeraCuatSegundo' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'notaSegundaCuatSegundo' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'promCuatSegundo' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'promTermino' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '2,2'),
		'notaDic' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'notaMar' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'promFinal' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,2'),
		'observaciones' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'notaPrimeraCuatPrimero' => 1,
			'notaSegundaCuatPrimero' => 1,
			'promCuatPrimero' => 1,
			'notaPrimeraCuatSegundo' => 1,
			'notaSegundaCuatSegundo' => 1,
			'promCuatSegundo' => 1,
			'promTermino' => 1,
			'notaDic' => 1,
			'notaMar' => 1,
			'promFinal' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'alumno_id' => 1,
			'materia_id' => 1
		),
	);
}
?>