<div class="servicios form">
<?php echo $this->Form->create('Servicio');?>
	</br>
	<fieldset>
 		<legend><?php echo __('Editar Servicio'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_servicio'); ?>
             </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $this->Form->value('Servicio.id')), null, sprintf(__('Esta seguro de borrar el servicio # %s?'), $this->Form->value('Servicio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index'));?></li>
	</ul>
</div>