<?php echo $this->Html->script(array('datepicker', 'tooltip')); ?>
<div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
	  <?php
          echo $this->Form->input('username', array('label' => 'Nombre usuario*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca inicial nombre + apellido', 'placeholder' => 'Ingrese un nombre de usuario...'));
    	  echo $this->Form->input('password', array('label' => 'Contraseña*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese inicial apellido + nro de documento', 'placeholder' => 'Ingrese una contraseña...'));
          echo $this->Form->input('password_confirm', array('label' => 'Confirmar contraseña*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese la misma contraseña', 'placeholder' => 'Ingrese nuevamente la contraseña...'));
          $roles = array('admin' => 'admin', 'usuario' => 'usuario');
          echo $this->Form->input('role', array('label' => 'Rol*', 'empty' => 'Ingrese un rol...', 'options' => $roles, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una opción.'));
          echo $this->Form->input('email', array('label' => 'Email', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el correo electrónico del usuario', 'placeholder' => 'Ingrese un email del usuario'));
      ?>
   </div>
   <div class="col-md-6 col-sm-6 col-xs-12">
	  <?php		
          echo $this->Form->input('centro_id', array('label' => 'Centro', 'default' => 'CPLA', 'readonly' => true, 'between' => '<br>', 'class' => 'form-control'));
          echo $this->Form->input('empleado_id', array('label' => 'Empleado', 'empty' => 'Ingrese un empleado...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una opción.'));
          $puestos = array('Docentes' => 'Docentes', 'Alumnos' => 'Alumnos', 'Gabinete' => 'Gabinete');
          echo $this->Form->input('puesto', array('label' => 'Puesto de trabajo', 'empty' => 'Ingrese un puesto de trabajo...', 'options' => $puestos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una opción.'));
          echo $this->Form->input('creado', array('label' => 'Fecha creación', 'between' => '<br>','class' => 'datepicker form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese la fecha de creación del registro', 'placeholder' => 'Ingrese una fecha con formato AAAA-MM-DD'));
      ?>
  </div>
</div>