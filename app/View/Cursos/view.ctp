<!-- start main -->
 <div id="main">
 
   <h2>Cursos</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Curso'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curso['Curso']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Anio | Division | Turno: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($curso['Curso']['anio'])." | ".($curso['Curso']['division'])." | ".($curso['Curso']['turno']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Centro | Aula Nro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($curso['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $curso['Centro']['sigla'])))." | ".($curso['Curso']['aulaNro']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Organización de cursada | Plazas: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($curso['Curso']['organizacion_cursada'])." | ".($curso['Curso']['plazas']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Titulación'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($curso['Titulacion']['nombre'], array('controller' => 'titulacions', 'action' => 'view', $curso['Titulacion']['nombre'])); ?>
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
		<li><?php echo $this->Html->link(__('Editar Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Curso'), array('action' => 'delete', $curso['Curso']['id']), null, sprintf(__('Esta seguro de borrar el curso %s?'), $curso['Curso']['division'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cursos'), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Titulaciones'), array('controller' => 'titulacions', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Agregar Titulación'), array('controller' => 'titulacions', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Modalidades'), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Modalidad'), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Agregar Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
<!--<div class="related">
	<h3><?php echo __('Cargos Relacionados');?></h3>
	<?php if (!empty($curso['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Resolucion Nro'); ?></th>
		<th><?php echo __('HsCatedra'); ?></th>
		<th><?php echo __('HsReloj'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Puesto'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Creacion'); ?></th>
		<th><?php echo __('Cierre'); ?></th>
		<th><?php echo __('Alta'); ?></th>
		<th><?php echo __('Baja'); ?></th>
		<th><?php echo __('Cambio Situacion'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Cargo'] as $cargo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cargo['id'];?></td>
			<td><?php echo $cargo['nombre'];?></td>
			<td><?php echo $cargo['tipo'];?></td>
			<td><?php echo $cargo['resolucionNro'];?></td>
			<td><?php echo $cargo['hsCatedra'];?></td>
			<td><?php echo $cargo['hsReloj'];?></td>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cargos', 'action' => 'view', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cargos', 'action' => 'edit', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), null, sprintf(__('Esta seguro de borrar el cargo %s?'), $cargo['id'])); ?>
			
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php echo __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($curso['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Legajo'); ?></th>
		<th><?php echo __('Fecha_alta'); ?></th>
		<th><?php echo __('Fecha_baja'); ?></th>
		<th><?php echo __('Fecha_egreso'); ?></th>
		<th><?php echo __('Fecha_emisión_título'); ?></th>
		<th><?php echo __('Alumno_Id'); ?></th>
        <th><?php echo __('Empleado_Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Inscripcion'] as $inscripcion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $inscripcion['legajo_nro'];?></td>
			<td><?php echo $this->Html->formatTime($inscripcion['fecha_alta']);?></td>
            <td><?php echo $this->Html->formatTime($inscripcion['fecha_baja']);?></td>
            <td><?php echo $this->Html->formatTime($inscripcion['fecha_egreso']);?></td>
            <td><?php echo $this->Html->formatTime($inscripcion['fecha_emision_titulo']);?></td>
			<td><?php echo ($this->Html->link($inscripcion['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['alumno_id'])));?></td>
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
<div class="related">
	<h3><?php echo __('Materias Relacionadas');?></h3>
	<?php if (!empty($curso['Materia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Alia'); ?></th>
		<th><?php echo __('Carga horaria en'); ?></th>
		<th><?php echo __('Carga horaria semanal'); ?></th>
        <th><?php echo __('Contenido'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Materia'] as $materia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $materia['alia'];?></td>
			<td><?php echo $materia['carga_horaria_en'];?></td>
			<td><?php echo $materia['carga_horaria_semanal'];?></td>
			<td><?php echo $materia['contenido'];?></td>
            <td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'materias', 'action' => 'view', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'materias', 'action' => 'edit', $materia['id'])); ?>
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
<div class="related">
	<h3><?php echo __('Ciclos Relacionados');?></h3>
	<?php if (!empty($curso['Ciclo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ciclo'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Final'); ?></th>
		<th><?php echo __('PrimerCuatrimestre'); ?></th>
		<th><?php echo __('SegundoCuatrimestre'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Ciclo'] as $ciclo):
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
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'ciclos', 'action' => 'delete', $ciclo['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $ciclo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
