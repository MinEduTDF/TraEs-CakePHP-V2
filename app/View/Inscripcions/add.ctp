<div class="TituloSec"><?php echo __('Agregar Inscripcion'); ?></div>
<div id="ContenidoSec">
<?php echo $this->Form->create('Inscripcion');?>

	         <div class="unit">
               <?php echo $this->element('form_inscripcion'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
	</div>