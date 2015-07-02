<!-- start main -->
 <div id="main">
 
 <h2>Orientaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Orientacion', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $orientacions['Orientacion']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nombre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $orientacions['Orientacion']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Descripcion'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $orientacions['Orientacion']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Centro'); ?></strong></dt>
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
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Orientacion', true), array('action' => 'edit', $orientacions['Orientacion']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Orientacion', true), array('action' => 'delete', $orientacions['Orientacion']['id']), null, sprintf(__('Esta seguro que quiere borrar la orientacion %s?', true), $orientacions['Orientacion']['nombre'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Orientaciones', true), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Orientacion', true), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php __('Cursos Relacionados');?></h3>
	<?php if (!empty($orientacion['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Anio'); ?></th>
		<th><?php __('Division'); ?></th>
		<th><?php __('Turno'); ?></th>
		<th><?php __('AulaNro'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<!--<th><?php __('Orientacion Id'); ?></th>-->
		<th><?php __('Modalidad Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
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
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, sprintf(__('Esta seguro que desea borrar el curso %s?', true), $curso['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>