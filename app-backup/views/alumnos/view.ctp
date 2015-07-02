<!-- start main -->
 <div id="main">
 </br>
 <h2>Alumnos</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Alumno', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Id: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('PrimerNombre: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['primerNombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Apellido: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Dni: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['dni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Direccion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['direccion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Telefono: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['telefono']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Email: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Ciudad: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alumno['Alumno']['ciudad']; ?>
			&nbsp;
		</dd>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Centro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alumno['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $alumno['Centro']['sigla'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Curso: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alumno['Curso']['division'], array('controller' => 'cursos', 'action' => 'view', $alumno['Curso']['division'])); ?>
			&nbsp;
		</dd>-->
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
		<li><?php echo $this->Html->link(__('Editar Alumno', true), array('action' => 'edit', $alumno['Alumno']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Alumno', true), array('action' => 'delete', $alumno['Alumno']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $alumno['Alumno']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nuevo Alumno', true), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inscripciones', true), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Calificaciones', true), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Nota', true), array('controller' => 'notas', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		</ul>
</div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($alumno['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('TipoInscripcion'); ?></th>
		<th><?php __('FechaInscripcion'); ?></th>
		<!--<th><?php __('Alumno_id'); ?></th>-->
		<th><?php __('Ciclo_id'); ?></th>
		<th><?php __('Centro_id'); ?></th>
		<!--<th><?php __('Curso_id'); ?></th>-->
		<!--<th><?php __('Materia_id'); ?></th>-->
		<th><?php __('Empleado_id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($alumno['Inscripcion'] as $inscripcion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>	
		<tr<?php echo $class;?>>
			<!--<td><?php echo $inscripcion['id'];?></td>-->
			<td><?php echo $inscripcion['tipoInscripcion'];?></td>
			<td><?php echo $this->Html->formatTime($inscripcion['fechaInscripcion']);?></td>
			<!--<td><?php echo $inscripcion['alumno_id'];?></td>-->
			<td><?php echo ($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['centro_id'], array('controller' => 'centros', 'action' => 'view', $inscripcion['centro_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($inscripcion['curso_id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['curso_id'])));?></td>-->
			<!--<td><?php echo ($this->Html->link($inscripcion['materia_id'], array('controller' => 'materias', 'action' => 'view', $inscripcion['materia_id'])));?></td>-->
			<td><?php echo ($this->Html->link($inscripcion['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['empleado_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscripcion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php __('Notas Relacionadas');?></h3>
	<?php if (!empty($alumno['Nota'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Ciclo Id'); ?></th>
		<th><?php __('Materia Id'); ?></th>
		<!--<th><?php __('NotaPrimeraCuatPrimero'); ?></th>-->
		<!--<th><?php __('NotaSegundaCuatPrimero'); ?></th>-->
		<th><?php __('PromCuatPrimero'); ?></th>
		<!--<th><?php __('NotaPrimeraCuatSegundo'); ?></th>-->
		<!--<th><?php __('NotaSegundaCuatSegundo'); ?></th>-->
		<th><?php __('PromCuatSegundo'); ?></th>
		<th><?php __('PromTermino'); ?></th>
		<th><?php __('NotaDic'); ?></th>
		<th><?php __('NotaMar'); ?></th>
		<th><?php __('PromFinal'); ?></th>
		<th><?php __('Observaciones'); ?></th>
		<!--<th><?php __('Alumno Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($alumno['Nota'] as $nota):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $nota['id'];?></td>-->
			<td><?php echo ($this->Html->link($nota['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $nota['ciclo_id'])));?></td>
			<td><?php echo ($this->Html->link($nota['materia_id'], array('controller' => 'materias', 'action' => 'view', $nota['materia_id'])));?></td>
			<!--<td><?php echo $nota['notaPrimeraCuatPrimero'];?></td>-->
			<!--<td><?php echo $nota['notaSegundaCuatPrimero'];?></td>-->
			<td><?php echo $nota['promCuatPrimero'];?></td>
			<!--<td><?php echo $nota['notaPrimeraCuatSegundo'];?></td>-->
			<!--<td><?php echo $nota['notaSegundaCuatSegundo'];?></td>-->
			<td><?php echo $nota['promCuatSegundo'];?></td>
			<td><?php echo $nota['promTermino'];?></td>
			<td><?php echo $nota['notaDic'];?></td>
			<td><?php echo $nota['notaMar'];?></td>
			<td><?php echo $nota['promFinal'];?></td>
			<td><?php echo $nota['observaciones'];?></td>
			<!--<td><?php echo $nota['alumno_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'notas', 'action' => 'view', $nota['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'notas', 'action' => 'edit', $nota['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'notas', 'action' => 'delete', $nota['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nota['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nota', true), array('controller' => 'notas', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>

