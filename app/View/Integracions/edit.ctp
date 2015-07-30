<div class="integracions form">
<?php echo $this->Form->create('Integracion');?>
	</br>
	<fieldset>
 		<legend><?php echo __('Editar Integracion'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_integracion'); ?>
             </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $this->Form->value('Integracion.id')), null, sprintf(__('Esta seguro de borrar la integracion # %s?'), $this->Form->value('Integracion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index'));?></li>
	</ul>
</div>