<div class="titulos index">
	<h2><?php echo __('Titulos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th><?php echo $this->Paginator->sort('institucion');?></th>
			<th><?php echo $this->Paginator->sort('docente_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($titulos as $titulo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $titulo['Titulo']['id']; ?>&nbsp;</td>
		<td><?php echo $titulo['Titulo']['titulo']; ?>&nbsp;</td>
		<td><?php echo $titulo['Titulo']['tipo']; ?>&nbsp;</td>
		<td><?php echo $titulo['Titulo']['institucion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($titulo['Docente']['apellido'], array('controller' => 'docentes', 'action' => 'view', $titulo['Docente']['apellido'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $titulo['Titulo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $titulo['Titulo']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $titulo['Titulo']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $titulo['Titulo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Titulo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
	</ul>
</div>