<div class="TituloSec"><?php echo __('Agregar Servicio'); ?></div>
<div id="ContenidoSec">
<?php echo $this->Form->create('Servicio');?>

	         <div class="unit">
               <?php echo $this->element('form_servicio'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
	</div>