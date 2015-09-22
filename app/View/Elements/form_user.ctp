<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('username', array('label' => 'Nombre usuario', 'maxLength' => 255, 'type' => 'text', 'between' => '<br>', 'empty' => '', 'class' => 'form-control'));
		echo $this->Form->input('email', array('label' => 'Email', 'maxLength' => 255, 'title' => 'Email', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('password', array('label' => 'Contraseña', 'maxLength' => 255, 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('password_confirm', array('label' => 'Confirmar contraseña', 'maxLength' => 255, 'between' => '<br>', 'class' => 'form-control'));
?>
  </div>
</div>