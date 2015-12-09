<?php
 
 $this->Paginator->options(array(
          'update' => '#contenedor-alumnos',
		  'before' => $this->Js->get('#procesando')->effect('fadeIn', array('buffer' => false)),
		  'complete' => $this->Js->get('#procesando')->effect('fadeOut', array('buffer' => false))
 ));  
?>

<div id='contenedor-alumnos'>
<!-- start main -->
<div class="TituloSec">Alumnos</div>
<div id="ContenidoSec">
  <div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8">

<!--<div class="progress oculto" id="procesando">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>-->

<div id="second-nav">
			 <div class="unit text-center">
			 	  	  <span class="link"><?php echo $this->Html->link('Agregar', array('action' => 'add'), array('class' => 'btn btn-primary btn-lg')); ?></span>
			 </div>
</div>
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
 
  <div class="col-xs-12 col-sm-4 col-md-4">
  	<div class="unit">
  			 <div class="subtitulo">Buscar</div>
				
                <!--<strong><?php echo 'Apellido: '; ?></strong>
				
				<?php 
					
					echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
		   			foreach($letters as $letter)
					{
						echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,                              'index/letter:'.$letter) : $letter);
					}
				?>-->
			 <?php echo $this->element('formSearch_alumno'); ?>
  	      </div>
		</div>
	</div>
  </div>
   <?php echo $this->Js->writeBuffer(); ?>           
</div> <!-- contenedor-alumnos --> 