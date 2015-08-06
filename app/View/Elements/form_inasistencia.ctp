<?php
		echo $this->Form->input('creado', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('Materia');
		$tipos_causa = array('Sin causa' => 'Sin causa', 'Razones particulares' => 'Razones particulares', 'Enfermedad' => 'Enfermedad', 'Fenómenos meteorológicos' => 'Fenómenos meteorológicos', 'Donación de sangre' => 'Donación de sangre', 'Obligaciones cívico_militares' => 'Obligaciones cívico_militares', 'Paro de transporte' => 'Paro de transporte');
        echo $this->Form->input('causa', array('options' => $tipos_causa, 'empty' => ''));
        $tipos = array('un cuarto' => 'un cuarto' ,'media' => 'media', 'completa' => 'completa');
        echo $this->Form->input('tipo', array('options' => $tipos, 'empty' => ''));
		$tipos_justificado = array('Si' => 'Si', 'No' => 'No', 'Pendiente' => 'Pendiente');
        echo $this->Form->input('justificado', array('options' => $tipos_justificado, 'empty' => ''));
?>