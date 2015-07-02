<div class="modalidads index">
	<h2><?php __('Modalidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('centro_id');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($modalidads as $modalidad):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $modalidad['Modalidad']['id']; ?>&nbsp;</td>
		<td><?php echo $modalidad['Modalidad']['nombre']; ?>&nbsp;</td>
		<td><?php echo $modalidad['Modalidad']['descripcion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($modalidad['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $modalidad['Centro']['sigla'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $modalidad['Modalidad']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $modalidad['Modalidad']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $modalidad['Modalidad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $modalidad['Modalidad']['id'])); ?>-->
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
		<li><?php echo $this->Html->link(__('Nueva Modalidad', true), array('action' => 'add')); ?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>