<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->
<!-- *********** Tooltip ************* -->
<?php echo $this->Html->script('tooltip'); ?>
<!-- ************************************** -->

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('username', array('readonly' => 'readonly', 'label' => 'Nombre usuario', 'label' => 'Nombre de usuario', 'type' => 'text', 'between' => '<br>', 'class' => 'form-control'));
        $roles = array('admin' => 'admin', 'usuario' => 'usuario');
        echo $this->Form->input('role', array('label' => 'Rol*','options' => $roles, 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lista'));
		echo $this->Form->input('email', array('label' => 'Email', 'title' => 'Email', 'between' => '<br>', 'class' => 'form-control'));
        /*echo $this->Form->input('password_update', array( 'label' => 'Nueva contraseña', 'type'=>'password', 'required' => 0, 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('password_confirm_update', array('label' => 'Repetir contraseña', 'title' => 'Repite la contraseña', 'type'=>'password', 'required' => 0, 'between' => '<br>', 'class' => 'form-control'));*/
?>		
  </div><div class="col-md-6 col-sm-6 col-xs-12">
<?php		
		echo $this->Form->input('centro_id', array('label' => 'Centro', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lista', 'placeholder' => 'Centro'));
   		echo $this->Form->input('empleado_id', array('label' => 'Empleado', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lita', 'placeholder' => 'Empleado'));
		echo $this->Form->input('puesto', array('label' => 'Puesto', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lista', 'placeholder' => 'Puesto'));
?>
  </div>
</div>