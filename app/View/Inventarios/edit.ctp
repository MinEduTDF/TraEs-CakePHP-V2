<div class="inventarios form">
<?php echo $this->Form->create('Inventario');?>
	<fieldset>
 		<legend><?php echo __('Editar Inventario'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_inventario'); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $this->Form->value('Inventario.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Inventario.id'))); ?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Inventarios'), array('action' => 'index'));?></li>-->
		<li><?php echo $this->Html->link(__('Listar Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		</ul>
</div>