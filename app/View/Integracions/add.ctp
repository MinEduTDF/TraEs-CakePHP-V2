<div class="TituloSec"><?php echo __('Agregar Integracion'); ?></div>
<div id="ContenidoSec">
<?php echo $this->Form->create('Integracion');?>

	         <div class="unit">
               <?php echo $this->element('form_integracion'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
	</div>