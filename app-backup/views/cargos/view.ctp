<!-- start main -->
 <div id="main">
 </br>
 <h2>Cargo</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Cargo', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <!--<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nombre: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Tipo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('ResolucionNro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['resolucionNro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('HsCatedra'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['hsCatedra']; ?>
			&nbsp;
		</dd>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('HsReloj'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['hsReloj']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Area: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['area']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Puesto: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['puesto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Descripcion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargo['Cargo']['descricpion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('FechaCreacion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($cargo['Cargo']['fechaCreacion']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('FechaCierre: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($cargo['Cargo']['fechaCierre']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('FechaAltaPersona: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($cargo['Cargo']['fechaAltaPersona']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('FechaBajaPersona: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($cargo['Cargo']['fechaBajaPersona']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('fechaCambioSituacionPersona: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->formatTime($cargo['Cargo']['fechaCambioSituacionPersona']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Estado: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cargo['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cargo['Estado']['nombre'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Centro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cargo['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $cargo['Centro']['sigla'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Curso: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cargo['Curso']['division'], array('controller' => 'cursos', 'action' => 'view', $cargo['Curso']['division'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Materia: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cargo['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $cargo['Materia']['alia'])); ?>
			&nbsp;
		</dd>
	</dl>
 </br>
 </div>
 <!-- end main -->
 <!-- start sidebar -->
 <div id="sidebar">
		
		<div id="invoice-stats">
   		
        </div>
  <div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Cargo', true), array('action' => 'edit', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Enviar Cargo PDF', true), array('action' => 'sendPDF', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Cancelar Cargo', true), array('action' => 'cancel', $cargo['Cargo']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Cargo', true), array('action' => 'delete', $cargo['Cargo']['id']), null, sprintf(__('Esta seguro de borrar el cargo %s?', true), $cargo['Cargo']['nombre'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Licencias', true), array('controller' => 'licencias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Ciclos', true), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Ciclo', true), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Horarios', true), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Horario', true), array('controller' => 'horarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Estados', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php __('Ciclos Relacionados');?></h3>
	<?php if (!empty($cargo['Ciclo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Ciclo'); ?></th>
		<th><?php __('Inicio'); ?></th>
		<th><?php __('Final'); ?></th>
		<th><?php __('PrimerCuatrimestre'); ?></th>
		<th><?php __('SegundoCuatrimestre'); ?></th>
		<th><?php __('Observaciones'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cargo['Ciclo'] as $ciclo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ciclo['id'];?></td>
			<td><?php echo $ciclo['ciclo'];?></td>
			<td><?php echo $this->Html->formatTime($ciclo['fechaInicio']);?></td>
			<td><?php echo $this->Html->formatTime($ciclo['fechaFinal']);?></td>
			<td><?php echo $this->Html->formatTime($ciclo['primerCuatrimestre']);?></td>
			<td><?php echo $this->Html->formatTime($ciclo['segundoCuatrimestre']);?></td>
			<td><?php echo $ciclo['observaciones'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'ciclos', 'action' => 'view', $ciclo['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'ciclos', 'action' => 'edit', $ciclo['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'ciclos', 'action' => 'delete', $ciclo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciclo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Ciclo', true), array('controller' => 'ciclos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Horarios Relacionados');?></h3>
	<?php if (!empty($cargo['Horario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Creacion'); ?></th>
		<th><?php __('Dia'); ?></th>
		<th><?php __('Inicio'); ?></th>
		<th><?php __('Fin'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cargo['Horario'] as $horario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $horario['id'];?></td>
			<td><?php echo $this->Html->formatTime($horario['fechaCreacion']);?></td>
			<td><?php echo $horario['dia'];?></td>
			<td><?php echo $horario['horaInicio'];?></td>
			<td><?php echo $horario['horaFin'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'horarios', 'action' => 'view', $horario['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'horarios', 'action' => 'edit', $horario['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'horarios', 'action' => 'delete', $horario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $horario['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Horario', true), array('controller' => 'horarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->
<div class="related">
	<h3><?php __('Licencias Relacionados');?></h3>
	<?php if (!empty($cargo['Licencia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Articulo'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Desde'); ?></th>
		<th><?php __('Hasta'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<th><?php __('Docente Id'); ?></th>
		<th><?php __('Empleado Id'); ?></th>
		<!--<th><?php __('Cargo Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cargo['Licencia'] as $licencia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $licencia['id'];?></td>
			<td><?php echo $licencia['articulo'];?></td>
			<td><?php echo $licencia['descripcion'];?></td>
			<td><?php echo $this->Html->formatTime($licencia['fechaDesde']);?></td>
			<td><?php echo $this->Html->formatTime($licencia['fechaHasta']);?></td>
			<td><?php echo $licencia['observacion'];?></td>
			<td><?php echo ($this->Html->link($licencia['docente_id'], array('controller' => 'docentes', 'action' => 'view', $licencia['docente_id'])));?></td>
			<td><?php echo ($this->Html->link($licencia['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $licencia['empleado_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($licencia['cargo_id'], array('controller' => 'cargos', 'action' => 'view', $licencia['cargo_id'])));?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'licencias', 'action' => 'view', $licencia['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'licencias', 'action' => 'edit', $licencia['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'licencias', 'action' => 'delete', $licencia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $licencia['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Licencia', true), array('controller' => 'licencias', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Docentes Relacionados');?></h3>
	<?php if (!empty($cargo['Docente'])):?>
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
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cargo['Docente'] as $docente):
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
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'docentes', 'action' => 'view', $docente['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'docentes', 'action' => 'edit', $docente['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'docentes', 'action' => 'delete', $docente['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docente['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Docente', true), array('controller' => 'docentes', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Empleados Relacionados');?></h3>
	<?php if (!empty($cargo['Empleado'])):?>
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
		foreach ($cargo['Empleado'] as $empleado):
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

