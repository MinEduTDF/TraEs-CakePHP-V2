<?php
class Materia extends AppModel {
	var $name = 'Materia';
        var $displayField = 'alia';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Cargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Nota' => array(
			'className' => 'Nota',
			'foreignKey' => 'materia_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

    var $hasAndBelongsToMany = array(
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'joinTable' => 'inscripcions_materias',
			'foreignKey' => 'materia_id',
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
		)
	);


	//Validaciones

        var $validate = array(
                   'nombre' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => false,
                           'message' => 'Indicar una opcion.'
                           )
				    ),
                   'alia' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => false,
                           'message' => 'Indicar una opcion.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este alias de materia esta siendo usado.'
	                     )
                   ),
                   'contenido' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => false,
                           'message' => 'Indicar brevemente los contenidos de la materia.'
                           )
                   ),
                   'hsSemanal' => array(
                           'allowedChoice' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar hs catedras semanales.'
                           )
                   ),
                   'observacion' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => true,
                           'message' => 'Indicar una breve observacion.'
                           )
                   ),


          );

}
?>