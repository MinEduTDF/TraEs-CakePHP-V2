<!-- start main -->
 <div class="TituloSec">Alumno <?php echo $alumno['Alumno']['apellido']; ?></div>
<div id="ContenidoSec">
 <div class="unit">
 <div class="row perfil">
  <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center"><img src="http://ipam.com.br/2012/fotos/image/facebook-silueta-perfil-300x203.jpg"/></div>
   <div class="col-md-4 col-sm-6 col-xs-8">
			<b><?php echo __('Id: '); ?></b>
			<?php echo $alumno['Alumno']['id']; ?></p>
			
			<b><?php echo __('PrimerNombre: '); ?></b>
			<?php echo $alumno['Alumno']['primerNombre']; ?></p>

			<b><?php echo __('Apellido: '); ?></b>

			<?php echo $alumno['Alumno']['apellido']; ?></p>

			<b><?php echo __('Dni: '); ?></b>

			<?php echo $alumno['Alumno']['dni']; ?></p>

	</div><div class="col-md-4 col-sm-6 col-xs-8">
			<b><?php echo __('Direccion: '); ?></b>

			<?php echo $alumno['Alumno']['direccion']; ?></p>
			<b><?php echo __('Telefono: '); ?></b>

			<?php echo $alumno['Alumno']['telefono']; ?></p>
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
	<h3><?php echo __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($alumno['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('TipoInscripcion'); ?></th>
		<th><?php echo __('FechaInscripcion'); ?></th>
		<!--<th><?php echo __('Alumno_id'); ?></th>-->
		<th><?php echo __('Ciclo_id'); ?></th>
		<th><?php echo __('Centro_id'); ?></th>
		<!--<th><?php echo __('Curso_id'); ?></th>-->
		<!--<th><?php echo __('Materia_id'); ?></th>-->
		<th><?php echo __('Empleado_id'); ?></th>
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
			<td><?php echo $inscripcion['tipoInscripcion'];?></td>
			<td><?php echo $this->Html->formatTime($inscripcion['fechaInscripcion']);?></td>
			<!--<td><?php echo $inscripcion['alumno_id'];?></td>-->
			<td><?php echo ($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['centro_id'], array('controller' => 'centros', 'action' => 'view', $inscripcion['centro_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($inscripcion['curso_id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['curso_id'])));?></td>-->
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
	</div>
</div>-->
<div class="related">
	<h3><?php echo __('Notas Relacionadas');?></h3>
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

