<?php
		$nombres = array('Ninguna_3' => 'Ninguna_3','Ninguna_15' => 'Ninguna_15','Ninguna_302' => 'Ninguna_302',
		                 'Matematica de primero' => 'Matematica de primero', 'Matematica de segundo' => 'Matematica de segundo', 'Matematica de tercero' => 'Matematica de tercero',
						 'Lengua de primero' => 'Lengua de primero', 'Lengua de segundo' => 'Lengua de segundo', 'Lengua de tercero' => 'Lengua de tercero',
		                 'Historia de primero' => 'Historia de primero','Historia de segundo' => 'Historia de segundo','Historia de tercero' => 'Historia de tercero');
        echo $this->Form->input('nombre', array('options' => $nombres, 'empty' => ''));
		$alias = array('Ninguno_3' => 'Ninguno_3', 'Ninguno_15' => 'Ninguno_15', 'Ninguno_302' => 'Ninguno_302', 
		               'MAT1A_3' => 'MAT1A_3', 'MAT1A_15' => 'MAT1A_15', 'MAT1A_302' => 'MAT1A_302', 'MAT1A_364' => 'MAT1A_364',
					   'MAT_MOD1_364' => 'MAT_MOD1_364',
					   'LEN1A_3' => 'LEN1A_3', 'LEN1A_15' => 'LEN1A_15', 'LEN1A_302' => 'LEN1A_302', 'LEN1A_364' => 'LEN1A_364',
		               'HIS1A_3' => 'HIS1A_3', 'HIS1A_15' => 'HIS1A_15', 'HIS1A_302' => 'HIS1A_302','HIS1A_364' => 'HIS1A_364',);
		echo $this->Form->input('alia', array('options' => $alias, 'empty' => ''));
		echo $this->Form->input('contenido');
		echo $this->Form->input('hsSemanal');
		echo $this->Form->input('observacion');
		echo $this->Form->input('curso_id');
		//echo $this->Form->input('Alumno');
?>