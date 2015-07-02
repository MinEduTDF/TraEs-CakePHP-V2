<?php
/* Cargo Fixture generated on: 2014-03-03 18:03:59 : 1393870439 */
class CargoFixture extends CakeTestFixture {
	var $name = 'Cargo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'resolucionNro' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25),
		'hsCatedra' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'hsReloj' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'area' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'puesto' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'descricpion' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'fechaCreacion' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'fechaCierre' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'fechaAltaPersona' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'fechaBajaPersona' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'fechaCambioSituaci??nPersona' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'estado' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 11),
		'centro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'curso_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'materia_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'resolucionNro' => 'Lorem ipsum dolor sit a',
			'hsCatedra' => 1,
			'hsReloj' => 'Lorem ips',
			'area' => 'Lorem ipsum dolor sit amet',
			'puesto' => 'Lorem ipsum dolor sit amet',
			'descricpion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fechaCreacion' => '2014-03-03',
			'fechaCierre' => '2014-03-03',
			'fechaAltaPersona' => '2014-03-03',
			'fechaBajaPersona' => '2014-03-03',
			'fechaCambioSituaci??nPersona' => '2014-03-03',
			'estado' => 'Lorem ips',
			'centro_id' => 1,
			'curso_id' => 1,
			'materia_id' => 1
		),
	);
}
?>