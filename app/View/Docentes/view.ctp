<!-- start main -->
 <div id="main">
 
 <h2>Docentes</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Docente'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Id: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('PrimerNombre: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['primerNombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Apellido: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Dni: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['dni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Direccion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['direccion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Telefono: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['telefono']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Email: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Ciudad: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docente['Docente']['ciudad']; ?>
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
		<li><?php echo $this->Html->link(__('Editar Docente'), array('action' => 'edit', $docente['Docente']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Docente'), array('action' => 'delete', $docente['Docente']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $docente['Docente']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Docentes'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Titulos'), array('controller' => 'titulos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Titulo'), array('controller' => 'titulos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php echo __('Titulos Relacionados');?></h3>
	<?php if (!empty($docente['Titulo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Institucion'); ?></th>
		<!--<th><?php echo __('Docente Id'); ?></th>-->
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($docente['Titulo'] as $titulo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $titulo['id'];?></td>-->
			<td><?php echo $titulo['titulo'];?></td>
			<td><?php echo $titulo['tipo'];?></td>
			<td><?php echo $titulo['institucion'];?></td>
			<!--<td><?php echo $titulo['docente_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'titulos', 'action' => 'view', $titulo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'titulos', 'action' => 'edit', $titulo['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'titulos', 'action' => 'delete', $titulo['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $titulo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Titulo'), array('controller' => 'titulos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php echo __('Licencias Relacionadas');?></h3>
	<?php if (!empty($docente['Licencia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Articulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Desde'); ?></th>
		<th><?php echo __('Hasta'); ?></th>
		<th><?php echo __('Observacion'); ?></th>
		<!--<th><?php echo __('Docente Id'); ?></th>-->
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($docente['Licencia'] as $licencia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $licencia['id'];?></td>-->
			<td><?php echo $licencia['articulo'];?></td>
			<td><?php echo $licencia['descripcion'];?></td>
			<td><?php echo $this->Html->formatTime($licencia['fechaDesde']);?></td>
			<td><?php echo $this->Html->formatTime($licencia['fechaHasta']);?></td>
			<td><?php echo $licencia['observacion'];?></td>
			<!--<td><?php echo ($this->Html->link($licencia['docente_id'], array('controller' => 'docentes', 'action' => 'view', $licencia['docente_id'])));?></td>-->
			<td><?php echo ($this->Html->link($licencia['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $licencia['empleado_id'])));?></td>
			<td><?php echo ($this->Html->link($licencia['cargo_id'], array('controller' => 'cargos', 'action' => 'view', $licencia['cargo_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'licencias', 'action' => 'view', $licencia['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'licencias', 'action' => 'edit', $licencia['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'licencias', 'action' => 'delete', $licencia['id']), null, sprintf(__('Esta seguro de borrar la licencia %s?'), $licencia['articulo'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Licencia'), array('controller' => 'licencias', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php echo __('Cargos Relacionados');?></h3>
	<?php if (!empty($docente['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<!--<th><?php echo __('Tipo'); ?></th>-->
		<th><?php echo __('Resolucion Nro'); ?></th>
		<th><?php echo __('HsCatedra'); ?></th>
		<!--<th><?php echo __('HsReloj'); ?></th>-->
		<th><?php echo __('Area'); ?></th>
		<!--<th><?php echo __('Puesto'); ?></th>-->
		<!--<th><?php echo __('Descripcion'); ?></th>-->
		<th><?php echo __('Creacion'); ?></th>
		<!--<th><?php echo __('Cierre'); ?></th>-->
		<th><?php echo __('Alta'); ?></th>
		<th><?php echo __('Baja'); ?></th>
		<!--<th><?php echo __('Cambio Situacion'); ?></th>-->
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Centro Id'); ?></th>
		<!--<th><?php echo __('Curso Id'); ?></th>-->
		<!--<th><?php echo __('Materia Id'); ?></th>-->
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($docente['Cargo'] as $cargo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cargo['id'];?></td>
			<td><?php echo $cargo['nombre'];?></td>
			<!--<td><?php echo $cargo['tipo'];?></td>-->
			<td><?php echo $cargo['resolucionNro'];?></td>
			<td><?php echo $cargo['hsCatedra'];?></td>
			<!--<td><?php echo $cargo['hsReloj'];?></td>-->
			<td><?php echo $cargo['area'];?></td>
			<!--<td><?php echo $cargo['puesto'];?></td>-->
			<!--<td><?php echo $cargo['descricpion'];?></td>-->
			<td><?php echo $this->Html->formatTime($cargo['fechaCreacion']);?></td>
			<!--<td><?php echo $this->Html->formatTime($cargo['fechaCierre']);?></td>-->
			<td><?php echo $this->Html->formatTime($cargo['fechaAltaPersona']);?></td>
			<td><?php echo $this->Html->formatTime($cargo['fechaBajaPersona']);?></td>
			<!--<td><?php echo $this->Html->formatTime($cargo['fechaCambioSituacionPersona']);?></td>-->
			<td><?php echo $cargo['estado'];?></td>
			<td><?php echo ($this->Html->link($cargo['centro_id'], array('controller' => 'centros', 'action' => 'view', $cargo['centro_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($cargo['curso_id'], array('controller' => 'centros', 'action' => 'view', $cargo['curso_id'])));?></td>-->
			<!--<td><?php echo ($this->Html->link($cargo['materia_id'], array('controller' => 'centros', 'action' => 'view', $cargo['materia_id'])));?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cargos', 'action' => 'view', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cargos', 'action' => 'edit', $cargo['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $cargo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<!--<div class="related">
	<h3><?php echo __('Materias Relacionadas');?></h3>
	<?php if (!empty($docente['Materia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Alia'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('HsSemanal'); ?></th>
		<th><?php echo __('Observacion'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($docente['Materia'] as $materia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $materia['id'];?></td>
			<td><?php echo $materia['nombre'];?></td>
			<td><?php echo $materia['alia'];?></td>
			<td><?php echo $materia['contenido'];?></td>
			<td><?php echo $materia['hsSemanal'];?></td>
			<td><?php echo $materia['observacion'];?></td>
			<td><?php echo ($this->Html->link($materia['curso_id'], array('controller' => 'materias', 'action' => 'view', $materia['curso_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'materias', 'action' => 'view', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'materias', 'action' => 'edit', $materia['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $materia['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
