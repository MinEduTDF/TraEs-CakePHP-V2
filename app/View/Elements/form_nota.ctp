<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->
<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

  <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-4">

<?php
		echo $this->Form->input('alumno_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('ciclo_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('materia_id', array('between' => '<br>', 'class' => 'form-control'));
?>		
</br>

</div><div class="col-md-4 col-sm-4 col-xs-4">

<div id="click_01" class="titulo_acordeon">Primer período</div>
<div id="acordeon_01">

 <!--</br><div class="subtitulo">Primer período</div>-->
<?php 		
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_uno_primer_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_uno_primer_periodo', array('label' => 'Nota 1','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_dos_primer_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_dos_primer_periodo', array('label' => 'Nota 2','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_tres_primer_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_tres_primer_periodo', array('label' => 'Nota 3','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
		echo $this->Form->input('promedio_primer_periodo', array('label' => '1º Promedio','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_promedio_primer_periodo', array('type' => 'text', 'between' => '<br>', 'label' => 'Fecha 1º Promedio', 'empty' => '','class' => 'datepicker form-control'));
        $desarrolloTipos = array('MF' => 'Muy Frecuentemente', 'F' => 'Frecuentemente', 'PF' => 'Poco Frecuentemente', 'N' => 'Nunca');
		echo $this->Form->input('desarrollo_personalSocial_primer_periodo', array('label' => 'Desarrollo Personal y Social','options' => $desarrolloTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de desarrollo'));
?>
</div>

</br>
<div id="click_02" class="titulo_acordeon">Segundo período</div>
<div id="acordeon_02">
		
 <!--</br><div class="subtitulo">Segundo período</div>-->
<?php
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_uno_segundo_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_uno_segundo_periodo', array('label' => 'Nota 1','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_dos_segundo_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_dos_segundo_periodo', array('label' => 'Nota 2','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_tres_segundo_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_tres_segundo_periodo', array('label' => 'Nota 3','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
		echo $this->Form->input('promedio_segundo_periodo', array('label' => '2º Promedio','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_promedio_segundo_periodo', array('type' => 'text', 'between' => '<br>', 'label' => 'Fecha 2º Promedio', 'empty' => '','class' => 'datepicker form-control'));
        $desarrolloTipos = array('MF' => 'Muy Frecuentemente', 'F' => 'Frecuentemente', 'PF' => 'Poco Frecuentemente', 'N' => 'Nunca');
		echo $this->Form->input('desarrollo_personalSocial_segundo_periodo', array('label' => 'Desarrollo Personal y Social','options' => $desarrolloTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de desarrollo'));
?>	
</div>

</br>
<div id="click_03" class="titulo_acordeon">Tercer período</div>
<div id="acordeon_03">

 <!--</br><div class="subtitulo">Tercer período</div>-->
<?php
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_uno_tercer_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_uno_tercer_periodo', array('label' => 'Nota 1','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_dos_tercer_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_dos_tercer_periodo', array('label' => 'Nota 2','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
        $evaluacionTipos = array('1' => 'Producción (en cualquier lenguaje)', '2' => 'Instancia Oral', '3' => 'Instancia Escrita', '4' => 'Otros');
		echo $this->Form->input('evaluacion_tipo_nota_tres_tercer_periodo', array('label' => 'Tipo de evaluación','options' => $evaluacionTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de evaluación'));
        $notaTipos = array('E' => 'Excelente', 'MB' => 'Muy Bien', 'B' => 'Bien', 'R' => 'Regular', 'NS' => 'No Satisfactorio');
		echo $this->Form->input('nota_tres_tercer_periodo', array('label' => 'Nota 3','options' => $notaTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de nota'));
    	echo $this->Form->input('promedio_tercer_periodo', array('label' => '3º Promedio','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_promedio_tercer_periodo', array('type' => 'text', 'between' => '<br>', 'label' => 'Fecha 3º Promedio', 'empty' => '','class' => 'datepicker form-control'));
        $desarrolloTipos = array('MF' => 'Muy Frecuentemente', 'F' => 'Frecuentemente', 'PF' => 'Poco Frecuentemente', 'N' => 'Nunca');
		echo $this->Form->input('desarrollo_personalSocial_tercer_periodo', array('label' => 'Desarrollo Personal y Social','options' => $desarrolloTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Tipo de desarrollo'));
?>		
</div>

</br>
<div id="click_04" class="titulo_acordeon">Cierre</div>
<div id="acordeon_04">

<!--</br><div class="subtitulo">Cierre</div>-->

<?php
		echo $this->Form->input('promedio_a_termino', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_promedio_a_termino', array('type' => 'text', 'between' => '<br>', 'label' => 'Fecha Promedio a término', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('nota_en_diciembre', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_en_diciembre', array('type' => 'text', 'between' => '<br>', 'label' => 'Fecha Nota en Diciembre', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('nota_en_marzo', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_en_marzo', array('type' => 'text', 'between' => '<br>', 'label' => 'Fecha Nota en Marzo', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('promedio_final', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_promedio_final', array('type' => 'text', 'between' => '<br>', 'label' => 'Fecha Promedio Final', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('observaciones', array('between' => '<br>', 'class' => 'form-control'));
?>
</div>
</div></div>