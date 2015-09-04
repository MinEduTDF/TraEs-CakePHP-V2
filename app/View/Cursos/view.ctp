<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->


<!-- start main -->
<div class="TituloSec">Curso <?php echo ($curso['Curso']['nombre_completo_curso']); ?></div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		
  <div class="col-md-4 col-sm-6 col-xs-8">	

			<b><?php echo __('Turno: '); ?></b>
			<?php echo ($curso['Curso']['turno']); ?></p>

			<b><?php echo __('Centro: '); ?></b>
			<?php echo ($this->Html->link($curso['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $curso['Centro']['sigla']))); ?></p>

			<b><?php echo __('Aula: '); ?></b>
			<?php echo ($curso['Curso']['aulaNro']); ?></p>

            <b><?php echo __('Plazas: '); ?></b>
			<?php echo ($curso['Curso']['plazas']); ?></p>

  </div><div class="col-md-4 col-sm-6 col-xs-8">	

            <b><?php echo __('Organización de cursada: '); ?></b>
			<?php echo ($curso['Curso']['organizacion_cursada']); ?></p>

            <b><?php echo __('Titulación: '); ?></b>
			<?php echo ($this->Html->link($curso['Titulacion']['nombre'], array('controller' => 'titulacions', 'action' => 'view', $curso['Titulacion']['nombre']))); ?></p>
		  </div>
 	</div>
 </div>
</div>

<div class="col-md-4">
 <div class="unit">
 			<div class="subtitulo">Opciones</div>
			<div class="opcion"><?php echo $this->Html->link(__('Editar Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Borrar Curso'), array('action' => 'delete', $curso['Curso']['id']), null, sprintf(__('Esta seguro de borrar el curso %s?'), $curso['Curso']['division'])); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?></div>

	</div>
</div>
</div>
 <!-- end main -->

<!-- Cargos Relacionados -->
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
<!-- end Cargos Relacionados -->

<!-- Inscripciones Relacionadas -->
<div id="click_01" class="titulo_acordeon">Inscripciones Relacionadas</div>
<div id="acordeon_01">
		<div class="row">
	<?php if (!empty($curso['Inscripcion'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($curso['Inscripcion'] as $inscripcion): ?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Legajo:</b> '.$inscripcion['legajo_nro'];?><br>
			<?php echo '<b>Ciclo_Id:</b> '.($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?><br>
			<?php echo '<b>Alumno_Id:</b> '.($this->Html->link($inscripcion['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['alumno_id'])));?><br>
            <?php echo '<b>Fecha_alta:</b> '.($this->Html->formatTime($inscripcion['fecha_alta']));?><br>
			<?php echo '<b>Fecha_baja:</b> '.($this->Html->formatTime($inscripcion['fecha_baja']));?><br>
            <?php echo '<b>Fecha_egreso:</b> '.($this->Html->formatTime($inscripcion['fecha_egreso']));?><br>
            <?php echo '<b>Fecha_emisión_título:</b> '.($this->Html->formatTime($inscripcion['fecha_emision_titulo']));?><br>
            <!--<?php echo '<b>Empleado_Id:</b> '.($this->Html->link($inscripcion['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['empleado_id'])));?><br>-->
            
            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Inscripciones Relacionados -->

<!-- Materias Relacionadas -->
<div id="click_02" class="titulo_acordeon">Materias Relacionadas</div>
<div id="acordeon_02">
		<div class="row">
	<?php if (!empty($curso['Materia'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($curso['Materia'] as $materia): ?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Alia:</b> '.$materia['alia'];?><br>
			<?php echo '<b>Carga horaria en:</b> '.$materia['carga_horaria_en'];?><br>
			<?php echo '<b>Carga horaria semanal:</b> '.$materia['carga_horaria_semanal'];?><br>
            <?php echo '<b>Contenido:</b> '.$materia['contenido'];?><br>
            
            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'materias', 'action' => 'edit', $materia['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'materiass', 'action' => 'view', $materia['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Materias Relacionadas -->

<!-- Ciclos Relacionadas -->
<!--<div class="related">
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
<!-- end Ciclos Relacionadas -->