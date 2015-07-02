<?php
		$anios = array('03' => '03', '015' => '015', '0302' => '0302', 
		               1 => 'Primero', 2 => 'Segundo', 3 => 'Tercero');
        echo $this->Form->input('anio', array('options' => $anios, 'empty' => ''));
		$divisiones = array('Ninguno_3' => 'Ninguno_3', 'Ninguno_15' => 'Ninguno_15', 'Ninguno_302' => 'Ninguno_302',
		                    '1A_3' => '1A_3', 
							'1A_15' => '1A_15', 
							'1A_302' => '1A_302', 
							'1A_364' => '1A_364', 'R_364' => 'R_364');
        echo $this->Form->input('division', array('options' => $divisiones, 'empty' => ''));
		$turnos = array('Mañana' => 'Mañana', 'Tarde' => 'Tarde', 'Vespertino' => 'Vespertino', 'Noche' => 'Noche');
        echo $this->Form->input('turno', array('options' => $turnos, 'empty' => ''));
		echo $this->Form->input('aulaNro');
		echo $this->Form->input('observacion');
		echo $this->Form->input('centro_id');
		echo $this->Form->input('orientacion_id');
		echo $this->Form->input('modalidad_id');
		echo $this->Form->input('Ciclo');
?>