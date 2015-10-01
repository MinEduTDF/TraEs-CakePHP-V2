<?php
		$nombres = array('Todas_3' => 'Todas_3', 'Todas_15' => 'Todas_15', 'Todas_302' => 'Todas_302',
		                 'Presencial_3' => 'Presencial_3', 
						 'Presencial_15' => 'Presencial_15', 'Presencial_302' => 'Presencial_302',
		                 'FINES_3' => 'FINES_3', 'FINES_15' => 'FINES_15',
						 'Proyecto adolescentes_15' => 'Proyecto adolescentes_15',
		                 'Semipresencial_Puerto_364' => 'Semipresencial_Puerto_364', 
						 'Contexto de Encierro_Alcaidia_364' => 'Contexto de Encierro_Alcaidia_364');
        echo $this->Form->input('nombre', array('options' => $nombres, 'empty' => ''));
		echo $this->Form->input('descripcion');
		echo $this->Form->input('centro_id');
?>