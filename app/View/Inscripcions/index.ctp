<!-- start main -->
<div class="TituloSec">Inscripciones</div>
<div id="ContenidoSec">
<div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-8 col-sm-2 col-md-8">

 <!-- end second nav -->

	<div class="row">
			    <?php foreach ($inscripcions as $inscripcion): ?>
			    
			    <?php echo $this->element('inscripcion',array( 'inscripcion' => $inscripcion )); ?>
    
                <?php endforeach; ?>
			    
   </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>
  </div>

  <div class="col-xs-10 col-sm-4 col-md-4">
  	 <div class="unit">
  			 <div class="subtitulo">Buscar</div>
				 
				<strong><?php echo 'Ciudad: '; ?></strong>
				<?php	
					echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
		   			foreach($letters as $letter)
					{
						echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,                              'index/letter:'.$letter) : $letter);
					}
				?>
                <br></br>
			 <?php echo $this->element('formSearch_centro'); ?>
  	      </div>
	 </div>
  </div>
</div>
<!-- end main -->



   	    
    
 <!-- start sidebar -->
 <div id="sidebar">
		<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_inscripcion'); ?>
		
        </div>
		
   <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nueva Inscripcion'), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Ciclos'), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Ciclo'), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>
<!-- end sidebar -->