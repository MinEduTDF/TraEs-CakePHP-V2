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
		),
		'Inasistencia' => array(
			'className' => 'Inasistencia',
			'joinTable' => 'inasistencias_materias',
			'foreignKey' => 'materia_id',
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
                   'campo_formacion' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
                   'dictado' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
                   'obligatoriedad' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => true,
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'carga_horaria_en' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => true,
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'carga_horaria_semanal' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => true,
                           'message' => 'Ingresar un número.'
                           )
                   ),
				   'duracion_en' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => true,
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
                   'duracion' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => true,
                           'message' => 'Ingresar un número.'
                           )
                   ),
                   'escala_numerica' => array(
                           'allowedChoice' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => true,
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'nota_minima' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => true,
                           'message' => 'Ingresar un número.'
                           )
                   ),
				   'contenido' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => true,
                           'message' => 'Adjuntar contenidos.'
                           )
                   )
          );

}
?>