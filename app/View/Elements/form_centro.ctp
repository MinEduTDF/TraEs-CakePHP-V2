<?php
		echo $this->Form->input('cue', array('id'=>'cue'));
		echo $this->Form->input('nombre', array('id'=>'nombre'));
		echo $this->Form->input('sigla', array('id'=>'sigla'));
		echo $this->Form->input('fechaFundacion', array('type' => 'date', 'dateFormat' => 'DMY', 'id'=>'fechaFundacion'));
		echo $this->Form->input('equipoDirectivo', array('id'=>'equipoDirectivo'));
		echo $this->Form->input('direccion', array('id'=>'direccion'));
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' => 'Ushuaia');
        echo $this->Form->input('ciudad', array('options' => $ciudades, 'empty' => '', 'id'=>'ciudad'));
		echo $this->Form->input('telefono', array('id'=>'telefono'));
		echo $this->Form->input('email', array('id'=>'email'));
		echo $this->Form->input('url', array('id'=>'url'));
		echo $this->Form->input('Empleado', array('id'=>'Empleado'));
?>