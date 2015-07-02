<?php
class Centro extends AppModel {
	var $name = 'Centro';
    var $displayField = 'sigla';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Cargo' => array(
			'className' => 'Cargo',
			'foreignKey' => 'centro_id',
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
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'centro_id',
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
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'foreignKey' => 'centro_id',
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
		'Modalidad' => array(
			'className' => 'Modalidad',
			'foreignKey' => 'centro_id',
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
		'Orientacion' => array(
			'className' => 'Orientacion',
			'foreignKey' => 'centro_id',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'centro_id',
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
		'Empleado' => array(
			'className' => 'Empleado',
			'joinTable' => 'centros_empleados',
			'foreignKey' => 'centro_id',
			'associationForeignKey' => 'empleado_id',
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
                           'message' => 'Indicar un nombre (Ejemplo: Centro Educativo de Nivel Secundario 1).'
                           ),
                           'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este nombre de centro esta siendo usado.'
	                     )    						   
                   ),
                   'sigla' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una sigla (Ejemplo: C.E.N.S. Nº 1).'
                           ),
                           'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Esta sigla de centro esta siendo usado.'
	                     )          						   
                   ),
                   'fechaFundacion' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha de creacion del centro.'
                           )        
                   ),
                   'equipoDirectivo' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar nombres del equipo directivo (Director, Vicedirector y Secretario).'
                           )        
                   ),
                    'direccion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar direccion que contenga numeros y letras.'
                           )        
                   ),        
                    'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar una opcion.'
                           )        
                   ),
                   'telefono' => array(
                           'minLength' => array(
                           'rule' => array('minLength',6),
                           'allowEmpty' => false,
                           'message' => 'Indicar un telefono de referencia.'
                           )        
                   ),
                   'email' => array(
                           'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => 'Indicar correo electronico valido.'
                           )        
                   ),
                  'url' => array(
                           'url' => array(
                           'rule' => 'url',
                           'allowEmpty' => true,
                           'message' => 'Indicar una url valida.'
                           )        
                   )
        
     );
}
?>