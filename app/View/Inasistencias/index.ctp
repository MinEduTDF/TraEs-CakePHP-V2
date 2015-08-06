<!-- start main -->
 <div id="main">
 <h2>Inasistencias</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Inasistencia'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->

            <?php foreach ($inasistencias as $inasistencia): ?>
    
            <?php echo $this->element(('inasistencia'), array( 'inasistencia' => $inasistencia )); ?>
    
            <?php endforeach; ?>
    
            <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
  
<!-- start sidebar -->
<div id="sidebar">
		<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_inasistencia'); ?>
		
        </div>
		
   <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
   </div>
</div>
<!-- end sidebar -->