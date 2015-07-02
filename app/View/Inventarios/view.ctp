<!-- start main -->
 <div id="main">
 
 <h2>Inventario</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Inventario'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Id'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventario['Inventario']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nombre: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventario['Inventario']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('FechaCreacion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($inventario['Inventario']['fechaCreacion']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('FechaModificacion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($inventario['Inventario']['fechaModificacion']); ?>
			&nbsp;	
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Observacion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inventario['Inventario']['observacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Empleado: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($inventario['Empleado']['apellido'], array('controller' => 'empleados', 'action' => 'view', $inventario['Empleado']['apellido']))
			." ".($this->Html->link($inventario['Empleado']['primerNombre'], array('controller' => 'empleados', 'action' => 'view', $inventario['Empleado']['primerNombre']))));
			?>
			&nbsp;
		</dd>
	</dl>
 
 </div>
 <!-- end main -->
 <!-- start sidebar -->
 <div id="sidebar">
		
		<div id="invoice-stats">
   		
        </div>
  <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Inventario'), array('action' => 'edit', $inventario['Inventario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Enviar Invenetario PDF'), array('action' => 'sendPDF', $inventario['Inventario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Cancelar Inventario'), array('action' => 'cancel', $inventario['Inventario']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Inventario'), array('action' => 'delete', $inventario['Inventario']['id']), null, sprintf(__('Esta seguro de borrar el inventario numero %s?'), $inventario['Inventario']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inventarios'), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nuevo Inventario'), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		</ul>
  </div>
</div>	
<!-- end sidebar -->
  <div class="related">
	<h3><?php echo __('Productos Relacionados');?></h3>
	<?php if (!empty($inventario['Producto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Marca'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Proovedor'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('AreaDestino'); ?></th>
		<th><?php echo __('Observacion'); ?></th>
		<!--<th><?php echo __('Inventario Id'); ?></th>-->
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inventario['Producto'] as $producto):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $producto['id'];?></td>-->
			<td><?php echo $producto['nombre'];?></td>
			<td><?php echo $producto['marca'];?></td>
			<td><?php echo $producto['cantidad'];?></td>
			<td><?php echo $producto['proovedor'];?></td>
			<td><?php echo $producto['ubicacion'];?></td>
			<td><?php echo $producto['areaDestino'];?></td>
			<td><?php echo $producto['observacion'];?></td>
			<!--<td><?php echo $producto['inventario_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $producto['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
  </div>
</div>



