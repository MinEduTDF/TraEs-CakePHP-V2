<?php
class Alumno extends AppModel {
	
	var $name = 'Alumno';
    //var $displayField = 'apellido';
	public $virtualFields = array('nombre_completo_alumno'=> 'CONCAT(Alumno.primerNombre, " ", Alumno.apellido)');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

    var $hasMany = array(
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'foreignKey' => 'alumno_id',
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
		'Nota' => array(
			'className' => 'Nota',
			'foreignKey' => 'alumno_id',
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
                           'message' => 'El DNI no es valido. Indicar DNI sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este DNI de alumno esta siendo usado.'
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