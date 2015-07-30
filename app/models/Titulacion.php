<?php
class Titulacion extends AppModel {
	var $name = 'Titulacion';
    var $displayField = 'nombre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'titulacion_id',
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
                    'nombre' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este nombre esta siendo usado.'
	                     )
                   ),
                   'certificacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar la certificación.'
                           )
                   ),
				   'condicion_ingreso' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar la condición de ingreso.'
                           )
                   ),
				   'ciclo_implementacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar el ciclo de implementación.'
                           )
                   ),
				   'ciclo_finalizacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar el ciclo de finalización.'
                           )
                   ),
				   'a_termino' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'orientacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'organizacion_plan' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'organizacion_cursada' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'forma_dictado' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'carga_horaria_en' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'carga_horaria' => array(
                           'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => false,       
                           'message' => 'Indicar con un número la carga horaria.'
                           )
                   ),
				   'edad_minima' => array(
                           'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => false,       
                           'message' => 'Indicar con un número la edad mínima.'
                           )
                   ),
				   'tiene_articulacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 2), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'duracion_en' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => false,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
				   'duracion' => array(
                           'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => false,       
                           'message' => 'Indicar con un número la duración.'
                           )
                   ),
				   'norma_aprob_jur_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar tipo de norma jurisdiccional.'
                           )
                   ),
				   'norma_aprob_jur_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el número de la norma jurisdiccional.'
                           )
                   ),
				   'norma_aprob_jur_anio' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el anio de la norma jurisdiccional.'
                           )
                   ),
				   'norma_val_nac_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el tipo de validez nacional de la norma.'
                           )
                   ),
				   'norma_val_nac_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el número de validez nacional de la norma.'
                           )
                   ),
				   'norma_val_nac_anio' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el anio de validez nacional de la norma.'
                           )
                   ),
				   'norma_ratif_jur_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el tipo de ratificación jurisdiccional de la                                         norma.'
                           )
                   ),
				   'norma_ratif_jur_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el número de ratificación jurisdiccional de la                                         norma.'
                           )
                   ),
				   'norma_ratif_jur_anio' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el anio de ratificación jurisdiccional de la                                         norma.'
                           )
                   ),
				   'norma_homologacion_tipo' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el tipo de homologación de la norma.'
                           )
                   ),
				   'norma_homologacion_nro' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 3), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el número de homologación de la norma.'
                           )
                   ),
				   'norma_homologacion_anio' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar el anio en que se homologó la norma.'
                           )
                   )
		);
}
?>