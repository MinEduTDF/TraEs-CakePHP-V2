<div class="TituloSec"><?php echo __('Agregar Centro'); ?></div>
<div id="ContenidoSec">
<div class="alumnos form">
<?php echo $this->Form->create('Centro');?>

	         <div class="unit">
               <?php echo $this->element('forms/form_centro'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
		</div>
	</div>