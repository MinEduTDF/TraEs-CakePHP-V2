<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->
<!-- *********** Tooltip ************* -->
<?php echo $this->Html->script('tooltip'); ?>
<!-- ************************************** -->

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('username', array('label' => 'Nombre usuario*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca inicial nombre + apellido', 'placeholder' => 'Nombre de usuario'));
		echo $this->Form->input('password', array('label' => 'Contraseña*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese inicial apellido + nro de documento', 'placeholder' => 'Contraseña'));
		echo $this->Form->input('password_confirm', array('label' => 'Confirmar contraseña*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese la misma contraseña', 'placeholder' => 'Confirmación de la contraseña'));
		$roles = array('before' => '-- Seleccione un rol --', 'admin' => 'admin', 'usuario' => 'usuario');
        echo $this->Form->input('role', array('label' => 'Rol*', 'options' => $roles, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una opción de la lista'));
		echo $this->Form->input('email', array('label' => 'Email', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el correo electrónico del usuario', 'placeholder' => 'Ingrese un email del usuario'));
?>
  </div><div class="col-md-6 col-sm-6 col-xs-12">
<?php		
		echo $this->Form->input('centro_id', array('label' => 'Centro', 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una opción de la lista'));
   		echo $this->Form->input('empleado_id', array('label' => 'Empleado', 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una opción de la lista'));
		$puestos = array('before' => '-- Seleccione un puesto de trabajo --', 'Docentes' => 'Docentes', 'Alumnos' => 'Alumnos', 'Gabinete' => 'Gabinete');
		echo $this->Form->input('puesto', array('label' => 'Puesto de trabajo', 'options' => $puestos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una opción de la lista'));
   		echo $this->Form->input('creado', array('label' => 'Fecha creación', 'between' => '<br>','class' => 'datepicker form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese la fecha de creación del registro', 'placeholder' => 'Ingrese una fecha con formato AAAA-MM-DD'));
?>
  </div>
</div>