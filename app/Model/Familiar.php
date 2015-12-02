<?php
class Familiar extends AppModel {
	
	var $name = 'Familiar';
    //var $displayField = 'apellido';
	//public $virtualFields = array('nombre_completo_familiar'=> 'CONCAT(Familiar.primerNombre, " ", Familiar.apellido)');
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    var $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		/*'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		*/
	);
	
   
  //Validaciones

        var $validate = array(
                   'vinculo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El vínculo no es valida. Indicar una de las opciones.'
                           )
                   ),
				   'nombre_completo' => array(
                           'minLength' => array(
                           'rule' => array('minLength',3),
                           'allowEmpty' => false,
                           'message' => 'El Nombre no es valido. Indicar uno igual o mayor a tres letras.'
                           )
                   ),
                   'cuit_cuil' => array(
                           'numeric' => array(
                           'rule' => 'numeric',
                           'allowEmpty' => false,
                           'message' => 'El cuit/cuil no es valido. Indicar sin puntos.'
                           ),
						   'isUnique' => array(
	                       'rule' => 'isUnique',
	                       'message' => 'Este cuit/cuil esta siendo usado.'
	                     )
                   ),
				   'ocupacion' => array(
                           'maxLength' => array(
                           'rule' => array('maxLength',50),                          
                           'allowEmpty' => false,
                           'message' => 'EL nombre de la ocupacion es demasiado extenso.'
                           )
                   ),
				   'lugar_de_trabajo' => array(
                           'maxLength' => array(
                           'rule' => array('maxLength',50),                          
                           'allowEmpty' => true,
                           'message' => 'EL nombre del lugar de trabajo es demasiado extenso.'
                           )
                   ),
				   'nacionalidad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La nacionalidad no es valida. Indicar una de las opciones.'
                           )
                   ),
				   'telefono_nro' => array(
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
                   'domicilio' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El domicilio no es valido.'
                           )
                   ),
				   'barrio' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'El nombre del barrio no es valida.'
                           )
                   ),	   
                   'ciudad' => array(
                           'minLength' => array(
                           'rule' => array('minLength',5),                          
                           'allowEmpty' => false,
                           'message' => 'La ciudad no es valida. Indicar una de las opciones.'
                           )
                   )                   
                         
        );

}
?>