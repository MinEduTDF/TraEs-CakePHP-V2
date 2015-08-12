<!-- start main -->
 <div id="main">
 <div class="flash-messages">
        <?php echo $this->Session->flash(); ?>
        <!--$session->read('Auth.Usuario.centro_id');-->  
 </div>
 <h2>Centros</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Centro'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <?php foreach ($centros as $centro): ?>
    
    <?php echo $this->element('centro',array( 'centro' => $centro )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
				
		<div id="invoice-stats">
   		<h3><?php echo __('Ciudad'); ?></h3><br>
		<?php 
			
			echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
   			foreach($letters as $letter)
			{
				echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,                              'index/letter:'.$letter) : $letter);
			}
		?>
        </div>
		<br></br>
        
			<?php echo $this->element('formSearch_centro'); ?>
		
        </div>
		
   <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nuevo Centro'), array('action' => 'add')); ?></li>-->
		<li><?php echo $this->Html->link(__('Listar Titulaciones'), array('controller' => 'titulacions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
        <li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Modalidad'), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inasistencias'), array('controller' => 'inasistencias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Agegar Inasistencias'), array('controller' => 'inasistencias', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('listar Calificaciones'), array('controller' => 'notas', 'action' => 'index')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
</div>
<!-- end sidebar -->