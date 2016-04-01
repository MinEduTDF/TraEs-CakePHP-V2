<?php
class Curso extends AppModel {
	var $name = 'Curso';
    //var $displayField = 'division';
	public $virtualFields = array('nombre_completo_curso'=> 'CONCAT(Curso.anio, " ", Curso.division)');

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Titulacion' => array(
			'className' => 'Titulacion',
			'foreignKey' => 'titulacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'curso_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);

    var $hasAndBelongsToMany = array(
		'Ciclo' => array(
			'className' => 'Ciclo',
			'joinTable' => 'ciclos_cursos',
			'foreignKey' => 'curso_id',
			'associationForeignKey' => 'ciclo_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'joinTable' => 'cursos_inscripcions',
			'foreignKey' => 'curso_id',
			'associationForeignKey' => 'inscripcion_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Inasistencia' => array(
			'className' => 'Inasistencia',
			'joinTable' => 'cursos_inasistencias',
			'foreignKey' => 'curso_id',
			'associationForeignKey' => 'inasistencia_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

    //Validaciones

        var $validate = array(
                   'tipo' => array(
                           'minLength' => array(
						   'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'Indicar un tipo.'
                           )
                   ),
				   'anio' => array(
                           'maxLength' => array(
                           'rule' => array('maxLength',11),
                           'allowEmpty' => false,
                           'message' => 'Indicar un año.'
                           )
                   ),
                   'division' => array(
                           'maxLength' => array(
                           'rule' => array('maxLength',11),
                           'allowEmpty' => false,
                           'message' => 'Indicar una división.'
                           )
                   ),
                   'turno' => array(
                           'maxLength' => array(
                           'rule' => array('maxLength',10),
                           'allowEmpty' => false,
                           'message' => 'Indicar un turno.'
                           )
                   ),
                   'aula_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar un nº de aula.'
                           )
                   ),
                   'observacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => true,
                           'message' => 'Indicar una breve observacion.'
                            )
                   ),
				   'Ciclo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar un ciclo.'
                            )
                   ),
				   'titulacion_id' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => false,
                           'message' => 'Indicar una titulación.'
                            )
                   )
     );
}
?>