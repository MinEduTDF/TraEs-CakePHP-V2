<div class="TituloSec"><?php echo __('Agregar Alumno'); ?></div>
<div id="ContenidoSec">
<div class="alumnos form">
<?php echo $this->Form->create('Alumno', array('type' => 'file'/*, 'novalidate' => 'novalidate'*/));?>

	         <div class="unit">
               <?php echo $this->element('form_alumno'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
		</div>
	</div>