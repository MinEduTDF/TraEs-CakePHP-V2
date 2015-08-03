<?php
		echo $this->Form->input('primerNombre', array('label'=>'Nombre:', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('apellido', array('label'=>'Apellido:', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('dni', array('label'=>'Dni:', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('direccion', array('label'=>'Direccion:', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('telefono', array('label'=>'Telefono:', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('email', array('label'=>'Email:', 'between' => '<br>', 'class' => 'form-control'));
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' => 'Ushuaia');
        echo $this->Form->input('ciudad', array('options' => $ciudades,'class' => 'form-control'));
		/*echo $this->Form->input('centro_id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('Materia');*/
		
?>