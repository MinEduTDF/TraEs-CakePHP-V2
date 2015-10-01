<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->


<!-- start main -->
<div class="TituloSec"><?php echo ($alumno['Alumno']['apellidos']).' '.($alumno['Alumno']['nombres']); ?></div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		
  <div class="col-md-4 col-sm-6 col-xs-8">	
			<b><?php echo __('Nombre: '); ?></b>
			<?php echo $alumno['Alumno']['nombres']; ?></p>

			<b><?php echo __('Apellido: '); ?></b>
			<?php echo $alumno['Alumno']['apellidos']; ?></p>

			<b><?php echo __('Dni: '); ?></b>
			<?php echo $alumno['Alumno']['documento_nro']; ?></p>

	</div><div class="col-md-4 col-sm-6 col-xs-8">

			<b><?php echo __('Direccion: '); ?></b>
			<?php echo $alumno['Alumno']['calle_nombre'].' N° '.$alumno['Alumno']['calle_nro']; ?></p>

			<b><?php echo __('Telefono: '); ?></b>
			<?php echo $alumno['Alumno']['telefono_nro']; ?></p>
			
            <b><?php echo __('Email: '); ?></b>
			<?php echo ($this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email'])); ?></p>
		  </div>
 	</div>
 </div>
</div>

<div class="col-md-4">
 <div class="unit">
 			<div class="subtitulo">Opciones</div>
			<div class="opcion"><?php echo $this->Html->link(__('Editar Alumno'), array('action' => 'edit', $alumno['Alumno']['id'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Agregar Familiar'), array('controller' => 'familiars', 'action' => 'add')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Agregar Integracion'), array('controller' => 'integracions', 'action' => 'add')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Agregar Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Agregar Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Agregar Calificación'), array('controller' => 'notas', 'action' => 'add')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Agregar Inasistencia'), array('controller' => 'inasistencias', 'action' => 'add')); ?></div>

	</div>
</div>
</div>
 <!-- end main -->


<!-- Familiares Relacionados -->
<div id="click_01" class="titulo_acordeon">Familiares Relacionadas</div>
<div id="acordeon_01">
		<div class="row">
	<?php if (!empty($alumno['Familiar'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($alumno['Familiar'] as $familiar): ?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Vinculo:</b> '.$familiar['vinculo'];?><br>
			<?php echo '<b>Nombre:</b> '.$familiar['nombre_completo'];?><br>
			<!--<?php echo '<b>Cuil/Cuit:</b> '.$familiar['cuit_cuil'];?><br>-->
            <?php echo '<b>Telefono:</b> '.$familiar['telefono_nro'];?><br>
			<?php echo '<b>Email:</b> '.$familiar['email'];?><br>
            <?php echo '<b>Domicilio:</b> '.$familiar['domicilio'];?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'familiars', 'action' => 'edit', $familiar['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'familiars', 'action' => 'view', $familiar['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Familiares Relacionados -->

<!-- Inscripciones Relacionadas -->
	<div id="click_02" class="titulo_acordeon">Inscripciones Relacionadas</div>
	<div id="acordeon_02">
		<div class="row">
			<?php if (!empty($alumno['Inscripcion'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($alumno['Inscripcion'] as $inscripcion):	?>
	<div class="col-md-6">
		<div class="unit">
			<!--<?php echo '<b>Ciclo id:</b> '.($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?><br>-->
			<?php echo '<b>Tipo de alta:</b> '.$inscripcion['tipo_alta'];?><br>
			<?php echo '<b>Fecha de alta:</b> '.$this->Html->formatTime($inscripcion['fecha_alta']);?><br>
			<!--<?php echo '<b>Cursa:</b> '.$inscripcion['cursa'];?><br>-->
            <?php echo '<b>Fecha de baja:</b> '.$this->Html->formatTime($inscripcion['fecha_baja']);?><br>
			<?php echo '<b>Tipo de baja:</b> '.$inscripcion['tipo_baja'];?><br>
            <?php echo '<b>Fecha de egreso:</b> '.$this->Html->formatTime($inscripcion['fecha_egreso']);?><br>
            <!--<?php echo '<b>Nota:</b> '.$inscripcion['nota'];?><br>-->

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
<!-- end Inscripciones Relacionadas -->

<!-- Integraciones Relacionadas -->
	<div id="click_03" class="titulo_acordeon">Integraciones Relacionadas</div>
	<div id="acordeon_03">
		<div class="row">
		<?php if (!empty($alumno['Integracion'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($alumno['Integracion'] as $integracion):	?>
	<div class="col-md-6">
		<div class="unit">
			<!--<?php echo '<b>Ciclo ID:</b> '.($this->Html->link($integracion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $integracion['ciclo_id'])));?><br>-->
			<?php echo '<b>Centro integrador:</b> '.($this->Html->link($integracion['centro_id'], array('controller' => 'centros', 'action' => 'view', $integracion['centro_id'])));?><br>
			<?php echo '<b>Docente integrador:</b> '.$integracion['docente_nombre_completo'];?><br>
			<?php echo '<b>Fecha de inicio:</b> '.$this->Html->formatTime($integracion['fecha_inicio']);?><br>
            <?php echo '<b>Fecha de fin:</b> '.$this->Html->formatTime($integracion['fecha_fin']);?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'integracions', 'action' => 'edit', $integracion['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'integracions', 'action' => 'view', $integracion['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Integraciones Relacionadas -->


<!-- Servicios Complementarios Relacionadas -->
	<div id="click_04" class="titulo_acordeon">Servicios Complementarios Relacionadas</div>
	<div id="acordeon_04">
		<div class="row">
			<?php if (!empty($alumno['Servicio'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($alumno['Servicio'] as $servicio): ?>
	<div class="col-md-6">
		<div class="unit">
			<!--<?php echo '<b>Ciclo ID:</b> '.($this->Html->link($servicio['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $servicio['ciclo_id'])));?><br>-->
			<?php echo '<b>Tipo:</b> '.$servicio['tipo_servicio'];?><br>
			<!--<?php echo '<b>Estado:</b> '.$servicio['estado'];?><br>-->
			<!--<?php echo '<b>Docente/Profesional a cargo:</b> '.$servicio['docente_profesional_acargo'];?><br>-->
            <?php echo '<b>Fecha de alta:</b> '.$this->Html->formatTime($servicio['fecha_alta']);?><br>
            <?php echo '<b>Fecha de baja:</b> '.$this->Html->formatTime($servicio['fecha_baja']);?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'servicios', 'action' => 'view', $servicio['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Servicios Complementarios Relacionadas -->

<!-- Inasistencias Relacionadas -->
	<div id="click_06" class="titulo_acordeon">Inasistencias Relacionadas</div>
	<div id="acordeon_06">
		<div class="row">
		<?php if (!empty($alumno['Inasistencia'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($alumno['Inasistencia'] as $inasistencia): ?>
	<div class="col-md-6">
		<div class="unit">
			<!--<?php echo '<b>Ciclo Id:</b> '.($this->Html->link($inasistencia['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inasistencia['ciclo_id'])));?><br>-->
			<?php echo '<b>Tipo:</b> '. $inasistencia['tipo'];?><br>
			<?php echo '<b>Causa:</b> '.$inasistencia['causa'];?><br>
            <?php echo '<b>Justificado:</b> '.$inasistencia['justificado'];?><br>
            <?php echo '<b>Fecha:</b> '.$this->Html->formatTime($inasistencia['creado']);?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'inasistencias', 'action' => 'edit', $inasistencia['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'inasistencias', 'action' => 'view', $inasistencia['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Inasistencias Relacionadas -->

<!-- Calificaciones Relacionadas -->
	<div id="click_05" class="titulo_acordeon">Calificaciones Relacionadas</div>
	<div id="acordeon_05">
		<div class="row">
		<?php if (!empty($alumno['Nota'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($alumno['Nota'] as $nota): ?>
	<div class="col-md-6">
		<div class="unit">
			<!--<?php echo '<b>Ciclo Id:</b> '.($this->Html->link($nota['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $nota['ciclo_id'])));?><br>-->
			<?php echo '<b>Materia Id:</b> '. ($this->Html->link($nota['materia_id'], array('controller' => 'materias', 'action' => 'view', $nota['materia_id'])));?><br>
			<?php echo '<b>Promedio primer período:</b> '.$nota['promedio_primer_periodo'];?><br>
            <?php echo '<b>Promedio segundo período:</b> '.$nota['promedio_segundo_periodo'];?><br>
            <?php echo '<b>Promedio tercer período:</b> '.$nota['promedio_tercer_periodo'];?><br>

            <?php echo '<b>Promedio a término:</b> '.$nota['promedio_a_termino'];?><br>
			<?php echo '<b>Nota en diciembre:</b> '.$nota['nota_en_diciembre'];?><br>
			<?php echo '<b>Nota en marzo:</b> '.$nota['nota_en_marzo'];?><br>
			<?php echo '<b>Promedio final:</b> '.$nota['promedio_final'];?><br>
			<!--<?php echo '<b>Observaciones:</b> '.$nota['observaciones'];?><br>-->


            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'notas', 'action' => 'edit', $nota['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'notas', 'action' => 'view', $nota['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Calificaciones Relacionadas -->
