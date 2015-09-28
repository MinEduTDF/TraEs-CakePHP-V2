<?php
		$articulos = array('Enfermedad' => 'Enfermedad', 'Nacimiento' => 'Nacimiento', 'Fallecimiento' => 'Fallecimiento');
        echo $this->Form->input('articulo', array('options' => $articulos, 'empty' => ''));
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fechaDesde', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('fechaHasta', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('observacion');
		echo $this->Form->input('docente_id');
		echo $this->Form->input('empleado_id');
		echo $this->Form->input('cargo_id');
?>