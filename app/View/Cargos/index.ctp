<!-- start main -->
 <div id="main">
 <h2>Cargos</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Cargo'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
   
   
   	<?php foreach ($cargos as $cargo): ?>
    
    <?php echo $this->element('cargo',array( 'cargo' => $cargo )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
		<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_cargo'); ?>
		
        </div>
		
   <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nuevo Cargo'), array('action' => 'add')); ?></li>>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Licencias'), array('controller' => 'licencias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Horarios'), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Horario'), array('controller' => 'horarios', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>
<!-- end sidebar -->