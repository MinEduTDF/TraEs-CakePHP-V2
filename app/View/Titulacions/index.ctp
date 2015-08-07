<!-- start main -->
 <div id="main">
 <h2>Titulaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Titulación'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->

            <?php foreach ($titulacions as $titulacion): ?>
    
            <?php echo $this->element(('titulacion'), array( 'titulacion' => $titulacion )); ?>
    
            <?php endforeach; ?>
    
            <?php echo $this->element('pagination'); ?>
 

 </div>
 <!-- end main -->
  
<!-- start sidebar -->
<div id="sidebar">
	<div id="invoice-stats">
   		
		    <?php echo $this->element('formSearch_titulacion'); ?>
		
    </div>
    			
   <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Agregar Titulación'), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>
<!-- end sidebar -->
