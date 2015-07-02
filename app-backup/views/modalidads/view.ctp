<!-- start main -->
 <div id="main">
 
 <h2>Modalidades</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Modalidad', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Id'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $modalidad['Modalidad']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nombre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $modalidad['Modalidad']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Descripcion'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $modalidad['Modalidad']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Centro'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($modalidad['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $modalidad['Centro']['sigla'])); ?>
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
		<li><?php echo $this->Html->link(__('Editar Modalidad', true), array('action' => 'edit', $modalidad['Modalidad']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Modalidad', true), array('action' => 'delete', $modalidad['Modalidad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $modalidad['Modalidad']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Modalidades', true), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Modalidad', true), array('action' => 'add')); ?> </li>-->
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
	<?php if (!empty($modalidad['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Anio'); ?></th>
		<th><?php __('Division'); ?></th>
		<th><?php __('Turno'); ?></th>
		<th><?php __('AulaNro'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<!--<th><?php __('Centro Id'); ?></th>-->
		<th><?php __('Orientacion Id'); ?></th>
		<!--<th><?php __('Modalidad Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($modalidad['Curso'] as $curso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curso['id'];?></td>
			<td><?php echo $curso['anio'];?></td>
			<td><?php echo $curso['division'];?></td>
			<td><?php echo $curso['turno'];?></td>
			<td><?php echo $curso['aulaNro'];?></td>
			<td><?php echo $curso['observacion'];?></td>
			<!--<td><?php echo ($this->Html->link($curso['centro_id'], array('controller' => 'centros', 'action' => 'view', $curso['centro_id'])));?></td>-->
			<td><?php echo ($this->Html->link($curso['orientacion_id'], array('controller' => 'orientacions', 'action' => 'view', $curso['orientacion_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($curso['modalidad_id'], array('controller' => 'modalidads', 'action' => 'view', $curso['modalidad_id'])));?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curso['id'])); ?>-->
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
