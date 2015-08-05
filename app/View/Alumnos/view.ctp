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

<div class="related">
	<h3><?php echo __('Familiares Relacionadas');?></h3>
	<?php if (!empty($alumno['Familiar'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Vinculo'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Cuil/Cuit'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($alumno['Familiar'] as $familiar):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>	
		<tr<?php echo $class;?>>
			<td><?php echo $familiar['vinculo'];?></td>
			<td><?php echo $familiar['nombre_completo'];?></td>
			<td><?php echo $familiar['cuit_cuil'];?></td>
            <td><?php echo $familiar['telefono_nro'];?></td>
			<td><?php echo $familiar['email'];?></td>
            <td><?php echo $familiar['domicilio'];?></td>
            <td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'familiars', 'action' => 'view', $familiar['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'familiars', 'action' => 'edit', $familiar['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $inscripcion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Familiar'), array('controller' => 'familiars', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php echo __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($alumno['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Tipo de alta'); ?></th>
		<th><?php echo __('Fecha de alta'); ?></th>
		<th><?php echo __('Cursa'); ?></th>
		<th><?php echo __('Fecha de baja'); ?></th>
        <th><?php echo __('Tipo de baja'); ?></th>
        <th><?php echo __('Fecha de egreso'); ?></th>
        <th><?php echo __('Nota'); ?></th>
        <th><?php echo __('Ciclo_id'); ?></th>
		<!--<th><?php echo __('Centro_id'); ?></th>-->
		<!--<th><?php echo __('Curso_id'); ?></th>-->
		<!--<th><?php echo __('Materia_id'); ?></th>-->
		<!--<th><?php echo __('Empleado_id'); ?></th>-->
		<th class="actions"><?php echo __('Opciones');?></th>
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
			<td><?php echo $inscripcion['tipo_alta'];?></td>
			<td><?php echo $this->Html->formatTime($inscripcion['fecha_alta']);?></td>
            <td><?php echo $inscripcion['cursa'];?></td>
            <td><?php echo $this->Html->formatTime($inscripcion['fecha_baja']);?></td>
            <td><?php echo $inscripcion['tipo_baja'];?></td>
            <td><?php echo $this->Html->formatTime($inscripcion['fecha_egreso']);?></td>
			<td><?php echo $inscripcion['nota'];?></td>
            <!--<td><?php echo $inscripcion['alumno_id'];?></td>-->
			<td><?php echo ($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($inscripcion['centro_id'], array('controller' => 'centros', 'action' => 'view', $inscripcion['centro_id'])));?></td>-->
			<!--<td><?php echo ($this->Html->link($inscripcion['curso_id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['curso_id'])));?></td>-->
			<!--<td><?php echo ($this->Html->link($inscripcion['materia_id'], array('controller' => 'materias', 'action' => 'view', $inscripcion['materia_id'])));?></td>-->
			<!--<td><?php echo ($this->Html->link($inscripcion['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['empleado_id'])));?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<!--<?php //echo $this->Html->link(__('Borrar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $inscripcion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php echo __('Integraciones Relacionadas');?></h3>
	<?php if (!empty($alumno['Integracion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Centro integrador'); ?></th>
        <th><?php echo __('Docente integrador'); ?></th>
		<th><?php echo __('Fecha de inicio'); ?></th>
        <th><?php echo __('Fecha de fin'); ?></th>
        <th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($alumno['Integracion'] as $integracion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>	
		<tr<?php echo $class;?>>
			<td><?php echo ($this->Html->link($integracion['centro_id'], array('controller' => 'centros', 'action' => 'view', $integracion['centro_id'])));?></td>
			<td><?php echo $integracion['docente_nombre_completo'];?></td>
            <td><?php echo $this->Html->formatTime($integracion['fecha_inicio']);?></td>
            <td><?php echo $this->Html->formatTime($integracion['fecha_fin']);?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'integracions', 'action' => 'view', $integracion['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'integracions', 'action' => 'edit', $integracion['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'integracions', 'action' => 'delete', $integracion['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $integracion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Integracion'), array('controller' => 'integracions', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php echo __('Servicios Complementarios Relacionadas');?></h3>
	<?php if (!empty($alumno['Servicio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Tipo'); ?></th>
        <th><?php echo __('Estado'); ?></th>
        <th><?php echo __('Docente/Profesional a cargo'); ?></th>
		<th><?php echo __('Fecha de alta'); ?></th>
        <th><?php echo __('Fecha de baja'); ?></th>
        <th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($alumno['Servicio'] as $servicio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>	
		<tr<?php echo $class;?>>
			<td><?php echo $servicio['tipo_servicio'];?></td>
			<td><?php echo $servicio['estado'];?></td>
            <td><?php echo $servicio['docente_profesional_acargo'];?></td>
            <td><?php echo $this->Html->formatTime($servicio['fecha_alta']);?></td>
            <td><?php echo $this->Html->formatTime($servicio['fecha_baja']);?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'servicios', 'action' => 'view', $servicio['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'servicios', 'action' => 'delete', $servicio['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $servicio['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Servicio'), array('controller' => 'servicios', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>

<div class="related">
	<h3><?php echo __('calificaciones Relacionadas');?></h3>
	<?php if (!empty($alumno['Nota'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Ciclo Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<!--<th><?php echo __('NotaPrimeraCuatPrimero'); ?></th>-->
		<!--<th><?php echo __('NotaSegundaCuatPrimero'); ?></th>-->
		<th><?php echo __('PromCuatPrimero'); ?></th>
		<!--<th><?php echo __('NotaPrimeraCuatSegundo'); ?></th>-->
		<!--<th><?php echo __('NotaSegundaCuatSegundo'); ?></th>-->
		<th><?php echo __('PromCuatSegundo'); ?></th>
		<th><?php echo __('PromTermino'); ?></th>
		<th><?php echo __('NotaDic'); ?></th>
		<th><?php echo __('NotaMar'); ?></th>
		<th><?php echo __('PromFinal'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<!--<th><?php echo __('Alumno Id'); ?></th>-->
		<th class="actions"><?php echo __('Opciones');?></th>
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
</div>
</div>

