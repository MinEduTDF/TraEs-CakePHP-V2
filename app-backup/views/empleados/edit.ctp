<div class="empleados form">
<?php echo $this->Form->create('Empleado');?>
	</br>
	<fieldset>
 		<legend><?php __('Editar Empleado'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_empleado'); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Empleado.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Empleado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Empleados', true), array('action' => 'index'));?></li>
		<!--<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Inscripcions', true), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inventarios', true), array('controller' => 'inventarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inventario', true), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
	</ul>
</div>