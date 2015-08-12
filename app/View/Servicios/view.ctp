<!-- start main -->
 <div id="main">
 </br>
 <h2>Servicios Complementarios</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Servicio'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('ID | Fecha de creación del registro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($servicio['Servicio']['id'])." | ".($this->Html->formatTime($servicio['Servicio']['creado'])); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Tipo de servicio: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $servicio['Servicio']['tipo_servicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Estado: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $servicio['Servicio']['estado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Prestador | Docente/Profesional a cargo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($servicio['Servicio']['prestador'])." | ".($servicio['Servicio']['docente_profesional_acargo']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Tipo de alta | Fecha de alta: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($servicio['Servicio']['tipo_alta'])." | ".($this->Html->formatTime($servicio['Servicio']['fecha_alta'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Tipo de baja | Fecha de baja: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($servicio['Servicio']['tipo_baja'])." | ".($this->Html->formatTime($servicio['Servicio']['fecha_baja'])); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Observaciones: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $servicio['Servicio']['observaciones']; ?>
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
		<li><?php echo $this->Html->link(__('Editar Servicio'), array('action' => 'edit', $servicio['Servicio']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Servicio'), array('action' => 'delete', $servicio['Servicio']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $servicio['Servicio']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('action' => 'add')); ?> </li>
		</ul>
</div>
</div>	
<!-- end sidebar -->
</div>

