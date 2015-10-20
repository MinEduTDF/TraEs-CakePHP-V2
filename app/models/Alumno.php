<?php
App::uses('AppModel', 'Model');

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
					'thumbnailMethod' => 'php',
					'thumbnailSizes' => array(
						'vga' => '640x480',
						'thumb' => '150x150'
					),
					'deleteOnUpdate' => true,
					'deleteFolderOnDelete' => true
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
                           'message' => 'El Nombre no es valido. Indicar uno igual o mayor a tres                                         letras.'

                           )
                   ),
                   'apellidos' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Apellido no es valido. Indicar uno igual o mayor a                                         tres letras.'
                           )
                   ),
				   'documento_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),                          
                           'allowEmpty' => false,
                           'message' => 'El tipo de documento no es valido. Indicar una opción de la lista.'
                           )
                   ),
                   'documento_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'El número no es valido. Indicar número sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este documento de alumno esta siendo usado.'
	                     )
                   ),
                   'fecha_nac' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha de nacimiento.'
                           )
                   ),
				   'pcia_nac' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El nombre no es valido. Indicar un nombre con más de 5 letras'
                           )
                   ),
				   'nacionalidad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La nacionalidad no es valida. Indicar una opción de la lista.'
                           )
                   ),
				   'indigena' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),                          
                           'allowEmpty' => true,
                           'message' => 'El nombre de comunidad indigena no es valido. Indicar una opción de la lista.'
                           )
                   ),
				  'estado_civil' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => 'El estado civil no es valido. Indicar una opción de la lista.'
                           )
                   ), 
				   'ocupacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => 'La ocupación no es valida. Indicar una opción de la lista.'
                           )
                   ),
				   'telefono_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength',6),
                           'allowEmpty' => false,
                           'message' => 'El número de teléfono no es valido. Indicar uno solo  con números y sin espacios.'
                           )
                   ),
                   'email' => array(
                           'email' => array(
                           'rule' => 'email',
                           'allowEmpty' => true,
                           'message' => 'El email no es valido. Indicar uno con el formato correcto.'
                           )
                   ),
                   'calle_nombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => 'El nombre de la calle no es valida. Indicar uno con más de 4 letras.'
                           )
                   ),
				   'calle_nro' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'El número de la calle no es valido. Indicar uno solo con números y sin espacios.'
                           )
					),
					'barrio' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El nombre del barrio no es valido. Indicar uno con más de 5 letras.'
                           )
                   ),	   
                   'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La ciudad no es valida. Indicar una opción de la lista.'                           )
                   ),
				   'foto' => array(
        	'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Algo anda mal, intente nuevamente',
				'on' => 'create'
			),
	    	'isUnderPhpSizeLimit' => array(
	    		'rule' => 'isUnderPhpSizeLimit',
	        	'message' => 'Archivo excede el límite de tamaño de archivo de subida'
	        ),
		    'isValidMimeType' => array(
	    		'rule' => array('isValidMimeType', array('image/jpeg', 'image/png'), false),
        		'message' => 'La imagen no es jpg ni png',
	    	),
		    'isBelowMaxSize' => array(
	    		'rule' => array('isBelowMaxSize', 1048576),
        		'message' => 'El tamaño de imagen es demasiado grande'
	    	),
		    'isValidExtension' => array(
	    		'rule' => array('isValidExtension', array('jpg', 'png'), false),
        		'message' => 'La imagen no tiene la extension jpg o png'
	    	),
		    'checkUniqueName' => array(
                'rule' => array('checkUniqueName'),
                'message' => 'La imagen ya se encuentra registrada',
                'on' => 'update'
        	),		
			)
    
        );
       
}
?>