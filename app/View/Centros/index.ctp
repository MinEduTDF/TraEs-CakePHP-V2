<!-- start main -->
 <div id="main">
 <?php echo $this->Session->flash(); ?>
 <h2>Centros</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Centro'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <!--$session->read('Auth.Usuario.centro_id');--> 
   
   	<?php foreach ($centros as $centro): ?>
    
    <?php echo $this->element('centro',array( 'centro' => $centro )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
		<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_centro'); ?>
		
        </div>
		
   <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nuevo Centro'), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Modalidades'), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>-->
        <li><?php echo $this->Html->link(__('Listar Titulaciones'), array('controller' => 'titulacions', 'action' => 'index')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>-->
        <!--<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Modalidad'), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Orientacion'), array('controller' => 'orientacions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
         

</div>
<!-- end sidebar -->