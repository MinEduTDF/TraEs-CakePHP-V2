<div class="cursos index">
	<h2><?php __('Cursos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id');?></th>-->
			<th><?php echo $this->Paginator->sort('anio');?></th>
			<th><?php echo $this->Paginator->sort('division');?></th>
			<th><?php echo $this->Paginator->sort('turno');?></th>
			<th><?php echo $this->Paginator->sort('aula Nro');?></th>
			<th><?php echo $this->Paginator->sort('observacion');?></th>
			<th><?php echo $this->Paginator->sort('centro_id');?></th>
			<th><?php echo $this->Paginator->sort('orientacion_id');?></th>
			<th><?php echo $this->Paginator->sort('modalidad_id');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cursos as $curso):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!--<td><?php echo $curso['Curso']['id']; ?>&nbsp;</td>-->
		<td><?php echo $curso['Curso']['anio']; ?>&nbsp;</td>
		<td><?php echo $curso['Curso']['division']; ?>&nbsp;</td>
		<td><?php echo $curso['Curso']['turno']; ?>&nbsp;</td>
		<td><?php echo $curso['Curso']['aulaNro']; ?>&nbsp;</td>
		<td><?php echo $curso['Curso']['observacion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($curso['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $curso['Centro']['sigla'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($curso['Orientacion']['nombre'], array('controller' => 'orientacions', 'action' => 'view', $curso['Orientacion']['nombre'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($curso['Modalidad']['nombre'], array('controller' => 'modalidads', 'action' => 'view', $curso['Modalidad']['nombre'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $curso['Curso']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $curso['Curso']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $curso['Curso']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curso['Curso']['id'])); ?>-->
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
		<li><?php echo $this->Html->link(__('Nuevo Curso', true), array('action' => 'add')); ?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Orientaciones', true), array('controller' => 'orientacions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Orientacion', true), array('controller' => 'orientacions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Modalidades', true), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Modalidad', true), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Alumno', true), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripciones', true), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Ciclos', true), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Ciclo', true), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>