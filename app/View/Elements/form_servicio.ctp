<?php
		echo $this->Form->input('creado', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		echo $this->Form->input('alumno_id');
		$tipos_servicio = array('Gabinete' => 'Gabinete', 'Domiciliaria' => 'Domiciliaria', 'Hospitalaria' => 'Hospitalaria', 'Comedor' => 'Comedor', 'Beca' => 'Beca');
        echo $this->Form->input('tipo_servicio', array('options' => $tipos_servicio, 'empty' => ''));
		$estados = array('Activo' => 'Activo', 'Desactivo' => 'Desactivo', 'Pendiente' => 'Pendiente');
        echo $this->Form->input('estado', array('options' => $estados, 'empty' => ''));
		echo $this->Form->input('prestador');
		echo $this->Form->input('docente_profesional_acargo');
		echo $this->Form->input('tipo_alta');
		echo $this->Form->input('fecha_alta', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('fecha_baja', array('type' => 'date', 'dateFormat' => 'DMY'));
		$tipos_baja = array('Fin de ciclo' => 'Fin de ciclo', 'Abandono' => 'Abandono', 'Cambio de Institución' => 'Cambio de Institución');
        echo $this->Form->input('tipo_baja', array('options' => $tipos_baja, 'empty' => ''));
		echo $this->Form->input('observaciones');
	
?>