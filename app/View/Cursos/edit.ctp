<div class="TituloSec"><?php echo __('Editar Curso'); ?></div>
<div id="ContenidoSec">
<div class="cursos form">
<?php echo $this->Form->create('Curso');?>

	         <div class="unit">
               <?php echo $this->element('form_curso'); ?><p>
             </div>
          
             <div class="text-center">
          	   <?php 
			         echo $this->Form->input('id', array('type' => 'hidden'));
			         echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
		</div>
	</div>