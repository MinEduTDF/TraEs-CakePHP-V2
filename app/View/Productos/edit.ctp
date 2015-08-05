<div class="productos form">
<?php echo $this->Form->create('Producto');?>
	<fieldset>
 		<legend><?php echo __('Editar Producto'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_producto'); ?>
            </div>
	</fieldset>
<?php  echo $this->Form->input('id', array('type' => 'hidden'));
       echo $this->Form->end(__('Grabar'));
?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $this->Form->value('Producto.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Producto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Productos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Inventarios'), array('controller' => 'inventarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inventario'), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>-->
	</ul>
</div>