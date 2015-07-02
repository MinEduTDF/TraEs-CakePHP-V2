<div class="titulos form">
<?php echo $this->Form->create('Titulo');?>
	<fieldset>
 		<legend><?php __('Editar Titulo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('tipo');
		echo $this->Form->input('institucion');
		echo $this->Form->input('docente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Titulo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Titulo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Titulos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
	</ul>
</div>