<?php echo $this->Html->script(array('datepicker', 'acordeon', 'tooltip')); ?>
<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-4">
	  <?php
          echo $this->Form->input('alumno_id', array('label' => 'Alumno*', 'empty' => 'Ingrese un alumno...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          echo $this->Form->input('ciclo_id', array('label' => 'Ciclo*', 'empty' => 'Ingrese un ciclo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
          echo $this->Form->input('materia_id', array('label' => 'Materia*', 'empty' => 'Ingrese una materia...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
      ?>		
  </br>
  </div>
  <div class="col-md-4 col-sm-4 col-xs-4">
     <div id="click_01" class="titulo_acordeon">Primer período</div>
     <div id="acordeon_01"><!--</br><div class="subtitulo">Primer período</div>-->
		<?php 		
            $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
            echo $this->Form->input('evaluacion_tipo_nota_uno_primer_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
            echo $this->Form->input('nota_uno_primer_periodo', array('label' => 'Nota 1','options' => $notaTipos, 'empty' => 'Ingrese una nota...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('evaluacion_tipo_nota_dos_primer_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_dos_primer_periodo', array('label' => 'Nota 2', 'empty' => 'Ingrese una nota...', 'options' => $notaTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('evaluacion_tipo_nota_tres_primer_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_tres_primer_periodo', array('label' => 'Nota 3', 'empty' => 'Ingrese una nota...', 'options' => $notaTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('promedio_primer_periodo', array('label' => '1º Promedio', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un valor redondeado.', 'placeholder' => 'Ingrese una nota...'));
            echo $this->Form->input('fecha_promedio_primer_periodo', array('label' => 'Fecha 1º Promedio', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
            $desarrolloTipos = array('MF' => 'Muy Frecuentemente', 'F' => 'Frecuentemente', 'PF' => 'Poco Frecuentemente', 'N' => 'Nunca');
            echo $this->Form->input('desarrollo_personalSocial_primer_periodo', array('label' => 'Desarrollo Personal y Social', 'empty' => 'Ingrese un tipo de desarrollo...', 'options' => $desarrolloTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
        ?>
      </div></br>
  <div id="click_02" class="titulo_acordeon">Segundo período</div>
     <div id="acordeon_02"><!--</br><div class="subtitulo">Segundo período</div>-->
		<?php
            echo $this->Form->input('evaluacion_tipo_nota_uno_segundo_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_uno_segundo_periodo', array('label' => 'Nota 1','options' => $notaTipos, 'empty' => 'Ingrese una nota...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('evaluacion_tipo_nota_dos_segundo_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_dos_segundo_periodo', array('label' => 'Nota 2', 'empty' => 'Ingrese una nota...', 'options' => $notaTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('evaluacion_tipo_nota_tres_segundo_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_tres_segundo_periodo', array('label' => 'Nota 3', 'empty' => 'Ingrese una nota...', 'options' => $notaTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('promedio_segundo_periodo', array('label' => '2º Promedio', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un valor redondeado.', 'placeholder' => 'Ingrese una nota...'));
            echo $this->Form->input('fecha_promedio_segundo_periodo', array('label' => 'Fecha 2º Promedio', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
            echo $this->Form->input('desarrollo_personalSocial_segundo_periodo', array('label' => 'Desarrollo Personal y Social', 'empty' => 'Ingrese un tipo de desarrollo...', 'options' => $desarrolloTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
        ?>	
     </div></br>
  <div id="click_03" class="titulo_acordeon">Tercer período</div>
     <div id="acordeon_03"><!--</br><div class="subtitulo">Tercer período</div>-->
		<?php
            echo $this->Form->input('evaluacion_tipo_nota_uno_tercer_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_uno_tercer_periodo', array('label' => 'Nota 1','options' => $notaTipos, 'empty' => 'Ingrese una nota...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('evaluacion_tipo_nota_dos_tercer_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_dos_tercer_periodo', array('label' => 'Nota 2', 'empty' => 'Ingrese una nota...', 'options' => $notaTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('evaluacion_tipo_nota_tres_tercer_periodo', array('label' => 'Tipo de evaluación', 'empty' => 'Ingrese tipo de evaluación...', 'options' => $evaluacionTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('nota_tres_tercer_periodo', array('label' => 'Nota 3', 'empty' => 'Ingrese una nota...', 'options' => $notaTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            echo $this->Form->input('promedio_tercer_periodo', array('label' => '3º Promedio', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un valor redondeado.', 'placeholder' => 'Ingrese una nota...'));
            echo $this->Form->input('fecha_promedio_tercer_periodo', array('label' => 'Fecha 3º Promedio', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
            echo $this->Form->input('desarrollo_personalSocial_tercer_periodo', array('label' => 'Desarrollo Personal y Social', 'empty' => 'Ingrese un tipo de desarrollo...', 'options' => $desarrolloTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
        ?>		
     </div></br>
  <div id="click_04" class="titulo_acordeon">Cierre</div>
     <div id="acordeon_04"><!--</br><div class="subtitulo">Cierre</div>-->
		<?php
            echo $this->Form->input('promedio_a_termino', array('label' => 'Promedio a término', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un valor con decimales.', 'placeholder' => 'Ingrese un promedio...'));
            echo $this->Form->input('fecha_promedio_a_termino', array('label' => 'Fecha Promedio a término', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
            echo $this->Form->input('nota_en_diciembre', array('label' => 'Nota en Diciembre', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un valor con decimales.', 'placeholder' => 'Ingrese una nota...'));
            echo $this->Form->input('fecha_nota_en_diciembre', array('label' => 'Fecha Nota en Diciembre', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
            echo $this->Form->input('nota_en_marzo', array('label' => 'Nota en Marzo', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un valor con decimales.', 'placeholder' => 'Ingrese una nota...'));
            echo $this->Form->input('fecha_nota_en_marzo', array('label' => 'Fecha Nota en Marzo', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
            echo $this->Form->input('promedio_final', array('label' => 'PROMEDIO FINAL', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un valor con decimales.', 'placeholder' => 'Ingrese un promedio...'));
            echo $this->Form->input('fecha_promedio_final', array('label' => 'Fecha Promedio Final', 'type' => 'text', 'between' => '<br>', 'class' => 'datepicker form-control', 'placeholder' => 'Ingrese una fecha...'));
            echo $this->Form->input('observaciones', array('between' => '<br>', 'class' => 'form-control'));
        ?>
     </div>
  </div>
</div>