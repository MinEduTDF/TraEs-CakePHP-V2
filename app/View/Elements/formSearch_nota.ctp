<?php echo $this->Form->create('Nota',array('type'=>'get','action'=>'index'));?>
<div class="form-group">
	<?php echo $this->Form->input('alumno_id', array('label' => false, 'empty' => '-- Seleccione un alumno --', 'class' => 'form-control'));
	?><br>
    <?php echo $this->Form->input('ciclo_id', array('label' => false, 'empty' => '-- Seleccione un ciclo --', 'class' => 'form-control'));
	?><br />
    <?php echo $this->Form->input('materia_id', array('label' => false, 'empty' => '-- Seleccione una materia --', 'class' => 'form-control'));
	?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>