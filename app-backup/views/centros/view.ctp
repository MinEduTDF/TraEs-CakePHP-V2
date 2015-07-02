<!-- start main -->
 <div id="main">
 </br>
 <h2>Centro</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Centro', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <!--<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nombre : '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Sigla : '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['sigla']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('FechaFundacion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($centro['Centro']['fechaFundacion']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('EquipoDirectivo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['equipoDirectivo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Direccion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['direccion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Ciudad: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['ciudad']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Telefono: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['telefono']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Email: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($centro['Centro']['email'],'mailto:'.$centro['Centro']['email']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Url: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($centro['Centro']['url'],'href:'.$centro['Centro']['url']); ?>
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
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Centro', true), array('action' => 'edit', $centro['Centro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Imprimir Centro', true), array('action' => 'imprimir', $centro['Centro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Cancelar Centro', true), array('action' => 'cancel', $centro['Centro']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Centro', true), array('action' => 'delete', $centro['Centro']['id']), null, sprintf(__('Esta seguro de borrar el centro %s?', true), $centro['Centro']['sigla'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nuevo Centro', true), array('action' => 'add')); ?> </li>--> 
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>--> 
		<!--<li><?php echo $this->Html->link(__('New Alumno', true), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripcions', true), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Modalidades', true), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Modalidad', true), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Orientaciones', true), array('controller' => 'orientacions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Orientacion', true), array('controller' => 'orientacions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php __('Cargos Relacionados');?></h3>
	<?php if (!empty($centro['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Resolucion Nro'); ?></th>
		<th><?php __('Hs Catedra'); ?></th>
		<th><?php __('Hs Reloj'); ?></th>
		<th><?php __('Area'); ?></th>
		<th><?php __('Puesto'); ?></th>
		<!--<th><?php __('Descripcion'); ?></th>-->
		<th><?php __('Creacion'); ?></th>
		<th><?php __('Cierre'); ?></th>
		<th><?php __('Alta'); ?></th>
		<th><?php __('Baja'); ?></th>
		<!--<th><?php __('Cambio Situacion'); ?></th>-->
		<th><?php __('Estado'); ?></th>
		<!--<th><?php __('Centro Id'); ?></th>-->
		<th><?php __('Curso Id'); ?></th>
		<th><?php __('Materia Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Cargo'] as $cargo):
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
			<!--<td><?php echo $cargo['descricpion'];?></td>-->
			<td><?php echo $cargo['fechaCreacion'];?></td>
			<td><?php echo $cargo['fechaCierre'];?></td>
			<td><?php echo $cargo['fechaAltaPersona'];?></td>
			<td><?php echo $cargo['fechaBajaPersona'];?></td>
			<!--<td><?php echo $cargo['fechaCambioSituacionPersona'];?></td>-->
		    <td><?php echo $cargo['estado'];?></td>
			<!--<td><?php echo ($this->Html->link($cargo['centro_id'], array('controller' => 'centros', 'action' => 'view', $cargo['centro_id'])));?></td>-->
			<td><?php echo ($this->Html->link($cargo['curso_id'], array('controller' => 'centros', 'action' => 'view', $cargo['curso_id'])));?></td>
			<td><?php echo ($this->Html->link($cargo['materia_id'], array('controller' => 'centros', 'action' => 'view', $cargo['materia_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cargos', 'action' => 'view', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cargos', 'action' => 'edit', $cargo['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Cargo', true), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Cursos Relacionados');?></h3>
	<?php if (!empty($centro['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Anio'); ?></th>
		<th><?php __('Division'); ?></th>
		<th><?php __('Turno'); ?></th>
		<th><?php __('AulaNro'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<!--<th><?php __('Centro Id'); ?></th>-->
		<th><?php __('Orientacion Id'); ?></th>
		<th><?php __('Modalidad Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Curso'] as $curso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curso['id'];?></td>
			<td><?php echo $curso['anio'];?></td>
			<td><?php echo $curso['division'];?></td>
			<td><?php echo $curso['turno'];?></td>
			<td><?php echo $curso['aulaNro'];?></td>
			<td><?php echo $curso['observacion'];?></td>
			<!--<td><?php echo ($this->Html->link($curso['centro_id'], array('controller' => 'centros', 'action' => 'view', $curso['centro_id'])));?></td>-->
			<td><?php echo ($this->Html->link($curso['orientacion_id'], array('controller' => 'orientacions', 'action' => 'view', $curso['orientacion_id'])));?></td>
			<td><?php echo ($this->Html->link($curso['modalidad_id'], array('controller' => 'modalidads', 'action' => 'view', $curso['modalidad_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curso['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Curso', true), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Modalidades Relacionadas');?></h3>
	<?php if (!empty($centro['Modalidad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<!--<th><?php __('Centro Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Modalidad'] as $modalidad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $modalidad['id'];?></td>
			<td><?php echo $modalidad['nombre'];?></td>
			<td><?php echo $modalidad['descripcion'];?></td>
			<!--<td><?php echo $modalidad['centro_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'modalidads', 'action' => 'view', $modalidad['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'modalidads', 'action' => 'edit', $modalidad['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'modalidads', 'action' => 'delete', $modalidad['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $modalidad['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Modalidad', true), array('controller' => 'modalidads', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Orientaciones Relacionadas');?></h3>
	<?php if (!empty($centro['Orientacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<!--<th><?php __('Centro Id'); ?></th>-->
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Orientacion'] as $orientacion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $orientacion['id'];?></td>
			<td><?php echo $orientacion['nombre'];?></td>
			<td><?php echo $orientacion['descripcion'];?></td>
			<!--<td><?php echo $orientacion['centro_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'orientacions', 'action' => 'view', $orientacion['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'orientacions', 'action' => 'edit', $orientacion['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'orientacions', 'action' => 'delete', $orientacion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $orientacion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Orientacion', true), array('controller' => 'orientacions', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($centro['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Alumno Id'); ?></th>
		<th><?php __('Ciclo Id'); ?></th>
		<!--<th><?php __('Centro Id'); ?></th>-->
		<th><?php __('Curso Id'); ?></th>
		<!--<th><?php __('Materia Id'); ?></th>-->
		<th><?php __('Empleado Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Inscripcion'] as $inscripcion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $inscripcion['id'];?></td>-->
			<td><?php echo $inscripcion['tipoInscripcion'];?></td>
			<td><?php echo $this->Html->formatTime($inscripcion['fechaInscripcion']);?></td>
			<td><?php echo ($this->Html->link($inscripcion['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['alumno_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($inscripcion['centro_id'], array('controller' => 'centros', 'action' => 'view', $inscripcion['centro_id'])));?></td>-->
			<td><?php echo ($this->Html->link($inscripcion['curso_id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['curso_id'])));?></td>
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
			<li><?php echo $this->Html->link(__('Nueva Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<!--<div class="related">
	<h3><?php __('Alumnos Relacionados');?></h3>
	<?php if (!empty($centro['Alumno'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('PrimerNombre'); ?></th>
		<th><?php __('Apellido'); ?></th>
		<th><?php __('Dni'); ?></th>
		<th><?php __('Direccion'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Ciudad'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Curso Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Alumno'] as $alumno):
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
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $alumno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Alumno', true), array('controller' => 'alumnos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($centro['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('NombreUsuario'); ?></th>
		<th><?php __('Clave'); ?></th>
		<th><?php __('Area'); ?></th>
		<th><?php __('Puesto'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Empleado Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Usuario'] as $usuario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usuario['id'];?></td>
			<td><?php echo $usuario['nombreUsuario'];?></td>
			<td><?php echo $usuario['clave'];?></td>
			<td><?php echo $usuario['area'];?></td>
			<td><?php echo $usuario['puesto'];?></td>
			<td><?php echo $usuario['centro_id'];?></td>
			<td><?php echo $usuario['empleado_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
-->
<div class="related">
	<h3><?php __('Empleados Relacionados');?></h3>
	<?php if (!empty($centro['Empleado'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Dni'); ?></th>
		<th><?php __('Apellido'); ?></th>
		<th><?php __('PrimerNombre'); ?></th>
		<th><?php __('Direccion'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Ciudad'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Empleado'] as $empleado):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $empleado['id'];?></td>
			<td><?php echo $empleado['dni'];?></td>
			<td><?php echo $empleado['apellido'];?></td>
			<td><?php echo $empleado['primerNombre'];?></td>
			<td><?php echo $empleado['direccion'];?></td>
			<td><?php echo $empleado['telefono'];?></td>
			<td><?php echo $empleado['email'];?></td>
			<td><?php echo $empleado['ciudad'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'empleados', 'action' => 'view', $empleado['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'empleados', 'action' => 'edit', $empleado['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'empleados', 'action' => 'delete', $empleado['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $empleado['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Empleado', true), array('controller' => 'empleados', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
