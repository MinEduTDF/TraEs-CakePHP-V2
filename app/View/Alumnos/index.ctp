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
 
 <!-- start sidebar -->
  <div class="col-xs-12 col-sm-6 col-md-4">
  	<div class="unit">
  		<div id="sidebar">
		
		<div id="invoice-stats">
   		<?php 
			
			echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
   			foreach($letters as $letter)
			{
				echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,'index/letter:'.$letter) : $letter);
			}
		?>
        </div>
			<br></br>
		</div>
	</div>	
</div>
<!-- end sidebar -->
		</div>
	</div>
</div>