<div class="estados form">
<?php echo $this->Form->create('Estado');?>
	<fieldset>
 		<legend><?php __('Editar Estado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar Estado', true), array('action' => 'delete', $this->Form->value('Estado.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Estado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Estados', true), array('action' => 'index'));?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>