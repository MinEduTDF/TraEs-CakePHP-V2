<!-- start main -->
 <div id="main">
 
 <h2>Orientaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Orientacion'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $orientacions['Orientacion']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nombre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $orientacions['Orientacion']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Descripcion'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $orientacions['Orientacion']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Centro'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($orientacions['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $orientacions['Centro']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Editar Orientacion'), array('action' => 'edit', $orientacions['Orientacion']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Orientacion'), array('action' => 'delete', $orientacions['Orientacion']['id']), null, sprintf(__('Esta seguro que quiere borrar la orientacion %s?'), $orientacions['Orientacion']['nombre'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Orientaciones'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Orientacion'), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php echo __('Cursos Relacionados');?></h3>
	<?php if (!empty($orientacion['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Anio'); ?></th>
		<th><?php echo __('Division'); ?></th>
		<th><?php echo __('Turno'); ?></th>
		<th><?php echo __('AulaNro'); ?></th>
		<th><?php echo __('Observacion'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<!--<th><?php echo __('Orientacion Id'); ?></th>-->
		<th><?php echo __('Modalidad Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($orientacion['Curso'] as $curso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $curso['id'];?></td>-->
			<td><?php echo $curso['anio'];?></td>
			<td><?php echo $curso['division'];?></td>
			<td><?php echo $curso['turno'];?></td>
			<td><?php echo $curso['aulaNro'];?></td>
			<td><?php echo $curso['observacion'];?></td>
			<td><?php echo $curso['centro_id'];?></td>
			<!--<td><?php echo $curso['orientacion_id'];?></td>-->
			<td><?php echo $curso['modalidad_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, sprintf(__('Esta seguro que desea borrar el curso %s?'), $curso['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>