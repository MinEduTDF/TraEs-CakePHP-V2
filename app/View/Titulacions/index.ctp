<!-- start main -->
<div class="TituloSec">Titulaciones</div>
<div id="ContenidoSec">
  <div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-8 col-sm-6 col-md-8">

<div id="second-nav">
 	  <span class="link"><?php echo $this->Html->link('Agregar', array('action' => 'add'), array('class' => 'btn btn-primary')); ?></span>
</div>
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