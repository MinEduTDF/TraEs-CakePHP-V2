<div class="mesaExamens form">
<?php echo $this->Form->create('MesaExamen'); ?>
	<fieldset>
		<legend><?php echo __('Add Mesa Examen'); ?></legend>
	<?php
		echo $this->Form->input('mesa_especial');
		echo $this->Form->input('turno');
		echo $this->Form->input('acta_nro');
		echo $this->Form->input('libro_nro');
		echo $this->Form->input('folio_nro');
		echo $this->Form->input('fecha');
		echo $this->Form->input('seccion');
		echo $this->Form->input('hora');
		echo $this->Form->input('aula');
		echo $this->Form->input('modalidad');
		echo $this->Form->input('presidente');
		echo $this->Form->input('vocal_uno');
		echo $this->Form->input('vocal_dos');
		echo $this->Form->input('ciclo_id');
		echo $this->Form->input('titulacion_id');
		echo $this->Form->input('materia_id');
		echo $this->Form->input('Alumno');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mesa Examens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Titulacions'), array('controller' => 'titulacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulacion'), array('controller' => 'titulacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
