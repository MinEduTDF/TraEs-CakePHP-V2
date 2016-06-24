<?php echo $this->Form->create('Empleado',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
   <?php echo $this->Form->input('documento_nro' , array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese Nº de documento...'));	?>
</div>
<div class="text-center">
   
         <span class="link"><?php echo $this->Form->submit('<i class="glyphicon glyphicon-search"></i>BUSCAR', array('class' => 'btn btn-primary', 'escape' => false));?>
         </span>;
         <?php echo $this->Form->end(); ?>
</div>	
