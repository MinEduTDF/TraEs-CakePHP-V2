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
                   'legajo_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => false,       
                           'message' => 'El nro de legajo no es valido. Indicarlo sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este nro de legajo de alumno esta siendo usado.'
	                     )
                   ),
				   'tipo_alta' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
                   'fecha_alta' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha valida de inscripcion del alumno.'
                           )
                   ),
				   'cursa' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'fines' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 2), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'fecha_baja' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar fecha valida de baja de inscripcion del alumno.'
                           )
                   ),
				   'tipo_baja' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'motivo_baja' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'fecha_egreso' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar fecha valida de egreso del alumno.'
                           )
                   ),
				   'libro_matriz' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'fecha_emision_titulo' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar fecha valida de emisión del título.'
                           )
                   ),
				   'recursante' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 2), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'condicion_aprobacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion de la lista.'
                           )
                   ),
				   'fecha_nota' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => true,
                           'message' => 'Indicar fecha valida de nota.'
                           )
                   ),
         );              
}
?>