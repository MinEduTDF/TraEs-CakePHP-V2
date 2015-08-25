<!-- start main -->
<div class="TituloSec">Alumnos</div>
<div id="ContenidoSec">
  <div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8">

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
				
                <strong><?php echo 'Apellido: '; ?></strong>
				
				<?php 
					
					echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
		   			foreach($letters as $letter)
					{
						echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,                              'index/letter:'.$letter) : $letter);
					}
				?>
			 <?php echo $this->element('formSearch_alumno'); ?>
  	      </div>
		</div>
	</div>
</div>