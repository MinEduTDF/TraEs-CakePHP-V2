<?php
		echo $this->Form->input('dni');
		echo $this->Form->input('apellido');
		echo $this->Form->input('primerNombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' => 'Ushuaia');
        echo $this->Form->input('ciudad', array('options' => $ciudades, 'empty' => ''));
		echo $this->Form->input('Cargo');
		echo $this->Form->input('Centro');
?>