<!-- start main -->
 <div id="main">
 </br>
 <h2>Empleados</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Empleado', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Id'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Dni'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['dni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Apellido'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('PrimerNombre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['primerNombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Direccion'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['direccion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Telefono'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['telefono']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Email'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Ciudad'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $empleado['Empleado']['ciudad']; ?>
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
		<li><?php echo $this->Html->link(__('Editar Empleado', true), array('action' => 'edit', $empleado['Empleado']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Empleado', true), array('action' => 'delete', $empleado['Empleado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $empleado['Empleado']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados', true), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nuevo Empleado', true), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inscripciones', true), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inventarios', true), array('controller' => 'inventarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inventario', true), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php __('Centros Relacionados');?></h3>
	<?php if (!empty($empleado['Centro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Sigla'); ?></th>
		<th><?php __('FechaFundacion'); ?></th>
		<th><?php __('EquipoDirectivo'); ?></th>
		<th><?php __('Direccion'); ?></th>
		<th><?php __('Ciudad'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Url'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Centro'] as $centro):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $centro['id'];?></td>
			<td><?php echo $centro['nombre'];?></td>
			<td><?php echo $centro['sigla'];?></td>
			<td><?php echo $centro['fechaFundacion'];?></td>
			<td><?php echo $centro['equipoDirectivo'];?></td>
			<td><?php echo $centro['direccion'];?></td>
			<td><?php echo $centro['ciudad'];?></td>
			<td><?php echo $centro['telefono'];?></td>
			<td><?php echo $centro['email'];?></td>
			<td><?php echo $centro['url'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'centros', 'action' => 'view', $centro['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'centros', 'action' => 'edit', $centro['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'centros', 'action' => 'delete', $centro['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $centro['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Cargos Relacionados');?></h3>
	<?php if (!empty($empleado['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Resolucion Nro'); ?></th>
		<th><?php __('Hs Catedra'); ?></th>
		<!--<th><?php __('Hs Reloj'); ?></th>-->
		<th><?php __('Area'); ?></th>
		<th><?php __('Puesto'); ?></th>
		<th><?php __('Descricpion'); ?></th>
		<th><?php __('Creacion'); ?></th>
		<th><?php __('Cierre'); ?></th>
		<th><?php __('Alta'); ?></th>
		<th><?php __('Baja'); ?></th>
		<th><?php __('Cambio Situacion'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<!--<th><?php __('Curso Id'); ?></th>-->
		<!--<th><?php __('Materia Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Cargo'] as $cargo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $cargo['id'];?></td>-->
			<td><?php echo $cargo['nombre'];?></td>
			<td><?php echo $cargo['tipo'];?></td>
			<td><?php echo $cargo['resolucionNro'];?></td>
			<td><?php echo $cargo['hsCatedra'];?></td>
			<!--<td><?php echo $cargo['hsReloj'];?></td>-->
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
			<!--<td><?php echo ($this->Html->link($cargo['curso_id'], array('controller' => 'centros', 'action' => 'view', $cargo['curso_id'])));?></td>-->
			<!--<td><?php echo ($this->Html->link($cargo['materia_id'], array('controller' => 'centros', 'action' => 'view', $cargo['materia_id'])));?></td>-->
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
			<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Estados Relacionados');?></h3>
	<?php if (!empty($empleado['Estado'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Articulo'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Desde'); ?></th>
		<th><?php __('Hasta'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<th><?php __('Docente Id'); ?></th>
		<!--<th><?php __('Empleado Id'); ?></th>-->
		<th><?php __('Cargo Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Estado'] as $estado):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $estado['id'];?></td>
			<td><?php echo $estado['articulo'];?></td>
			<td><?php echo $estado['descripcion'];?></td>
			<td><?php echo $this->Html->formatTime($estado['fechaDesde']);?></td>
			<td><?php echo $this->Html->formatTime($estado['fechaHasta']);?></td>
			<td><?php echo $estado['observacion'];?></td>
			<td><?php echo ($this->Html->link($estado['docente_id'], array('controller' => 'docentes', 'action' => 'view', $estado['docente_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($estado['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $estado['empleado_id'])));?></td>-->
			<td><?php echo ($this->Html->link($estado['cargo_id'], array('controller' => 'cargos', 'action' => 'view', $estado['cargo_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'estados', 'action' => 'view', $estado['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'estados', 'action' => 'edit', $estado['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'estados', 'action' => 'delete', $estado['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($empleado['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Alumno Id'); ?></th>
		<th><?php __('Ciclo Id'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Curso Id'); ?></th>
		<!--<th><?php __('Materia Id'); ?></th>-->
		<!--<th><?php __('Empleado Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Inscripcion'] as $inscripcion):
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
			<!--<td><?php echo ($this->Html->link($inscripcion['materia_id'], array('controller' => 'materias', 'action' => 'view', $inscripcion['materia_id'])));?></td>-->
			<!--<td><?php echo ($this->Html->link($inscripcion['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['empleado_id'])));?></td>-->
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
			<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Inventarios Relacionados');?></h3>
	<?php if (!empty($empleado['Inventario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Creacion'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<!--<th><?php __('Empleado Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Inventario'] as $inventario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $inventario['id'];?></td>-->
			<td><?php echo $inventario['nombre'];?></td>
			<td><?php echo $inventario['fechaCreacion'];?></td>
			<td><?php echo $inventario['observacion'];?></td>
			<!--<td><?php echo $inventario['empleado_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'inventarios', 'action' => 'view', $inventario['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'inventarios', 'action' => 'edit', $inventario['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'inventarios', 'action' => 'delete', $inventario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inventario['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventario', true), array('controller' => 'inventarios', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<!--<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($empleado['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('NombreUsuario'); ?></th>
		<th><?php __('Clave'); ?></th>
		<th><?php __('Area'); ?></th>
		<th><?php __('Puesto'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Empleado Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Usuario'] as $usuario):
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
				<?php echo $this->Html->link(__('View', true), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>-->



