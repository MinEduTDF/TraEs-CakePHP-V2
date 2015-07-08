<!-- start main -->
 <div id="main">
 <h2>Alumnos</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Alumno'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <?php foreach ($alumnos as $alumno): ?>
    
    <?php echo $this->element('alumno',array( 'alumno' => $alumno )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
 
 </div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
		
		<div id="invoice-stats">
   		<?php 
			
			echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
   			foreach($letters as $letter)
			{
				echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,'index/letter:'.$letter) : $letter);
			}
		?>
        </div>
		<br></br>
    <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nuevo Alumno'), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Calificaciones'), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Nota'), array('controller' => 'notas', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		</ul>
    </div>
</div>	
<!-- end sidebar -->
