<?php
		$ciclos = array(2010 => 2010, 2011 => 2011, 2012 => 2012, 2013 => 2013, 2014 => 2014, 2015 => 2015);
        echo $this->Form->input('ciclo', array('options' => $ciclos, 'empty' => ''));
		echo $this->Form->input('fechaInicio', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('fechaFinal', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('primer_periodo', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('segundo_periodo', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('tercer_periodo', array('type' => 'date', 'dateFormat' => 'DMY'));
		echo $this->Form->input('observaciones');
		//echo $this->Form->input('Cargo');
		//echo $this->Form->input('Curso');
?>