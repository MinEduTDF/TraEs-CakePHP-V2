
<!-- start main -->
 <div id="main">
 
 <h2>Licencia</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Licencia'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licencia['Licencia']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Articulo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licencia['Licencia']['articulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Descripcion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licencia['Licencia']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('FechaDesde: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licencia['Licencia']['fechaDesde']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('FechaHasta: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licencia['Licencia']['fechaHasta']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Observacion: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $licencia['Licencia']['observacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Docente: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licencia['Docente']['id'], array('controller' => 'docentes', 'action' => 'view', $licencia['Docente']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Empleado: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licencia['Empleado']['apellido'], array('controller' => 'empleados', 'action' => 'view', $licencia['Empleado']['apellido'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Cargo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($licencia['Cargo']['nombre'], array('controller' => 'cargos', 'action' => 'view', $licencia['Cargo']['nombre'])); ?>
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
		<li><?php echo $this->Html->link(__('Editar Licencia'), array('action' => 'edit', $licencia['Licencia']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Licencia'), array('action' => 'delete', $licencia['Licencia']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $licencia['Licencia']['id'])); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Licencias'), array('action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Nueva Licencia'), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
</div>	
<!-- end sidebar -->
