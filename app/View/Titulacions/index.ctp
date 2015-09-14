<!-- start main -->
<div class="TituloSec">Titulaciones</div>
<div id="ContenidoSec">
  <div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-8 col-sm-6 col-md-8">

 <!-- end second nav -->

	<div class="row">
			    <?php foreach ($titulacions as $titulacion): ?>
			    
			    <?php echo $this->element('titulacion',array( 'titulacion' => $titulacion )); ?>
			    
			    <?php endforeach; ?>
			    

			 </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>
	 </div>
 <!-- end main -->
 
  <div class="col-xs-12 col-sm-4 col-md-4">
  	<div class="unit">
  			 <div class="subtitulo">Buscar</div>
				
                <?php echo $this->element('formSearch_titulacion'); ?>
  	      </div>
		</div>
	</div>
</div>