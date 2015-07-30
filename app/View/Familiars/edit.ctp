<div class="familiars form">
<?php echo $this->Form->create('Familiar');?>
	</br>
	<fieldset>
 		<legend><?php echo __('Editar Familiar'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_familiar'); ?>
             </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $this->Form->value('Familiar.id')), null, sprintf(__('Esta seguro de borrar el familiar # %s?'), $this->Form->value('Familiar.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index'));?></li>
	</ul>
</div>