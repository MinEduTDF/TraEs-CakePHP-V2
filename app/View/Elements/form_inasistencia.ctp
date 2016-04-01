<?php echo $this->Html->script(array('datepicker', 'tooltip')); ?>
<div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
	  <?php
          echo $this->Form->input('creado', array('label' => 'Fecha creación*', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
          echo $this->Form->input('ciclo_id', array('label' => 'Ciclo*', 'empty' => 'Ingrese un ciclo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          echo $this->Form->input('Curso', array('label' => 'Curso*', 'empty' => 'Ingrese un curso...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          echo $this->Form->input('alumno_id', array('label' => 'Alumno*', 'empty' => 'Ingrese un alumno...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          echo $this->Form->input('Materia', array('label' => 'Materia*', 'empty' => 'Ingrese una materia...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          $tipos_causa = array('Sin causa' => 'Sin causa', 'Razones particulares' => 'Razones particulares', 'Enfermedad' => 'Enfermedad',
		                       'Fenómenos meteorológicos' => 'Fenómenos meteorológicos', 'Donación de sangre' => 'Donación de sangre',
							   'Obligaciones cívico_militares' => 'Obligaciones cívico_militares', 'Paro de transporte' => 'Paro de transporte');
        echo '</div><div class="col-md-6 col-sm-6 col-xs-12">';
          echo $this->Form->input('causa', array('label' => 'Causa*', 'options' => $tipos_causa, 'empty' => 'Ingrese una causa...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          $tipos = array('un cuarto' => 'un cuarto' ,'media' => 'media', 'completa' => 'completa');
          echo $this->Form->input('tipo', array('label' => 'Tipo*', 'options' => $tipos, 'empty' => 'Ingrese un tipo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          $tipos_justificado = array('Si' => 'Si', 'No' => 'No', 'Pendiente' => 'Pendiente');
          echo $this->Form->input('justificado', array('label' => 'Justificación*', 'options' => $tipos_justificado, 'empty' => 'Ingrese un tipo de justificación...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          echo $this->Form->input('certificacion', array('type' => 'file', 'label' => 'Certificación', 'id' => 'certificacion', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
      ?>
   </div>
</div>