<div class="TituloSec"><?php echo __('Editar Usuario'); ?></div>
<div id="ContenidoSec">
<div class="users form">
<?php echo $this->Form->create('User');?>

	         <div class="unit">
               <?php echo $this->element('form_user_edit'); ?><p>
             </div>
             <div class="text-center">
        	   <?php //echo $this->Form->submit('Añadir usuario', array('class' => 'form-submit', 'title' => 'Click para añadir'));
                     echo $this->Form->input('id', array('type' => 'hidden'));
			         echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
		</div>
	</div>