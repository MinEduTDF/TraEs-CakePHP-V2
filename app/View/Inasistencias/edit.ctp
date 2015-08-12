<div class="inasistencias form">
<?php echo $this->Form->create('Inasistencia');?>
	</br>
	<fieldset>
 		<legend><?php echo __('Editar Inasistencia'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_inasistencia'); ?>
             </div>
	</fieldset>
<?php 
       echo $this->Form->input('id', array('type' => 'hidden'));
       echo $this->Form->end(__('Grabar'));
?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $this->Form->value('Inasistencia.id')), null, sprintf(__('Esta seguro de borrar la inasistencia # %s?'), $this->Form->value( 'Inasistencia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index'));?></li>
	</ul>
</div>