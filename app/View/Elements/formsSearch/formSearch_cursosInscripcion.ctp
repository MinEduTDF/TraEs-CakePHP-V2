<?php echo $this->Form->create('CursosInscripcion',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
   <?php echo $this->Form->input('curso_id', array('label' => false, 'empty' => 'Ingrese un curso...', 'class' => 'form-control'));	?>
</div>
<hr>
<div class="form-group">
   <?php echo $this->Form->input('inscripcion_id', array('label' => false, 'empty' => 'Ingrese un nº de legajo...', 'class' => 'form-control'));	?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>