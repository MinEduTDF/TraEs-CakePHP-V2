<div class="TituloSec"><?php echo __('Agregar Empleado'); ?></div>
<div id="ContenidoSec">
<div class="empleados form">
<?php echo $this->Form->create('Empleado', array('type' => 'file', 'novalidate' => 'novalidate'));?>
	         <div class="unit">
               <?php echo $this->element('form_empleado'); ?><p>
             </div>
             <div class="text-center">
          	   <?php echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
		</div>
	</div>