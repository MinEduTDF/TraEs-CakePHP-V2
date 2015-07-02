<!-- start main -->
 <div id="main">
 
 <h2>Materias</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Materia'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nombre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Alia'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['alia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Contenido'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['contenido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('HsSemanal'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['hsSemanal']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Curso'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($materia['Curso']['division'], array('controller' => 'cursos', 'action' => 'view', $materia['Curso']['division'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Cargo'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($materia['Cargo']['nombre'], array('controller' => 'cargos', 'action' => 'view', $materia['Cargo']['nombre'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Observacion'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['observacion']; ?>
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
		<li><?php echo $this->Html->link(__('Editar Materia'), array('action' => 'edit', $materia['Materia']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Materia'), array('action' => 'delete', $materia['Materia']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $materia['Materia']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Calificaciones'), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Nota'), array('controller' => 'notas', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->

<!--<div class="related">
	<h3><?php echo __('Ciclos Relacionados');?></h3>
	<?php if (!empty($materia['Ciclo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ciclo'); ?></th>
		<th><?php echo __('FechaInicio'); ?></th>
		<th><?php echo __('FechaFinal'); ?></th>
		<th><?php echo __('PrimerCuatrimestre'); ?></th>
		<th><?php echo __('SegundoCuatrimestre'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($materia['Ciclo'] as $ciclo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ciclo['id'];?></td>
			<td><?php echo $ciclo['ciclo'];?></td>
			<td><?php echo $ciclo['fechaInicio'];?></td>
			<td><?php echo $ciclo['fechaFinal'];?></td>
			<td><?php echo $ciclo['primerCuatrimestre'];?></td>
			<td><?php echo $ciclo['segundoCuatrimestre'];?></td>
			<td><?php echo $ciclo['observaciones'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'ciclos', 'action' => 'view', $ciclo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'ciclos', 'action' => 'edit', $ciclo['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'ciclos', 'action' => 'delete', $ciclo['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $ciclo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php echo __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($materia['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('TipoInscripcion'); ?></th>
		<th><?php echo __('FechaInscripcion'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Ciclo Id'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<!--<th><?php echo __('Materia Id'); ?></th>-->
		<th><?php echo __('Empleado Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($materia['Inscripcion'] as $inscripcion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $inscripcion['id'];?></td>-->
			<td><?php echo $inscripcion['tipoInscripcion'];?></td>
			<td><?php echo $inscripcion['fechaInscripcion'];?></td>
			<td><?php echo ($this->Html->link($inscripcion['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['alumno_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['centro_id'], array('controller' => 'centros', 'action' => 'view', $inscripcion['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['curso_id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['curso_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($inscripcion['materia_id'], array('controller' => 'materias', 'action' => 'view', $inscripcion['materia_id'])));?></td>-->
			<td><?php echo ($this->Html->link($inscripcion['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['empleado_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $inscripcion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<!--<div class="related">
	<h3><?php echo __('Alumnos Relacionados');?></h3>
	<?php if (!empty($materia['Alumno'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('PrimerNombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($materia['Alumno'] as $alumno):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $alumno['id'];?></td>
			<td><?php echo $alumno['primerNombre'];?></td>
			<td><?php echo $alumno['apellido'];?></td>
			<td><?php echo $alumno['dni'];?></td>
			<td><?php echo $alumno['direccion'];?></td>
			<td><?php echo $alumno['telefono'];?></td>
			<td><?php echo $alumno['email'];?></td>
			<td><?php echo $alumno['ciudad'];?></td>
			<td><?php echo ($this->Html->link($alumno['centro_id'], array('controller' => 'centros', 'action' => 'view', $alumno['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($alumno['curso_id'], array('controller' => 'cursos', 'action' => 'view', $alumno['curso_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $alumno['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php echo __('Notas Relacionadas');?></h3>
	<?php if (!empty($materia['Nota'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Nota1Cuat1º'); ?></th>
		<th><?php echo __('Nota2Cuat1º'); ?></th>
		<th><?php echo __('PromCuat1º'); ?></th>
		<th><?php echo __('Nota1Cuat2º'); ?></th>
		<th><?php echo __('Nota2Cuat2º'); ?></th>
		<th><?php echo __('PromCuat2º'); ?></th>
		<th><?php echo __('PromTermino'); ?></th>
		<th><?php echo __('NotaDic'); ?></th>
		<th><?php echo __('NotaMar'); ?></th>
		<th><?php echo __('PromFinal'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<!--<th><?php echo __('Materia Id'); ?></th>-->
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($materia['Nota'] as $nota):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $nota['id'];?></td>-->
			<td><?php echo ($this->Html->link($nota['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $nota['alumno_id'])));?></td>
			<td><?php echo $nota['notaPrimeraCuatPrimero'];?></td>
			<td><?php echo $nota['notaSegundaCuatPrimero'];?></td>
			<td><?php echo $nota['promCuatPrimero'];?></td>
			<td><?php echo $nota['notaPrimeraCuatSegundo'];?></td>
			<td><?php echo $nota['notaSegundaCuatSegundo'];?></td>
			<td><?php echo $nota['promCuatSegundo'];?></td>
			<td><?php echo $nota['promTermino'];?></td>
			<td><?php echo $nota['notaDic'];?></td>
			<td><?php echo $nota['notaMar'];?></td>
			<td><?php echo $nota['promFinal'];?></td>
			<td><?php echo $nota['observaciones'];?></td>
			<!--<td><?php echo ($this->Html->link($nota['materia_id'], array('controller' => 'materias', 'action' => 'view', $nota['materia_id'])));?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'notas', 'action' => 'view', $nota['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'notas', 'action' => 'edit', $nota['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'notas', 'action' => 'delete', $nota['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $nota['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nota'), array('controller' => 'notas', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<!--<div class="related">
	<h3><?php echo __('Docentes Relacionados');?></h3>
	<?php if (!empty($materia['Docente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('PrimerNombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($materia['Docente'] as $docente):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $docente['id'];?></td>
			<td><?php echo $docente['primerNombre'];?></td>
			<td><?php echo $docente['apellido'];?></td>
			<td><?php echo $docente['dni'];?></td>
			<td><?php echo $docente['direccion'];?></td>
			<td><?php echo $docente['telefono'];?></td>
			<td><?php echo $docente['email'];?></td>
			<td><?php echo $docente['ciudad'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'docentes', 'action' => 'view', $docente['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'docentes', 'action' => 'edit', $docente['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'docentes', 'action' => 'delete', $docente['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $docente['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
</div>