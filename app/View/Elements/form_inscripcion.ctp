<?php
		$tipoInscripciones = array('Regular' => 'Regular', 'Semipresencial' => 'Semipresencial', 'Fines' => 'Fines', 'Proyecto Adolescentes' => 'Proyecto Adolescentes', 'Contexto de Encierro' => 'Contexto de Encierro');
        echo $this->Form->input('tipoInscripcion', array('options' => $tipoInscripciones, 'empty' => ''));
		echo $this->Form->input('fechaInscripcion', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('ciclo_id');
		echo $this->Form->input('centro_id');
		//echo $this->Form->input('curso_id');
		echo $this->Form->input('Materia');
		echo $this->Form->input('empleado_id');
?>