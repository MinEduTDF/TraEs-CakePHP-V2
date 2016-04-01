<?php echo $this->Html->script(array('datepicker', 'tooltip')); ?>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
      <?php
          echo $this->Form->input('nombre', array('label' => 'Nombre*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el año con formato AAAA', 'Placeholder' => 'Ingrese año del ciclo...'));
          echo $this->Form->input('fechaInicio', array('label' => 'Fecha de Incio*', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'Placeholder' => 'Ingrese la fecha de incio...'));
  		  echo $this->Form->input('fechaFinal', array('label' => 'Fecha de Finalización*', 'between' => '<br>', 'type' => 'text', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese la fecha de finalización...'));
      ?>       
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
      <?php
	      echo $this->Form->input('primer_periodo', array('label' => 'Fecha de Inicio Primer Período*', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'Placeholder' => 'Ingrese la fecha de incio del primer período...'));
          echo $this->Form->input('segundo_periodo', array('label' => 'Fecha de Inicio Segundo Período*', 'between' => '<br>', 'type' => 'text', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese la fecha de incio del segundo período...'));
          echo $this->Form->input('tercer_periodo', array('label' => 'Fecha de Inicio Tercer Período*', 'between' => '<br>', 'type' => 'text', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese la fecha de incio del tercer período...'));
          echo $this->Form->input('observaciones', array('label' => 'Observaciones', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una observación', 'placeholder' => 'Ingrese una observación...'));
	  ?>
  </div>
</div>  