<?php
/**
 * MesaExamen Fixture
 */
class MesaExamenFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'mesa_especial' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'turno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'acta_nro' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'libro_nro' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'folio_nro' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'seccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hora' => array('type' => 'time', 'null' => false, 'default' => null),
		'aula' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modalidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'presidente' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vocal_uno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vocal_dos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ciclo_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'titulacion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'mesa_especial' => '',
			'turno' => 'Lorem ipsum dolor sit amet',
			'acta_nro' => 1,
			'libro_nro' => 1,
			'folio_nro' => 1,
			'fecha' => '2016-04-01 17:58:02',
			'seccion' => 'Lorem ipsum dolor sit a',
			'hora' => '17:58:02',
			'aula' => 'Lorem ipsum dolor sit a',
			'modalidad' => 'Lorem ipsum dolor sit a',
			'presidente' => 'Lorem ipsum dolor sit amet',
			'vocal_uno' => 'Lorem ipsum dolor sit amet',
			'vocal_dos' => 'Lorem ipsum dolor sit amet',
			'ciclo_id' => 1,
			'titulacion_id' => 1,
			'materia_id' => 1,
			'alumno_id' => 1,
			'created' => '2016-04-01 17:58:02',
			'modified' => '2016-04-01 17:58:02'
		),
	);

}
