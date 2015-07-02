<div class="productos form">
<?php echo $this->Form->create('Producto');?>
	<fieldset>
 		<legend><?php __('Editar Producto'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_producto'); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Producto.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Producto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Productos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Inventarios', true), array('controller' => 'inventarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inventario', true), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>-->
	</ul>
</div>