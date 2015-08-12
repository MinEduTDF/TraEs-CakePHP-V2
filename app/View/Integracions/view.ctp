<!-- start main -->
 <div id="main">
 </br>
 <h2>Integraciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Integracion'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Id: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $integracion['Integracion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Institución integradora | Docente integrador | Discapacidad trabajada: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($integracion['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $integracion['Centro']['id']))." | ".($integracion['Integracion']['docente_nombre_completo'])." | ".($integracion['Integracion']['tipo_discapacidad']); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Fechas: Inicio | Fin: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($integracion['Integracion']['fecha_inicio'])." | ".($integracion['Integracion']['fecha_fin']); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Observaciones: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($integracion['Integracion']['observaciones']); ?>
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
		<li><?php echo $this->Html->link(__('Editar Integracion'), array('action' => 'edit', $integracion['Integracion']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Integracion'), array('action' => 'delete', $integracion['Integracion']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $integracion['Integracion']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index')); ?> </li>
		<!--<li><?php //echo $this->Html->link(__('Nuevo Alumno'), array('action' => 'add')); ?> </li>-->
		</ul>
</div>
</div>	
<!-- end sidebar -->
</div>

