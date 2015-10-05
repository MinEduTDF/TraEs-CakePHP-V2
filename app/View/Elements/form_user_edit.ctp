<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('username', array('readonly' => 'readonly', 'label' => 'Nombre usuario', 'label' => 'Los usuarios no pueden cambiarse!', 'type' => 'text', 'between' => '<br>', 'empty' => '', 'class' => 'form-control'));
        $roles = array('admin' => 'admin', 'usuario' => 'usuario');
		echo $this->Form->input('role', array('options' => $roles, 'label' => 'Rol', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('email', array('label' => 'Email', 'title' => 'Email', 'between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('password_update', array( 'label' => 'Nueva contraseña', 'type'=>'password', 'required' => 0, 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('password_confirm_update', array('label' => 'Repetir contraseña', 'title' => 'Repite la contraseña', 'type'=>'password', 'required' => 0, 'between' => '<br>', 'class' => 'form-control'));
?>		
  </div><div class="col-md-6 col-sm-6 col-xs-12">
<?php		
		echo $this->Form->input('centro_id', array('label' => 'Centro', 'between' => '<br>', 'class' => 'form-control'));
   		echo $this->Form->input('empleado_id', array('label' => 'Empleado', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('puesto', array('label' => 'Puesto', 'between' => '<br>', 'class' => 'form-control'));
   		echo $this->Form->input('creado', array('label' => 'Fecha creación', 'between' => '<br>','class' => 'datepicker form-control'));
?>
  </div>
</div>