<?php
class Nota extends AppModel {
	var $name = 'Nota';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
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
                   'notaPrimeraCuatPrimero' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => false,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => false,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'notaSegundaCuatPrimero' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'promCuatPrimero' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota sin signos ni decimales.'
                           )
                   ),
				   'notaPrimeraCuatSegundo' => array(
				           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )			  
				   ),
				   'notaSegundaCuatSegundo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'promCuatSegundo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota sin signos ni decimales.'
                           )
                   ),
				   'promTermino' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'notaDic' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'notaMar' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'promFinal' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
                   'observacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una breve observacion.'
                           )
                   )                  
 
         );
		 
		 /**
		 * Ajusta el promedio de las notas del primer cuatrimestre.
		 */
		 function promedioPrimerCuat()
		 {
            
			   $promedio1 = ('Nota.notaPrimeraCuatPrimero'+'Nota.notaSegundaCuatPrimero')/2;
			   $this->updateAll(array('promCuatPrimero='=> $promedio1),
			                    array('Nota.notaPrimeraCuatPrimero!='=> 0,'Nota.notaSegundaCuatPrimero!='=> 0)); 
			   $this->create();				
		 }
}
?>