<!-- start main -->
 <div id="main">
 <?php echo $this->Session->flash(); ?>
 <h2>Cursos</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Curso'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->

            <?php foreach ($cursos as $curso): ?>
    
            <?php echo $this->element(('curso'), array( 'curso' => $curso )); ?>
    
            <?php endforeach; ?>
    
            <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
  
<!-- start sidebar -->
<div id="sidebar">
	<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_curso'); ?>
		
    </div>
    			
   <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nuevo Curso'), array('action' => 'add')); ?></li>-->
		<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Titulaciones'), array('controller' => 'titulacions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Agregar Titulación'), array('controller' => 'titulacions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Modalidades'), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Modalidad'), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>
<!-- end sidebar -->
