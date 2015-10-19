<div class="TituloSec"><?php echo __('Editar Titulación'); ?></div>
<div id="ContenidoSec">
<div class="titulacions form">
<?php echo $this->Form->create('Titulacion', array('type' => 'file', 'novalidate' => 'novalidate'));?>
	         <div class="unit">
               <?php echo $this->element('form_titulacion'); ?><p>
             </div>
               <div class="text-center">
               <?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	   </div>
		</div>
	</div>