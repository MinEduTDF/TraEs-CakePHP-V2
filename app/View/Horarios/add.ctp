<div class="horarios form">
<?php echo $this->Form->create('Horario');?>
	<fieldset>
 		<legend><?php echo __('Agregar Horario'); ?></legend>
	<?php
		echo $this->Form->input('fechaCreacion', array('type' => 'date', 'dateFormat' => 'DMY'));
		//echo $this->Form->input('dia');
		$dias = array('Lunes_hora1_3' => 'Lunes_hora1_3', 'Lunes_hora2_3' => 'Lunes_hora2_3', 
		              'Lunes_hora3_3' => 'Lunes_hora3_3', 'Lunes_hora4_3' => 'Lunes_hora4_3', 
					  'Lunes_hora5_3' => 'Lunes_hora5_3',
					  'Lunes_hora1_15' => 'Lunes_hora1_15', 'Lunes_hora2_15' => 'Lunes_hora2_15', 
		              'Lunes_hora3_15' => 'Lunes_hora3_15', 'Lunes_hora4_15' => 'Lunes_hora4_15', 
					  'Lunes_hora5_15' => 'Lunes_hora5_15',
		              'Lunes_hora1_302' => 'Lunes_hora1_302', 'Lunes_hora2_302' => 'Lunes_hora2_302', 
		              'Lunes_hora3_302' => 'Lunes_hora3_302', 'Lunes_hora4_302' => 'Lunes_hora4_302', 
					  'Lunes_hora5_302' => 'Lunes_hora5_302', 
					  'Martes' => 'Martes', 'Miercoles' => 'Miercoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes');
        echo $this->Form->input('dia', array('options' => $dias, 'empty' => ''));
		//echo $this->Form->input('horaInicio');
		echo $this->Form->input('horaInicio', array('type' => 'time', 'timeFormat' => 24));
		//echo $this->Form->input('horaFin');
		echo $this->Form->input('horaFin', array('type' => 'time', 'timeFormat' => 24));
		echo $this->Form->input('Cargo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Horarios'), array('action' => 'index'));?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>