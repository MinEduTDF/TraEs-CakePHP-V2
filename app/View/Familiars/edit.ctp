<div class="TituloSec"><?php echo __('Editar Familiar'); ?></div>
<div id="ContenidoSec">
<div class="familiars form">

<?php echo $this->Form->create('Familiar');?>

	         <div class="unit">
                    <?php echo $this->element('form_familiar'); ?>
             </div>

             <div class="text-center">
               <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>

               <div class="text-right">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	   </div>
          	  </div>
		</div>
	</div>