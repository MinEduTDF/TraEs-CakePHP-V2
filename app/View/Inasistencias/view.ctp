<!-- start main -->
 <div id="main">
 </br>
 <h2>Inasistencias</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Inasistencia'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Ciclo | Tipo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($inasistencia['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $inasistencia['Ciclo']['ciclo']))).' | '.($inasistencia['Inasistencia']['tipo']); ?>
 			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Justificada | Causa: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($inasistencia['Inasistencia']['justificado']).' | '.($inasistencia['Inasistencia']['causa']); ?>
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
		<li><?php echo $this->Html->link(__('Editar Inasistencia'), array('action' => 'edit', $inasistencia['Inasistencia']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Alumno'), array('action' => 'delete', $alumno['Alumno']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $alumno['Alumno']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('action' => 'add')); ?> </li>
		</ul>
 </div>
</div>	
<!-- end sidebar -->

<!--<div class="related">
	<h3><?php echo __('Cursos Relacionados');?></h3>
	<?php if (!empty($inscripcion['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Año'); ?></th>
		<th><?php echo __('Division'); ?></th>
		<th><?php echo __('Turno'); ?></th>
        <th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Cursada'); ?></th>
        <th><?php echo __('Titulación'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inscripcion['Curso'] as $curso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curso['anio'];?></td>
			<td><?php echo $curso['division'];?></td>
			<td><?php echo $curso['turno'];?></td>
			<td><?php echo $curso['tipo'];?></td>
            <td><?php echo $curso['organizacion_cursada'];?></td>
            <td><?php echo ($this->Html->link($curso['titulacion_id'], array('controller' => 'titulacions', 'action' => 'view', $curso['titulacion_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $materia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
    <?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php echo __('Materias Relacionadas');?></h3>
	<?php if (!empty($inasistencia['Materia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Alia'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
        <th><?php echo __('Carga horaria en'); ?></th>
		<th><?php echo __('Carga horaria semanal'); ?></th>
        <th><?php echo __('Contenido'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inasistencia['Materia'] as $materia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $materia['alia'];?></td>
			<td><?php echo ($this->Html->link($materia['curso_id'], array('controller' => 'cursos', 'action' => 'view', $materia['curso_id'])));?></td>
            <td><?php echo $materia['carga_horaria_en'];?></td>
			<td><?php echo $materia['carga_horaria_semanal'];?></td>
			<td><?php echo $materia['contenido'];?></td>
            <td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'materias', 'action' => 'view', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'materias', 'action' => 'edit', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $materia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
    <?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
