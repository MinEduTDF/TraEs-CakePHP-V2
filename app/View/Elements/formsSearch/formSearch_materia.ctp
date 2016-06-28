<?php echo $this->Form->create('Materia',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
	<?php
		echo $this->Form->input('alia', array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese un alia...'));
    ?><br>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>