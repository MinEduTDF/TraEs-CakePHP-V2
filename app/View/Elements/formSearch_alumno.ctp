<?php echo $this->Form->create('Alumno',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
   <?php echo $this->Form->input('documento_nro' , array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese un nº de documento...'));	?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>