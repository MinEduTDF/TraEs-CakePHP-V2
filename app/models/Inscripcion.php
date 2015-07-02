<?php
class Inscripcion extends AppModel {
	var $name = 'Inscripcion';
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
		),
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		/*'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),*/
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $hasAndBelongsToMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'joinTable' => 'inscripcions_materias',
			'foreignKey' => 'inscripcion_id',
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
		)
	);	

	//Validaciones
                var $validate = array(
                   'tipoInscripcion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 6), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
                   'fechaInscripcion' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha valida de inscripcion del alumno.'
                           )
                   )
         );              
}
?>