<!-- start main -->
 <div id="main">
 
 <h2>Calificaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Calificacion'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nota['Nota']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Alumno: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($nota['Alumno']['apellidos'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['apellidos'])) ." ". ($this->Html->link($nota['Alumno']['nombres'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['nombres'])))); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Materia | Ciclo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['alia'])))." | ".($this->Html->link($nota['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $nota['Ciclo']['ciclo']))); ?>
			&nbsp;
		</dd>
		<h3>Primer período</h3>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nota 1 | Nota 2 | PROMEDIO: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($nota['Nota']['notaPrimeraCuatPrimero'])." | ".($nota['Nota']['notaSegundaCuatPrimero'])." | ";?><strong><?php echo $nota['Nota']['promCuatPrimero'];?></strong>
			&nbsp;
		</dd>
        <h3>Segundo período</h3>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nota 1 | Nota 2 | PROMEDIO: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($nota['Nota']['notaPrimeraCuatSegundo'])." | ".($nota['Nota']['notaSegundaCuatSegundo'])." | "; ?><strong><?php ($nota['Nota']['promCuatSegundo'])?></strong>
			&nbsp;
		</dd>
        <h3>Calificación de cierre</h3>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Promedio a Termino | Nota en Diciembre | Nota en Marzo | PROMEDIO FINAL'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($nota['Nota']['promTermino'])." | ".($nota['Nota']['notaDic'])." | ";?><strong><?php echo ($nota['Nota']['promFinal']); ?></strong>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Observaciones: '); ?></strong></dt>
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
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Calificacion'), array('action' => 'edit', $nota['Nota']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Enviar Calificacion PDF'), array('action' => 'sendPDF', $nota['Nota']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Cancelar Calificacion'), array('action' => 'cancel', $nota['Nota']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Borrar Calificacion'), array('action' => 'delete', $nota['Nota']['id']), null, sprintf(__('Esta seguro de borrar la nota numero %s?'), $nota['Nota']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Notas'), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nueva Nota'), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
