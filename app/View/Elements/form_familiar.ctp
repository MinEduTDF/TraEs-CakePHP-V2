<?php
		echo $this->Form->input('creado', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('vinculo');
		echo $this->Form->input('nombre_completo');
		echo $this->Form->input('cuil_cuit');
		echo $this->Form->input('ocupacion');
		echo $this->Form->input('nacionalidad');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono_nro');
		echo $this->Form->input('domicilio');
		echo $this->Form->input('barrio');
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' =>                          'Ushuaia');
        echo $this->Form->input('ciudad', array('options' => $ciudades, 'empty' => ''));
				
?>