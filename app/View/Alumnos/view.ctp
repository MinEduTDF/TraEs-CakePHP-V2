<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->


<!-- start main -->
 <div class="TituloSec">Alumno <?php echo $alumno['Alumno']['apellidos']; ?></div>
<div id="ContenidoSec">
 <div class="unit">
 <div class="row perfil">
  <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center"><img src="http://ipam.com.br/2012/fotos/image/facebook-silueta-perfil-300x203.jpg"/></div>
   <div class="col-md-4 col-sm-6 col-xs-8">
			<b><?php echo __('Id: '); ?></b>
			<?php echo $alumno['Alumno']['id']; ?></p>
			
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

			<?php echo $alumno['Alumno']['email']; ?></p>

			<b><?php echo __('Ciudad: '); ?></b>

			<?php echo $alumno['Alumno']['ciudad']; ?>

		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Centro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alumno['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $alumno['Centro']['sigla'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Curso: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alumno['Curso']['division'], array('controller' => 'cursos', 'action' => 'view', $alumno['Curso']['division'])); ?>
			&nbsp;
		</dd>-->
	</dl>
	</div>
</div>
</div>
 <!-- end main -->

<!-- Familiares Relacionados -->
<div class="subtitulo">Familiares Relacionadas</div>
<div id="acordeon">
		<div class="row">
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php if (!empty($alumno['Familiar'])):?>
	<?php
		$i = 0;
		foreach ($alumno['Familiar'] as $familiar):
		?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Vinculo:</b> '.$familiar['vinculo'];?><br>
			<?php echo '<b>Nombre:</b> '.$familiar['nombre_completo'];?><br>
			<?php echo '<b>Cuil/Cuit:</b> '.$familiar['cuit_cuil'];?><br>
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
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- end Familiares Relacionados -->

<!-- Inscripciones Relacionadas -->
	<div class="subtitulo">Inscripciones Relacionadas</div>
	<div id="acordeon">
		<div class="row">
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php if (!empty($alumno['Inscripcion'])):?>
	<?php
		$i = 0;
		foreach ($alumno['Inscripcion'] as $inscripcion):
		?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Tipo de alta:</b> '.$inscripcion['tipo_alta'];;?><br>
			<?php echo '<b>Fecha de alta:</b> '.$this->Html->formatTime($inscripcion['fecha_alta']);?><br>
			<?php echo '<b>Cursa:</b> '.$inscripcion['cursa'];?><br>
            <?php echo '<b>Fecha de baja:</b> '.$this->Html->formatTime($inscripcion['fecha_baja']);?><br>
			<?php echo '<b>Tipo de baja:</b> '.$inscripcion['tipo_baja'];?><br>
            <?php echo '<b>Fecha de egreso:</b> '.$this->Html->formatTime($inscripcion['fecha_egreso']);?><br>
            <?php echo '<b>Nota:</b> '.$inscripcion['nota'];?><br>
            <?php echo '<b>Ciclo Id:</b> '.($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- end Inscripciones Relacionadas -->

<!-- Servicios Complementarios Relacionadas -->
	<div class="subtitulo">Servicios Complementarios Relacionadas</div>
	<div id="acordeon">
		<div class="row">
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php if (!empty($alumno['Servicio'])):?>
	<?php
		$i = 0;
		foreach ($alumno['Servicio'] as $servicio):
		?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Tipo:</b> '.$servicio['tipo_servicio'];?><br>
			<?php echo '<b>Estado:</b> '.$servicio['estado'];?><br>
			<?php echo '<b>Docente/Profesional a cargo:</b> '.$servicio['docente_profesional_acargo'];?><br>
            <?php echo '<b>Fecha de alta:</b> '.$this->Html->formatTime($servicio['fecha_alta']);?><br>
            <?php echo '<b>Fecha de baja:</b> '.$this->Html->formatTime($servicio['fecha_baja']);?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'servicios', 'action' => 'view', $servicio['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- end Servicios Complementarios Relacionadas -->

<!-- Calificaciones Relacionadas -->
	<div class="subtitulo">Calificaciones Relacionadas</div>
	<div id="acordeon">
		<div class="row">
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php if (!empty($alumno['Nota'])):?>
	<?php
		$i = 0;
		foreach ($alumno['Nota'] as $nota):
		?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Ciclo Id:</b> '.($this->Html->link($nota['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $nota['ciclo_id'])));?><br>
			<?php echo '<b>Materia Id:</b> '. ($this->Html->link($nota['materia_id'], array('controller' => 'materias', 'action' => 'view', $nota['materia_id'])));?><br>
			<?php echo '<b>PromCuatPrimero:</b> '.$nota['promCuatPrimero'];?><br>
            <?php echo '<b>PromCuatSegundo:</b> '.$nota['promCuatSegundo'];?><br>
            <?php echo '<b>PromTermino:</b> '.$nota['promTermino'];?><br>
			<?php echo '<b>NotaDic:</b> '.$nota['notaDic'];?><br>
			<?php echo '<b>NotaMar:</b> '.$nota['promFinal'];?><br>
			<?php echo '<b>PromFinal:</b> '.$nota['promFinal'];?><br>
			<?php echo '<b>Observaciones:</b> '.$nota['observaciones'];?><br>


            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'notas', 'action' => 'edit', $nota['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'notas', 'action' => 'view', $nota['id']), array('class' => 'btn btn-success')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- end Calificaciones Relacionadas -->

</div>
</div>
</div>

