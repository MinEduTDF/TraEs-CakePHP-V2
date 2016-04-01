<?php
App::uses('AppModel', 'Model');

class Empleado extends AppModel {
	
	var $name = 'Empleado';
    //var $displayField = 'apellido';
	public $virtualFields = array('nombre_completo_empleado'=>'CONCAT(Empleado.nombres, " ", Empleado.apellidos)');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Licencia' => array(
			'className' => 'Licencia',
			'foreignKey' => 'empleado_id',
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
			'foreignKey' => 'empleado_id',
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
		'Inventario' => array(
			'className' => 'Inventario',
			'foreignKey' => 'empleado_id',
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
			'foreignKey' => 'empleado_id',
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
		'Cargo' => array(
			'className' => 'Cargo',
			'joinTable' => 'cargos_empleados',
			'foreignKey' => 'empleado_id',
			'associationForeignKey' => 'cargo_id',
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
		'Centro' => array(
			'className' => 'Centro',
			'joinTable' => 'centros_empleados',
			'foreignKey' => 'empleado_id',
			'associationForeignKey' => 'centro_id',
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
);		
		
	//Validaciones

        var $validate = array(
                   'creado' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha de creación del registro.'
                           )
                   ),
				   'nombres' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'Indicar un nombre completo.'

                           )
                   ),
                   'apellidos' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'Indicar los apellidos.'
                           )
                   ),
				   'documento_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar un tipo de documento.'
                           )
                   ),
                   'documento_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar un número de documento.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este documento de empleado esta siendo usado.'
	                     )
                   ),
                   'fecha_nac' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar una fecha de nacimiento.'
                           )
                   ),
				   'pcia_nac' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar una provincia.'
                           )
                   ),
				   'indigena' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),                          
                           'allowEmpty' => true,
                           'message' => 'Indicar una comunidad indígena.'
                           )
                   ),
				  'estado_civil' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar un estado civil.'
                           )
                   ), 
				   'telefono_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength',6),
                           'allowEmpty' => false,
                           'message' => 'Indicar un teléfono.'
                           )
                   ),
                   'email' => array(
                           'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => 'Indicar un email.'
                           )
                   ),
                   'calle_nombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar un nombre de calle.'
                           )
                   ),
				   'calle_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'Indicar un nº de calle.'
                           )
					),
					'barrio' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar un barrio.'
                           )
                   ),	   
                    'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar una ciudad.'                           )
                   ),
        );
}
?>