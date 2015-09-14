<?php
class Alumno extends AppModel {
	
	var $name = 'Alumno';
    //var $displayField = 'apellido';
	public $virtualFields = array('nombre_completo_alumno'=> 'CONCAT(Alumno.apellidos, " ", Alumno.nombres)');
    /*
	public $actsAs = array(
	     'Upload.Upload' => array(
		     'foto' => array(
			    'fields' => array(
				   'dir' => 'foto_dir'
				),
				'thumbnailSizes' => array(
				    'big' => '200x200',
					'small' => '120x120',
					'thumb' => '80x80'
				),
				'thumbnailMethod' => 'php',
				//'deleteOnUpdate' => 'true',
				//'deleteFolderOnDelete' => 'true'
			 )
		 )
	);
	*/
	//The Associations below have been created with all possible keys, those that are not needed can be removed

    /*var $belongsTo = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
	
	var $hasMany = array(
		'Familiar' => array(
			'className' => 'Familiar',
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
		'Integracion' => array(
			'className' => 'Integracion',
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
		'Servicio' => array(
			'className' => 'Servicio',
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
		'Inasistencia' => array(
			'className' => 'Inasistencia',
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
                   'nombres' => array(

                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => '*El Nombre no es valido. Indicar uno igual o mayor a tres                                         letras.'

                           )
                   ),
                   'apellidos' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => '*El Apellido no es valido. Indicar uno igual o mayor a                                         tres letras.'
                           )
                   ),
				   'documento_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),                          
                           'allowEmpty' => false,
                           'message' => '*El tipo de dni no es valida. Indicar una de las opciones.'
                           )
                   ),
                   'documento_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => '*El DNI no es valido. Indicar DNI sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => '*Este DNI de alumno esta siendo usado.'
	                     )
                   ),
				   'ocupacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => '*La ocupacion no es valida. Indicar una de las opciones.'
                           )
                   ),
				   'pcia_nac' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => '*El lugar no es valida.'
                           )
                   ),
				   'nacionalidad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => '*La nacionalidad no es valida. Indicar una de las                                         opciones.'
                           )
                   ),
				   'indigena' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),                          
                           'allowEmpty' => true,
                           'message' => '*El nombre de comunidad indigena no es valida. Indicar una                                         de las opciones.'
                           )
                   ),
				   'telefono_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength',6),
                           'allowEmpty' => false,
                           'message' => '*El telefono no es valido. Indicar uno de referencia solo                                         con numeros y sin espacios.'
                           )
                   ),
                   'email' => array(
                           'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => '*El email no es valido. Indicar email valido.'
                           )
                   ),
                   'calle_nombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => '*La direccion no es valida.'
                           )
                   ),
				   'calle_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => '*El numero no es valido.'
                           )
					),
					'barrio' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => '*El nombre del barrio no es valida.'
                           )
                   ),	   
                   'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => '*La ciudad no es valida. Indicar una de las opciones.'
                           )
                   )
                         
        );

        
}
?>