<?php
class Servicio extends AppModel {
	
	var $name = 'Servicio';
    var $displayField = 'tipo_servicio';
	//public $virtualFields = array('nombre_completo_familiar'=> 'CONCAT(Familiar.primerNombre, " ", Familiar.apellido)');
	
	public $actsAs = array(
	     'Upload.Upload' => array(
		     'informe' => array(
			    'fields' => array(
				   'dir' => 'informe_dir'
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
	
   
  //Validaciones

        var $validate = array(
                   'tipo_servicio' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar una de las opciones de la lista.'
                           )
                   ),
				   'fecha_solicitud_servicio' => array(
                           'date' => array(
                           'rule' => 'date',                          
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha de inicio del servicio.'
                           )
                   ),
				   'estado' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'Indicar una de las opciones de la lista.'
                           )
                   ),
                   'prestador' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una de las opciones de la lista.'
                           )
                   ),
				   'docente_profesional_acargo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),                          
                           'allowEmpty' => false,
                           'message' => 'Indicar nombres y apellidos.'
                           )
                   ),
				   'tipo_alta' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una de las opciones de la lista.'
                           )
                   ),
				   'fecha_alta' => array(
                           'date' => array(
                           'rule' => 'date',                          
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha de inicio del servicio.'
                           )
                   ),
				   'fecha_baja' => array(
                           'date' => array(
                           'rule' => 'date',                          
                           'allowEmpty' => true,
                           'message' => 'Indicar fecha de finalización del servicio.'
                           )
                   ),
				   'tipo_baja' => array(
                           'minLength' => array(
                           'rule' => array('minLength',4),
                           'allowEmpty' => false,
                           'message' => 'Indicar una de las opciones de la lista.'
                           )
                   ),
				   'observaciones' => array(
                           'maxLength' => array(
                           'rule' => array('maxLength',100),
                           'allowEmpty' => true,
                           'message' => 'No debe exceder las 100 letras (incluídos espacios).'
                           )
                   ),
                   'creado' => array(
                           'date' => array(
                           'rule' => 'date',
                           'allowEmpty' => false,
                           'message' => 'Indicar fecha de creación del registro.'
                           )
                   )
		);

}
?>