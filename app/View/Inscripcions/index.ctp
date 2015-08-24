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
				 
			     <?php echo $this->element('formSearch_inscripcion'); ?>
  	         </div>
	 </div>
  </div>
</div>
<!-- end main -->
