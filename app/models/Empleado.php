<?php
class Empleado extends AppModel {
	
	var $name = 'Empleado';
    var $displayField = 'apellido';
	public $virtualFields = array('nombre_completo_empleado'=>'CONCAT(Empleado.primerNombre, " ", Empleado.apellido)');
	
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
		)
	);

	//Validaciones

        var $validate = array(
                   'primerNombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Nombre no es valido. Indicar uno igual o mayor a tres letras.'
                           )
                   ),
                   'apellido' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Apellido no es valido. Indicar uno igual o mayor a tres letras.'
                           )
                   ),
                   'dni' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'El DNI no es valido. Indicar numero sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este DNI de empleado esta siendo usado.'
	                     )
                   ),
                   'direccion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La direccion no es valida. Indicar una que contenga numeros y letras.'
                           )
                   ),
                   'telefono' => array(
                           'minLength' => array(
                           'rule' => array('minLength',6),
                           'allowEmpty' => false,
                           'message' => 'El telefono no es valido. Indicar uno de referencia solo con numeros y sin espacios.'
                           )
                   ),
                                       
                   'email' => array(
                           'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => 'El email no es valido. Indicar email valido.'
                           )
                   ),
                   'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La ciudad no es valida. Indicar una de las opciones.'
                           )
                   ),
                   
        );

}
?>