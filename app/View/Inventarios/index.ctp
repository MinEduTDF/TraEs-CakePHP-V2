<!-- start main -->
 <div id="main">
 </br>
 <h2>Inventarios</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Inventario'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
   
   
   	<?php foreach ($inventarios as $inventario): ?>
    
    <?php echo $this->element('inventario',array( 'inventario' => $inventario )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
		<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_inventario'); ?>
		
        </div>
		
    <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nuevo Inventario'), array('action' => 'add')); ?></li>-->
		<li><?php echo $this->Html->link(__('Listar Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		</ul>
    </div>
</div>
<!-- end sidebar -->