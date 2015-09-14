<div class="TituloSec"><?php echo __('Editar Materia'); ?></div>
<div id="ContenidoSec">
<div class="cursos form">
<?php echo $this->Form->create('Materia');?>

	         <div class="unit">
               <?php echo $this->element('form_materia'); ?><p>
             </div>
          
             <div class="text-center">
          	   <?php 
			         echo $this->Form->input('id', array('type' => 'hidden'));
			         echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
		</div>
	</div>