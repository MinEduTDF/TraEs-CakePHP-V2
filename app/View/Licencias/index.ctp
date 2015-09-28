<!-- start main -->
 <div id="main">
 <h2>Licencias</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Licencia'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->

	<?php foreach ($licencias as $licencia): ?>
    
    <?php echo $this->element('licencia',array( 'licencia' => $licencia )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
	
</div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
		<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_licencia'); ?>
		
        </div>
		
	<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	</br>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nueva Licencia'), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>
<!-- end sidebar -->