<!-- start main -->
 <div id="main">
 </br>
 <h2>Centro</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Centro'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <!--<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nombre | Sigla | Fecha de fundación: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($centro['Centro']['nombre'])." | ".($centro['Centro']['sigla'])." | ".($this->Html->formatTime($centro['Centro']['fechaFundacion'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Director: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centro['Centro']['equipoDirectivo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Ciudad | Domicilio | Teléfono | Email | URL: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($centro['Centro']['ciudad'])." | ".($centro['Centro']['direccion'])." | ".($centro['Centro']['telefono'])." | ".($this->Html->link($centro['Centro']['email'],'mailto:'.$centro['Centro']['email']))." | ".($this->Html->link($centro['Centro']['url'],'href:'.$centro['Centro']['url'])); ?>
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
		<li><?php echo $this->Html->link(__('Editar Centro'), array('action' => 'edit', $centro['Centro']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Imprimir Centro'), array('action' => 'imprimir', $centro['Centro']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Cancelar Centro'), array('action' => 'cancel', $centro['Centro']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Borrar Centro'), array('action' => 'delete', $centro['Centro']['id']), null, sprintf(__('Esta seguro de borrar el centro %s?'), $centro['Centro']['sigla'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nuevo Centro'), array('action' => 'add')); ?> </li>--> 
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li> 
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Modalidades'), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Modalidad'), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Titulaciones'), array('controller' => 'orientacions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Orientacion'), array('controller' => 'orientacions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
<!--<div class="related">
	<h3><?php echo __('Cargos Relacionados');?></h3>
	<?php if (!empty($centro['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Resolucion Nro'); ?></th>
		<th><?php echo __('Hs Catedra'); ?></th>
		<th><?php echo __('Hs Reloj'); ?></th>
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
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $cargo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Cargo'), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<!--<div class="related">
	<h3><?php echo __('Cursos Relacionados');?></h3>
	<?php if (!empty($centro['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Anio'); ?></th>
		<th><?php echo __('Division'); ?></th>
		<th><?php echo __('Turno'); ?></th>
		<th><?php echo __('AulaNro'); ?></th>
		<th><?php echo __('plazas'); ?></th>
		<th><?php echo __('organizacion_cursada'); ?></th>
        <th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Titulacion Id'); ?></th>
		<th><?php echo __('Modalidad Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
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
			<td><?php echo $curso['plazas'];?></td>
            <td><?php echo $curso['organizacion_cursada'];?></td>
			<td><?php echo ($this->Html->link($curso['centro_id'], array('controller' => 'centros', 'action' => 'view', $curso['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($curso['titulacion_id'], array('controller' => 'titulacions', 'action' => 'view', $curso['titulacion_id'])));?></td>
			<td><?php echo ($this->Html->link($curso['modalidad_id'], array('controller' => 'modalidads', 'action' => 'view', $curso['modalidad_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $curso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Curso'), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<!--<div class="related">
	<h3><?php echo __('Modalidades Relacionadas');?></h3>
	<?php if (!empty($centro['Modalidad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
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
			<td><?php echo $modalidad['centro_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'modalidads', 'action' => 'view', $modalidad['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'modalidads', 'action' => 'edit', $modalidad['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'modalidads', 'action' => 'delete', $modalidad['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $modalidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Modalidad'), array('controller' => 'modalidads', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php echo __('Titulaciones Relacionadas');?></h3>
	<?php if (!empty($centro['Orientacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<!--<th><?php echo __('Centro Id'); ?></th>-->
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($centro['Titulacion'] as $titulacion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $titulacion['id'];?></td>
			<td><?php echo $titulacion['nombre'];?></td>
			<td><?php echo $titulacion['descripcion'];?></td>
			<!--<td><?php echo $titulacion['centro_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'titulacions', 'action' => 'view', $titulacion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'titulacions', 'action' => 'edit', $titulacion['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'titulacions', 'action' => 'delete', $titulacion['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $titulacion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Titulacion'), array('controller' => 'titulacions', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<!--<div class="related">
	<h3><?php echo __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($centro['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Ciclo Id'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
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
			<td><?php echo $inscripcion['id'];?></td>
			<td><?php echo $inscripcion['tipoInscripcion'];?></td>
			<td><?php echo $this->Html->formatTime($inscripcion['fechaInscripcion']);?></td>
			<td><?php echo ($this->Html->link($inscripcion['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['alumno_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['centro_id'], array('controller' => 'centros', 'action' => 'view', $inscripcion['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['curso_id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['curso_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['materia_id'], array('controller' => 'materias', 'action' => 'view', $inscripcion['materia_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['empleado_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $inscripcion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<!--<div class="related">
	<h3><?php echo __('Alumnos Relacionados');?></h3>
	<?php if (!empty($centro['Alumno'])):?>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $alumno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Alumno'), array('controller' => 'alumnos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios');?></h3>
	<?php if (!empty($centro['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('NombreUsuario'); ?></th>
		<th><?php echo __('Clave'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Puesto'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Empleados Relacionados');?></h3>
	<?php if (!empty($centro['Empleado'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('PrimerNombre'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'empleados', 'action' => 'view', $empleado['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'empleados', 'action' => 'edit', $empleado['id'])); ?>
				<?php echo $this->Html->link(__('Borrar'), array('controller' => 'empleados', 'action' => 'delete', $empleado['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $empleado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('controller' => 'empleados', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
