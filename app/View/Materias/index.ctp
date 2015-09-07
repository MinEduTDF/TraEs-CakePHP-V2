<!-- start main -->
<div class="TituloSec">Materias</div>
<div id="ContenidoSec">
<div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8">

 <!-- end second nav -->

	<div class="row">
            <?php foreach ($materias as $materia): ?>
    
            <?php echo $this->element(('materia'), array( 'materia' => $materia )); ?>
    
            <?php endforeach; ?>
   </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>
  </div>

  <div class="col-xs-12 col-sm-4 col-md-4">
  	 <div class="unit">
  			 <div class="subtitulo">Buscar</div>
   		
		    <?php echo $this->element('formSearch_materia'); ?>
  	      </div>
	 </div>
  </div>
</div>
<!-- end main -->