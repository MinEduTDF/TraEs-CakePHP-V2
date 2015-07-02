<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('marca');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('proovedor');
		//echo $this->Form->input('areaDestino');
		$areaDestinos = array('Direccion' => 'Direccion', 'Administracion' => 'Administracion', 'Pedagogia' => 'Pedagogia', 'Bibliotecologia' => 'Bibliotecologia', 'Informatica' => 'Informatica', 'Mantenimiento' => 'Mantenimiento');
        echo $this->Form->input('areaDestino', array('options' => $areaDestinos, 'empty' => ''));
		//echo $this->Form->input('ubicacion');
		$ubicaciones = array('Direccion' => 'Direccion', 'Secretaria' => 'Secretaria', 'Alumnos' => 'Alumnos', 'Gabinete' => 'Gabinete', 'Biblioteca' => 'Biblioteca', 'Informatica' => 'Informatica', 'Deposito de Maestranza' => 'Deposito de Maestranza');
        echo $this->Form->input('ubicacion', array('options' => $ubicaciones, 'empty' => ''));
		echo $this->Form->input('observacion');
		echo $this->Form->input('inventario_id');
?>