<div class="TituloSec"><?php echo __('Editar Integración'); ?></div>
<div id="ContenidoSec">
<div class="alumnos form">
<?php echo $this->Form->create('Integración');?>

	         <div class="unit">
               <?php echo $this->element('form_integracion'); ?><p>
             </div>
               <div class="text-center">
               <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	   </div>
		</div>
	</div>