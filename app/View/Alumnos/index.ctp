<!-- start main -->
 <div class="TituloSec">Alumnos</div>
<div id="ContenidoSec">
 <div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">

 <!-- end second nav -->

	<div class="row">
			    <?php foreach ($alumnos as $alumno): ?>
			    
			    <?php echo $this->element('alumno',array( 'alumno' => $alumno )); ?>
			    
			    <?php endforeach; ?>
			    

			 </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>
	 </div>
 <!-- end main -->
 
  <div class="col-xs-12 col-sm-6 col-md-4">
  	<div class="unit">
  			 <div class="subtitulo">Buscar</div>
			 <?php echo $this->element('formSearch_alumno'); ?>
  	      </div>
		</div>
	</div>
</div>
