<div class="mesaExamens index">
	<h2><?php echo __('Mesa Examens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mesa_especial'); ?></th>
			<th><?php echo $this->Paginator->sort('turno'); ?></th>
			<th><?php echo $this->Paginator->sort('acta_nro'); ?></th>
			<th><?php echo $this->Paginator->sort('libro_nro'); ?></th>
			<th><?php echo $this->Paginator->sort('folio_nro'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion'); ?></th>
			<th><?php echo $this->Paginator->sort('hora'); ?></th>
			<th><?php echo $this->Paginator->sort('aula'); ?></th>
			<th><?php echo $this->Paginator->sort('modalidad'); ?></th>
			<th><?php echo $this->Paginator->sort('presidente'); ?></th>
			<th><?php echo $this->Paginator->sort('vocal_uno'); ?></th>
			<th><?php echo $this->Paginator->sort('vocal_dos'); ?></th>
			<th><?php echo $this->Paginator->sort('ciclo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulacion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('alumno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mesaExamens as $mesaExamen): ?>
	<tr>
		<td><?php echo h($mesaExamen['MesaExamen']['id']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['mesa_especial']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['turno']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['acta_nro']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['libro_nro']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['folio_nro']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['seccion']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['hora']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['aula']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['modalidad']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['presidente']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['vocal_uno']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['vocal_dos']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mesaExamen['Ciclo']['nombre'], array('controller' => 'ciclos', 'action' => 'view', $mesaExamen['Ciclo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mesaExamen['Titulacion']['nombre'], array('controller' => 'titulacions', 'action' => 'view', $mesaExamen['Titulacion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mesaExamen['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $mesaExamen['Materia']['id'])); ?>
		</td>
		<td><?php echo h($mesaExamen['MesaExamen']['alumno_id']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['created']); ?>&nbsp;</td>
		<td><?php echo h($mesaExamen['MesaExamen']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mesaExamen['MesaExamen']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mesaExamen['MesaExamen']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mesaExamen['MesaExamen']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesaExamen['MesaExamen']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mesa Examen'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Titulacions'), array('controller' => 'titulacions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Titulacion'), array('controller' => 'titulacions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
