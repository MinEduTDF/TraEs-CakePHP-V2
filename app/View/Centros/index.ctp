<!-- start main -->
<div class="TituloSec">Centros</div>
<div id="ContenidoSec">
<div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8">

<div id="second-nav">
			 <div class="unit text-center">
			 	  	  <span class="link"><?php echo $this->Html->link('Agregar', array('action' => 'add'), array('class' => 'btn btn-primary btn-lg')); ?></span>
			 </div>
</div>
 <!-- end second nav -->

	<div class="row">
			    <?php foreach ($centros as $centro): ?>
			    
			    <?php echo $this->element('centro',array( 'centro' => $centro )); ?>
			    
			    <?php endforeach; ?>
			    
   </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>
  </div>

  <div class="col-xs-12 col-sm-4 col-md-4">
  	 <div class="unit">
  			 <div class="subtitulo">Buscar</div>
				 
				<strong><?php echo 'Ciudad: '; ?></strong>
				<?php	
					echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
		   			foreach($letters as $letter)
					{
						echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,                              'index/letter:'.$letter) : $letter);
					}
				?>
                <br></br>
			 <?php echo $this->element('formSearch_centro'); ?>
  	      </div>
	 </div>
  </div>
</div>
<!-- end main -->