<div class="TituloSec"><?php echo __('Editar Calificación'); ?></div>
<div id="ContenidoSec">
<div class="notas form">
<?php echo $this->Form->create('Nota');?>

	         <div class="unit">
               <?php echo $this->element('form_nota'); ?><p>
             </div>
               <div class="text-center">
               <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	   </div>
		</div>
	</div>