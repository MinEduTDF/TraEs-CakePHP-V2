<div class="titulos form">
<?php echo $this->Form->create('Titulo');?>
	<fieldset>
 		<legend><?php echo __('Editar Titulo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('tipo');
		echo $this->Form->input('institucion');
		echo $this->Form->input('docente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $this->Form->value('Titulo.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Titulo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Titulos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
	</ul>
</div>