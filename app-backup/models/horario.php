<?php
class Horario extends AppModel {
	var $name = 'Horario';
	var $displayField = 'dia';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
		'Cargo' => array(
			'className' => 'Cargo',
			'joinTable' => 'cargos_horarios',
			'foreignKey' => 'horario_id',
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
		)
	);

	//Validaciones
                    var $validate = array(
                    'dia' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 5), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una opcion.'
                           )
                   ),
                   
       );

}
?>