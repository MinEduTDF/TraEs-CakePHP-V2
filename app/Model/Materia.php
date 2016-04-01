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
                           'minLength' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => false,
                           'message' => 'Indicar un nombre.'
                           )
				    ),
                   'alia' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),
                           'allowEmpty' => false,
                           'message' => 'Indicar un alia.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este alias de materia esta siendo usado.'
	                     )
                   ),
                   'campo_formacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar un campo de formación.'
                           )
                   ),
                   'dictado' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar un dictado.'
                           )
                   ),
                   'obligatoriedad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una obligatoriedad.'
                           )
					),	   
                   'carga_horaria_en' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una carga horaria.'
                           )
                   ),
				   'carga_horaria_semanal' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar un número.'
                           )
                   ),
				   'duracion_en' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una duración.'
                           )
                   ),
                   'duracion' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar una duración.'
                           )
                   ),
                   'escala_numerica' => array(
                           'minLength' => array(
                           'rule' => array('minLength',2),
                           'allowEmpty' => false,
                           'message' => 'Indicar una escala numérica.'
                           )
                   ),
				   'nota_minima' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar una nota mínima.'
                           )
                   ),
				   'contenido' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => true,
                           'message' => 'Adjuntar contenidos.'
                           ) 
				   ),
				   'curso_id' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar un curso.'
                           ) 
				   )
        );
}
?>