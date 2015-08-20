<div class="TituloSec"><?php echo __('Agregar Inasistencia'); ?></div>
<div id="ContenidoSec">
<?php echo $this->Form->create('Inasistencia');?>

	         <div class="unit">
               <?php echo $this->element('form_inasistencia'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
	</div>