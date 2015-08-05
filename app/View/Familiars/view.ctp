<!-- start main -->
 <div id="main">
 </br>
 <h2>Familiares</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Familiar'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Id: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $familiar['Familiar']['id']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nombres y apellidos del Alumno: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($familiar['Alumno']['nombres'], array('controller' => 'centros', 'action' => 'view', $familiar['Alumno']['nombres']))."  ".($this->Html->link($familiar['Alumno']['apellidos'], array('controller' => 'centros', 'action' => 'view', $familiar['Alumno']['apellidos']))); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nombre completo | Cuil/Cuit: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($familiar['Familiar']['nombre_completo'])." | ".($familiar['Familiar']['cuit_cuil']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Ciudad | Domicilio: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($familiar['Familiar']['ciudad'])." | ".($familiar['Familiar']['domicilio']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Telefono | Email: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($familiar['Familiar']['telefono_nro'])." | ".($familiar['Familiar']['email']); ?>
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
		<li><?php echo $this->Html->link(__('Editar Familiar'), array('action' => 'edit', $familiar['Familiar']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Alumno'), array('action' => 'delete', $alumno['Alumno']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $alumno['Alumno']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('action' => 'add')); ?> </li>
		</ul>
</div>
</div>	
<!-- end sidebar -->
</div>

