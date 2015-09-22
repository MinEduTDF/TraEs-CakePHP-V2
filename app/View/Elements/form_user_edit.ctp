<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('username', array('label' => 'Nombre usuario', 'type' => 'text', 'between' => '<br>', 'empty' => '', 'class' => 'form-control'));
		echo $this->Form->input('role', array('label' => 'Rol', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('email', array('label' => 'Email', 'title' => 'Email', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('puesto', array('label' => 'Puesto', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('centro_id', array('label' => 'Centro', 'between' => '<br>', 'class' => 'form-control'));
   		echo $this->Form->input('empleado_id', array('label' => 'Centro', 'between' => '<br>', 'class' => 'form-control'));
   		echo $this->Form->input('creado', array('label' => 'Fecha creación', 'between' => '<br>','class' => 'datepicker form-control'));
?>
  </div>
</div>