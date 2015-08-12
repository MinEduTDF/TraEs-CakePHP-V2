<?php
		echo $this->Form->input('creado', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		echo $this->Form->input('centro_id');
		echo $this->Form->input('ciclo_id');
		echo $this->Form->input('alumno_id');
		$tipos_discapacidad = array('Motriz' => 'Motriz', 'Visual' => 'Visual', 'Mental' =>                          'Mental', 'Auditiva' => 'Auditiva', 'De lenguaje' => 'De lenguaje');
        echo $this->Form->input('tipo_discapacidad', array('options' => $tipos_discapacidad, 'empty' => ''));
		echo $this->Form->input('docente_nombre_completo', array('label' => 'Nombre completo del docente integrador'));
		echo $this->Form->input('fecha_inicio', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('fecha_fin', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ' '));
		echo $this->Form->input('observaciones');
?>