<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->
<!-- *********** Tooltip ************* -->
<?php echo $this->Html->script('tooltip'); ?>
<!-- ************************************** -->

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('username', array('label' => 'Nombre usuario*', 'type' => 'text', 'between' => '<br>', 'empty' => '', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca inicial nombre + apellido', 'placeholder' => 'Nombre de usuario'));
		echo $this->Form->input('password', array('label' => 'Contraseña*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'inicial apellido + nro de documento', 'placeholder' => 'Contraseña'));
		echo $this->Form->input('password_confirm', array('label' => 'Confirmar contraseña*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'inicial apellido + nro de documento', 'placeholder' => 'Contraseña'));
		$roles = array('admin' => 'admin', 'usuario' => 'usuario');
        echo $this->Form->input('role', array('label' => 'Rol*','options' => $roles, 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lista'));
		echo $this->Form->input('email', array('label' => 'Email', 'title' => 'Email', 'between' => '<br>', 'class' => 'form-control'));
?>
  </div><div class="col-md-6 col-sm-6 col-xs-12">
<?php		
		echo $this->Form->input('centro_id', array('label' => 'Centro', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lista', 'placeholder' => 'Centro'));
   		echo $this->Form->input('empleado_id', array('label' => 'Empleado', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lita', 'placeholder' => 'Empleado'));
		echo $this->Form->input('puesto', array('label' => 'Puesto', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca una opción de la lita', 'placeholder' => 'Puesto'));
   		echo $this->Form->input('creado', array('label' => 'Fecha creación', 'between' => '<br>','class' => 'datepicker form-control'));
?>
  </div>
</div>