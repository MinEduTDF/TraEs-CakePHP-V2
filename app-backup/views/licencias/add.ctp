<div class="licencias form">
<?php echo $this->Form->create('Licencia');?>
	<fieldset>
 		<legend><?php __('Agregar Licencia'); ?></legend>
	       <div id="main">
                    <?php echo $this->element('form_licencia'); ?>
           </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	</br>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Listar Licencias', true), array('action' => 'index'));?></li>-->
		<li><?php echo $this->Html->link(__('Listar Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>