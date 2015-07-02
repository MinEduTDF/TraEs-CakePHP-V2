<?php
/* Materia Fixture generated on: 2014-03-03 18:03:24 : 1393871004 */
class MateriaFixture extends CakeTestFixture {
	var $name = 'Materia';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'alia' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'contenido' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'hsSemanal' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'observacion' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'curso_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'alia' => 'Lorem ips',
			'contenido' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'hsSemanal' => 'Lorem ipsum dolor sit amet',
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'curso_id' => 1
		),
	);
}
?>