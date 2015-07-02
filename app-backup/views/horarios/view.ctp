<div class="horarios view">
<h2><?php  __('Horario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('FechaCreacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['fechaCreacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['dia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('HoraInicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['horaInicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('HoraFin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $horario['Horario']['horaFin']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Horario', true), array('action' => 'edit', $horario['Horario']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Horario', true), array('action' => 'delete', $horario['Horario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $horario['Horario']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Horarios', true), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Horario', true), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
<div class="related">
	<h3><?php __('Cargos Relacionados');?></h3>
	<?php if (!empty($horario['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('ResolucionNro'); ?></th>
		<th><?php __('HsCatedra'); ?></th>
		<!--<th><?php __('HsReloj'); ?></th>-->
		<th><?php __('Area'); ?></th>
		<th><?php __('Puesto'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Creacion'); ?></th>
		<th><?php __('Cierre'); ?></th>
		<th><?php __('Alta'); ?></th>
		<th><?php __('Baja'); ?></th>
		<th><?php __('Cambio de Situacion'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Curso Id'); ?></th>
		<th><?php __('Materia Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($horario['Cargo'] as $cargo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $cargo['id'];?></td>-->
			<td><?php echo $cargo['nombre'];?></td>
			<td><?php echo $cargo['tipo'];?></td>
			<td><?php echo $cargo['resolucionNro'];?></td>
			<td><?php echo $cargo['hsCatedra'];?></td>
			<!--<td><?php echo $cargo['hsReloj'];?></td>-->
			<td><?php echo $cargo['area'];?></td>
			<td><?php echo $cargo['puesto'];?></td>
			<td><?php echo $cargo['descricpion'];?></td>
			<td><?php echo $cargo['fechaCreacion'];?></td>
			<td><?php echo $cargo['fechaCierre'];?></td>
			<td><?php echo $cargo['fechaAltaPersona'];?></td>
			<td><?php echo $cargo['fechaBajaPersona'];?></td>
			<td><?php echo $cargo['fechaCambioSituacionPersona'];?></td>
			<td><?php echo $cargo['estado'];?></td>
			<td><?php echo ($this->Html->link($cargo['centro_id'], array('controller' => 'centros', 'action' => 'view', $cargo['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($cargo['curso_id'], array('controller' => 'centros', 'action' => 'view', $cargo['curso_id'])));?></td>
			<td><?php echo ($this->Html->link($cargo['materia_id'], array('controller' => 'centros', 'action' => 'view', $cargo['materia_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cargos', 'action' => 'view', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cargos', 'action' => 'edit', $cargo['id'])); ?>
				<!--?php echo $this->Html->link(__('Borrar', true), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
