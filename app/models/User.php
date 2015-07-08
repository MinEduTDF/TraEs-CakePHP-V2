<?php

App::uses('AppModel', 'Model');

class User extends AppModel {
	
	var $name = 'User';
	public $displayField = 'username';
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)		
	);
    
	//Validaciones
	var $validate = array(
	            'username'  => array(
	                     'between' => array(
	                     'rule' => array('minLength',5),
	                     'allowEmpty' => false,
	                     'message' => 'El nombre de usuario debe contener entre 5 y 15 caracteres.'
	                     ),
			            'isUnique' => array(
	                     'rule' => 'isUnique',
	                     'message' => 'Este nombre de usuario esta siendo usado.'
	                     )
	            ),
                 'password'  => array( 
                         'minLength' => array( 
	                     'rule' => array('minLength',5),
	                     'allowEmpty' => false,
	                     'message' => 'El nombre de usuario debe contener entre 5 y 15 caracteres.'
	                     ),
					     'isUnique' => array(
	                     'rule' => 'isUnique',
	                     'message' => 'Esta clave de usuario esta siendo usado.'
	                     )	 
	            ),
		  /*       'confirm_password'  => array(
	                     'between' => array(
	                     'rule' => array('between',5,15),
	                     'allowEmpty' => false,
	                     'message' => 'El nombre de usuario debe de contener entre 5 y 15 caracteres.'
	                     )
	            ),
			     'primerNombre'  => array(
	                     'minLength' => array(
	                     'rule' => array('minLength',1),
	                     'allowEmpty' => false,
	                     'message' => 'Se debe indicar el primer nombre del usuario.'
	                     )
	            ),
			     'apellido'  => array(
	                     'minLength' => array(
	                     'rule' => array('minLength',1),
	                     'allowEmpty' => false,
	                     'message' => 'Se debe indicar el apellido del usuario.'
	                     )
	            ),*/
                 'role'  => array(
	                     'minLength' => array(
	                     'rule' => array('minLength',3),
	                     'allowEmpty' => false,
	                     'message' => 'Indicar una opcion.'
	                     )
	            ),
                 'puesto'  => array(
	                     'minLength' => array(
	                     'rule' => array('minLength',3),
	                     'allowEmpty' => false,
	                     'message' => 'Indicar una opcion.'
	                     )
	            )
           );
		  		   
}
?>