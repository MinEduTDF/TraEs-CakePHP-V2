<!-- start main -->
 <div id="main">
 <h2>Inscripciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Inscripcion', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
   
   
   	<?php foreach ($inscripcions as $inscripcion): ?>
    
    <?php echo $this->element('inscripcion',array( 'inscripcion' => $inscripcion )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
		<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_inscripcion'); ?>
		
        </div>
		
   <div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nueva Inscripcion', true), array('action' => 'add')); ?></li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Alumno', true), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Ciclos', true), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Ciclo', true), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>
<!-- end sidebar -->