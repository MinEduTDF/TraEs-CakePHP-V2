<!-- start main -->
 <div id="main">
 </br>
 <h2>Inscripcion</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Incripcion'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <!--<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscripcion['Inscripcion']['id']; ?>
			&nbsp;
		</dd>-->
		<h3>Datos del Alumno</h3>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Alumno: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($inscripcion['Alumno']['apellidos'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['Alumno']['apellidos']))
			." ".($this->Html->link($inscripcion['Alumno']['nombres'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['Alumno']['nombres']))));
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Ciclo | Centro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($inscripcion['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['Ciclo']['ciclo'])))." | ".($this->Html->link($inscripcion['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $inscripcion['Centro']['sigla']))); ?>
			&nbsp;
		</dd>
		<h3>Datos previos</h3>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Cursa: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscripcion['Inscripcion']['cursa']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Fines: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscripcion['Inscripcion']['fines']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Recursante: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscripcion['Inscripcion']['recursante']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Condición de aprobación: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inscripcion['Inscripcion']['condicion_aprobacion']; ?>
			&nbsp;
		</dd>
        <h3>Datos del alta del Alumno</h3>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Tipo de alta | fecha de alta: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($inscripcion['Inscripcion']['tipo_alta'])." | ".($this->Html->formatTime($inscripcion['Inscripcion']['fecha_alta'])); ?>
			&nbsp;
		</dd>
		<h3>Datos de la baja</h3>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Tipo de baja | Fecha de baja | Motivo de baja: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($inscripcion['Inscripcion']['tipo_baja'])." | ".($this->Html->formatTime($inscripcion['Inscripcion']['fecha_baja']))." | ".$inscripcion['Inscripcion']['motivo_baja']; ?>
			&nbsp;
		</dd>
        <h3>Datos del egreso</h3>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Fecha de egreso | Libro matriz | Acta | Folio: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->formatTime($inscripcion['Inscripcion']['fecha_egreso']))." |  ".$inscripcion['Inscripcion']['libro_matriz']." | ".$inscripcion['Inscripcion']['acta']." | ".$inscripcion['Inscripcion']['folio']; ?>
			&nbsp;
		</dd>
        <h3>Datos de la titulación</h3>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Fecha de emisión del título | Nota | Fecha de nota: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->formatTime($inscripcion['Inscripcion']['fecha_emision_titulo']))." | ".($inscripcion['Inscripcion']['nota'])." | ".($inscripcion['Inscripcion']['fecha_nota']); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Empleado: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($inscripcion['Empleado']['apellido'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['Empleado']['apellido']))
			." ".($this->Html->link($inscripcion['Empleado']['primerNombre'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['Empleado']['primerNombre']))));
			?>
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
		<li><?php echo $this->Html->link(__('Editar Inscripcion'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Enviar Inscripcion PDF'), array('action' => 'sendPDF', $inscripcion['Inscripcion']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Cancelar Inscripcion'), array('action' => 'cancel', $inscripcion['Inscripcion']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Borrar Inscripcion'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), null, sprintf(__('Esta seguro de borrar la inscripcion numero %s?'), $inscripcion['Inscripcion']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Inscripcion'), array('action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->

<div class="related">
	<h3><?php echo __('Materias Relacionadas');?></h3>
	<?php if (!empty($inscripcion['Materia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Alia'); ?></th>
		<th><?php echo __('Carga horaria en'); ?></th>
		<th><?php echo __('Carga horaria semanal'); ?></th>
        <th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($inscripcion['Materia'] as $materia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $materia['id'];?></td>-->
			<td><?php echo $materia['alia'];?></td>
			<td><?php echo $materia['carga_horaria_en'];?></td>
			<td><?php echo $materia['carga_horaria_semanal'];?></td>
			<td><?php echo $materia['contenido'];?></td>
            <td><?php echo ($this->Html->link($materia['curso_id'], array('controller' => 'cursos', 'action' => 'view', $materia['curso_id'])));?></td>
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
