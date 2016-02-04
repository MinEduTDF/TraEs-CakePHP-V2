<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<!-- start main -->
<div class="TituloSec"><?php echo ($centro['Centro']['sigla']); ?></div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		
  	<!--<div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center">
  		<img src="http://ipam.com.br/2012/fotos/image/facebook-silueta-perfil-300x203.jpg"/>
  	</div>-->

   <div class="col-md-8 col-sm-6 col-xs-8">	
			<!--<b><?php echo __('Nombre: '); ?></b>
			<?php echo ($centro['Centro']['sigla']); ?></p>-->

			<b><?php echo __('Director: '); ?></b>
    		<?php echo $centro['Centro']['equipoDirectivo']; ?></p>

			<b><?php echo __('Ciudad: '); ?></b>

			<?php echo $centro['Centro']['ciudad']; ?></p>

            <b><?php echo __('Domicilio: '); ?></b>

			<?php echo $centro['Centro']['direccion']; ?></p>

   </div><div class="col-md-8 col-sm-6 col-xs-8">
						
            <b><?php echo __('Telefono: '); ?></b>

			<?php echo $centro['Centro']['telefono']; ?></p>
            
            <b><?php echo __('Email: '); ?></b>

			<?php echo ($this->Html->link($centro['Centro']['email'],'mailto:'.$centro['Centro']['email'])); ?></p>
            
            <b><?php echo __('URL: '); ?></b>

			<?php echo ($this->Html->link($centro['Centro']['url'],'href:'.$centro['Centro']['url'])); ?></p>
          </div>
 	</div>
 </div>
</div>

<!-- star sidebar -->
<div class="col-md-4">
 <div class="unit">
 		<div class="subtitulo">Opciones</div>
		<!--<div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $centro['Centro']['id'])); ?></div>
		<div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $centro['Centro']['id']), null, sprintf(__('Esta seguro de borrar el centro %s?'), $centro['Centro']['sigla'])); ?></div>-->
		<div class="opcion"><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?></div>
		<!--<div class="opcion"><?php echo $this->Html->link(__('Exportar a PDF'), array('action' => 'view', $centro['Centro']['id'], 'ext' => 'pdf')); ?></div>
        <div class="opcion"><?php echo $this->Html->link(__('Listar Titulaciones'), array('controller' => 'titulacions', 'action' => 'index')); ?></div>	
        <div class="opcion"><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?></div>	
		<div class="opcion"><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?></div>
		<div class="opcion"><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?></div>
        <div class="opcion"><?php echo $this->Html->link(__('Listar Inasistencias'), array('controller' => 'inasistencias', 'action' => 'index')); ?></div>-->
  </div>
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

<!-- Titulaciones Relacionadas -->
<!--<div id="click_01" class="titulo_acordeon">Titulaciones Relacionadas</div>
<div id="acordeon_01">
		<div class="row">
  			<div class="col-xs-8 col-sm-6 col-md-8">
	<?php if (!empty($centro['Titulacion'])):?>
	<?php foreach ($centro['Titulacion'] as $titulacion): ?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Nombre:</b> '.$titulacion['nombre'];?><br>
			<?php echo '<b>Orientación:</b> '.$titulacion['orientacion'];?><br>
            <?php echo '<b>Organización del plan:</b> '.$titulacion['organizacion_plan'];?><br>
			<?php echo '<b>Plan de estudio:</b> '.$titulacion['plan_estudio'];?><br>
			<?php echo '<b>Organización de la cursada:</b> '.$titulacion['organizacion_cursada'];?><br>
            <?php echo '<b>Forma del dictado:</b> '.$titulacion['forma_dictado'];?><br>

        <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'titulacions', 'action' => 'edit', $titulacion['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'titulacions', 'action' => 'view', $titulacion['id']), array('class' => 'btn btn-success')); ?>
			<?php echo $this->Html->link(__('Borrar'), array('controller' => 'titulacions', 'action' => 'delete', $titulacion['id']), array('class' => 'btn btn-danger')); ?>

			</div>
		</div>
	</div>
		<?php endforeach; ?>
		<?php else: echo '<div class="unit">No se encuentran relaciones</div>'; ?>
		<?php endif; ?>
		</div>
	</div>
</div>-->
<!-- end Titulaciones Relacionadas -->

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



