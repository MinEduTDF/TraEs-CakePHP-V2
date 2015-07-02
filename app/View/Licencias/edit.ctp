<div class="licencias form">
<?php echo $this->Form->create('Licencia');?>
	<fieldset>
 		<legend><?php echo __('Editar Licencia'); ?></legend>
	       <div id="main">
                    <?php echo $this->element('form_licencia'); ?>
           </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	</br>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $this->Form->value('Estado.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Estado.id'))); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Estados'), array('action' => 'index'));?></li>-->
		<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>