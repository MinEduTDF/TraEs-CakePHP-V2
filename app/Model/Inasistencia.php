<?php
class Inasistencia extends AppModel {
	
	var $name = 'Inasistencia';
    var $displayField = 'tipo';
		
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    var $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ciclo' => array(
			'className' => 'Ciclo',
			'foreignKey' => 'ciclo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $hasAndBelongsToMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'joinTable' => 'inasistencias_materias',
			'foreignKey' => 'inasistencia_id',
			'associationForeignKey' => 'materia_id',
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
		'Curso' => array(
			'className' => 'Curso',
			'joinTable' => 'cursos_inasistencias',
			'foreignKey' => 'inasistencia_id',
			'associationForeignKey' => 'curso_id',
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
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => true,
                           'message' => 'El tipo de inasistencia no es valida. Indicar una de las opciones.'
                           )
                   ),
				   'justificado' => array(
                           'maxLength' => array(
                           'rule' => array('maxLength',10),
                           'allowEmpty' => true,
                           'message' => 'El tipo de justificación no es valida. Indicar una de las opciones.'
                           )
                   ),
                   'causa' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => true,
                           'message' => 'En caso de que se haya justificado, indicar la causa.'
                           )
                   ),
				   'creado' => array(
                           'date' => array(
                           'rule' => 'date',                          
                           'allowEmpty' => false,
                           'message' => 'La fecha no es valida. Indicar una fecha de creación del registro valida.'
                           )
                   )
		);

}
?>