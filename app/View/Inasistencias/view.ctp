<!-- start main -->
 <div id="main">
 </br>
 <h2>Inasistencias</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Inasistencia'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Id: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inasistencia['Inasistencia']['id']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Tipo: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inasistencia['Inasistencia']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Justificada: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inasistencia['Inasistencia']['justificado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Causa: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $inasistencia['Inasistencia']['causa']; ?>
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
		<li><?php echo $this->Html->link(__('Editar Inasistencia'), array('action' => 'edit', $inasistencia['Inasistencia']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Alumno'), array('action' => 'delete', $alumno['Alumno']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $alumno['Alumno']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('action' => 'add')); ?> </li>
		</ul>
</div>
</div>	
<!-- end sidebar -->
</div>

