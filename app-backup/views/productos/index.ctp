<div class="productos index">
	<h2><?php __('Productos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id');?></th>-->
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('marca');?></th>
			<th><?php echo $this->Paginator->sort('cantidad');?></th>
			<th><?php echo $this->Paginator->sort('proovedor');?></th>
			<th><?php echo $this->Paginator->sort('ubicacion');?></th>
			<th><?php echo $this->Paginator->sort('areaDestino');?></th>
			<th><?php echo $this->Paginator->sort('observacion');?></th>
			<th><?php echo $this->Paginator->sort('inventario_id');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($productos as $producto):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!--<td><?php echo $producto['Producto']['id']; ?>&nbsp;</td>-->
		<td><?php echo $producto['Producto']['nombre']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['marca']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['cantidad']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['proovedor']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['ubicacion']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['areaDestino']; ?>&nbsp;</td>
		<td><?php echo $producto['Producto']['observacion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($producto['Inventario']['id'], array('controller' => 'inventarios', 'action' => 'view', $producto['Inventario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $producto['Producto']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $producto['Producto']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $producto['Producto']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Producto', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Inventarios', true), array('controller' => 'inventarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inventario', true), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>-->
	</ul>
</div>