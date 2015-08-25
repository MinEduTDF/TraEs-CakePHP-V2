<div class="TituloSec"><?php echo __('Editar Centro'); ?></div>
<div id="ContenidoSec">
<div class="centros form">
<?php echo $this->Form->create('Centro');?>

	        <div class="unit">
               <?php echo $this->element('form_centro'); ?><p>
            </div>

               <div class="text-center">
               <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
			   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
			   </div>
		</div>
	</div>
