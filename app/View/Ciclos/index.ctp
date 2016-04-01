<!-- start main -->
<div class="TituloSec">Ciclos</div>
<div id="ContenidoSec">
<div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8">
    <div id="second-nav">
			 <div class="unit text-center">
			 	  	  <span class="link"><?php echo $this->Html->link('AGREGAR', array('action' => 'add'), array('class' => 'btn btn-info')); ?></span>
			 </div>
    </div>
 <!-- end second nav -->

	<div class="row">
			    <?php foreach ($ciclos as $ciclo): ?>
			    
			    <?php echo $this->element('ciclo',array( 'ciclo' => $ciclo )); ?>
			    
			    <?php endforeach; ?>
			    
   </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>
  </div>

  <div class="col-xs-12 col-sm-4 col-md-4">
  	 <div class="unit">
  			 <div class="subtitulo">Búsqueda</div>
			 </br>
			 <?php echo $this->element('formSearch_ciclo'); ?>
  	      </div>
	 </div>
  </div>
</div>
<!-- end main -->