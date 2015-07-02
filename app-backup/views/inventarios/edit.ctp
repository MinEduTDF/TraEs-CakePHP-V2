<div class="inventarios form">
<?php echo $this->Form->create('Inventario');?>
	<fieldset>
 		<legend><?php __('Editar Inventario'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_inventario'); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Inventario.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Inventario.id'))); ?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Inventarios', true), array('action' => 'index'));?></li>-->
		<li><?php echo $this->Html->link(__('Listar Productos', true), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Producto', true), array('controller' => 'productos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		</ul>
</div>