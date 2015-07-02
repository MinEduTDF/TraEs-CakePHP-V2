<!-- start main -->
 <div id="main">
 
 <h2>Calificaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Calificacion', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Alumno'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($nota['Alumno']['apellido'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['apellido'])) ." ". ($this->Html->link($nota['Alumno']['primerNombre'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['primerNombre'])))); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Materia'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['alia'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Ciclo'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($nota['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $nota['Ciclo']['ciclo'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nota 1 / 1º Cuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['notaPrimeraCuatPrimero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nota 2 / 1º Cuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['notaSegundaCuatPrimero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Promedio / 1º Cuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['promCuatPrimero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nota 1 / 2º Cuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['notaPrimeraCuatSegundo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nota 2 / 2º Cuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['notaSegundaCuatSegundo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Promedio / 2º Cuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['promCuatSegundo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Promedio a Termino'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['promTermino']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nota Examen Diciembre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['notaDic']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Nota Examen Marzo'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['notaMar']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Promedio Final'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['promFinal']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Observaciones'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['observaciones']; ?>
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
		<li><?php echo $this->Html->link(__('Editar Calificacion', true), array('action' => 'edit', $nota['Nota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Enviar Calificacion PDF', true), array('action' => 'sendPDF', $nota['Nota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Cancelar Calificacion', true), array('action' => 'cancel', $nota['Nota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Calificacion', true), array('action' => 'delete', $nota['Nota']['id']), null, sprintf(__('Esta seguro de borrar la nota numero %s?', true), $nota['Nota']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Notas', true), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nueva Nota', true), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Alumno', true), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
