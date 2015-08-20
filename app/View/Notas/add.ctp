<div class="TituloSec"><?php echo __('Agregar Calificacion'); ?></div>
<div id="ContenidoSec">
<?php echo $this->Form->create('Nota');?>

	         <div class="unit">
               <?php echo $this->element('form_nota'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
	</div>