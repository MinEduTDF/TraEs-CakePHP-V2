<?php
		echo $this->Form->input('plazas');
		$tipos = array('Independiente' => 'Independiente', 'Independiente de recuperación' =>                       'Independiente de recuperación', 'Independiente semipresencial' =>                       'Independiente semipresencial', 'Independiente presencial y semipresencial'                        => 'Independiente presencial y semipresencial', 'Múltiple' => 'Múltiple',                       'Múltiple de recuperación' => 'Múltiple de recuperación', 'Múltiple                        semipresencial' => 'Múltiple semipresencial', 'Múltiple presencial y                        semipresencial' => 'Múltiple presencial y semipresencial', 
		               'No Corresponde' => 'No Corresponde', 'Independiente presencial y                        semipresencial (violeta)' => 'Independiente presencial y semipresencial                        (violeta)', 'Mixta / Bimodal' => 'Mixta / Bimodal', 'Múltiple presencial                        y semipresencial (violeta)' => 'Múltiple presencial y semipresencial                        (violeta)', 'Multinivel' => 'Multinivel', 'Multiplan' => 'Multiplan',);
		echo $this->Form->input('tipo', array('options' => $tipos, 'empty' => ''));
		$anios = array('1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
        echo $this->Form->input('anio', array('options' => $anios, 'empty' => ''));
		$divisiones = array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', '1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
        echo $this->Form->input('division', array('options' => $divisiones, 'empty' => ''));
		$turnos = array('A distancia' => 'A distancia', 'Doble' => 'Doble', 'Intermedio' =>                        'Intermedio', 'Libre' => 'Libre', 'Mañana' => 'Mañana', 'Noche' =>                        'Noche', 'Tarde' =>'Tarde', 'Vespertino' =>'Vespertino', 'Alternado' =>                        'Alternado', 'Mañana Extendida' =>'Mañana Extendida', 'Tarde Extendida' =>                        'Tarde Extendida', 'Doble Extendida' =>'Doble Extendida', 'Otro' =>'Otro');
        echo $this->Form->input('turno', array('options' => $turnos, 'empty' => ''));
		//echo $this->Form->input('aulaNro');
		echo $this->Form->input('centro_id');
		echo $this->Form->input('titulacion_id');
		//echo $this->Form->input('modalidad_id');
		echo $this->Form->input('Ciclo');
?>