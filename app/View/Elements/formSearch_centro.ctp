<?php echo $this->Form->create('Centro',array('type'=>'get','action'=>'index'));?>
<div class="form-group">
   <?php echo $this->Form->input('cue', array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese Nº de CUE...'));	?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>