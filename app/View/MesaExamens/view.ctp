<div class="mesaExamens view">
<h2><?php echo __('Mesa Examen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesa Especial'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['mesa_especial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turno'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['turno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acta Nro'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['acta_nro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Libro Nro'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['libro_nro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Folio Nro'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['folio_nro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['seccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['hora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aula'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['aula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidad'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['modalidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presidente'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['presidente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vocal Uno'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['vocal_uno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vocal Dos'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['vocal_dos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciclo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesaExamen['Ciclo']['nombre'], array('controller' => 'ciclos', 'action' => 'view', $mesaExamen['Ciclo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesaExamen['Titulacion']['nombre'], array('controller' => 'titulacions', 'action' => 'view', $mesaExamen['Titulacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesaExamen['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $mesaExamen['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno Id'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['alumno_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mesaExamen['MesaExamen']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mesa Examen'), array('action' => 'edit', $mesaExamen['MesaExamen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mesa Examen'), array('action' => 'delete', $mesaExamen['MesaExamen']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesaExamen['MesaExamen']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesa Examens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesa Examen'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Alumnos'); ?></h3>
	<?php if (!empty($mesaExamen['Alumno'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Foto Dir'); ?></th>
		<th><?php echo __('Documento Tipo'); ?></th>
		<th><?php echo __('Documento Nro'); ?></th>
		<th><?php echo __('Cuil Cuit'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Fecha Nac'); ?></th>
		<th><?php echo __('Pcia Nac'); ?></th>
		<th><?php echo __('Nacionalidad'); ?></th>
		<th><?php echo __('Indigena'); ?></th>
		<th><?php echo __('Estado Civil'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Telefono Nro'); ?></th>
		<th><?php echo __('Calle Nombre'); ?></th>
		<th><?php echo __('Calle Nro'); ?></th>
		<th><?php echo __('Barrio'); ?></th>
		<th><?php echo __('Asentamiento'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th><?php echo __('Pendiente'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mesaExamen['Alumno'] as $alumno): ?>
		<tr>
			<td><?php echo $alumno['id']; ?></td>
			<td><?php echo $alumno['apellidos']; ?></td>
			<td><?php echo $alumno['nombres']; ?></td>
			<td><?php echo $alumno['foto']; ?></td>
			<td><?php echo $alumno['foto_dir']; ?></td>
			<td><?php echo $alumno['documento_tipo']; ?></td>
			<td><?php echo $alumno['documento_nro']; ?></td>
			<td><?php echo $alumno['cuil_cuit']; ?></td>
			<td><?php echo $alumno['ocupacion']; ?></td>
			<td><?php echo $alumno['fecha_nac']; ?></td>
			<td><?php echo $alumno['pcia_nac']; ?></td>
			<td><?php echo $alumno['nacionalidad']; ?></td>
			<td><?php echo $alumno['indigena']; ?></td>
			<td><?php echo $alumno['estado_civil']; ?></td>
			<td><?php echo $alumno['email']; ?></td>
			<td><?php echo $alumno['telefono_nro']; ?></td>
			<td><?php echo $alumno['calle_nombre']; ?></td>
			<td><?php echo $alumno['calle_nro']; ?></td>
			<td><?php echo $alumno['barrio']; ?></td>
			<td><?php echo $alumno['asentamiento']; ?></td>
			<td><?php echo $alumno['ciudad']; ?></td>
			<td><?php echo $alumno['creado']; ?></td>
			<td><?php echo $alumno['modificado']; ?></td>
			<td><?php echo $alumno['pendiente']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), array('confirm' => __('Are you sure you want to delete # %s?', $alumno['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
