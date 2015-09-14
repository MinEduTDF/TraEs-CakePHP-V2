<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

<div class="row"><!--<div class="subtitulo">Datos del curso</div>-->
<div class="col-md-6 col-sm-6 col-xs-12">
<?php
		//echo $this->Form->input('curso_id');
		$nombres = array('Matematica de primero' => 'Matematica de primero',          'Matematica de segundo' => 'Matematica de segundo', 'Matematica de tercero' => 'Matematica de tercero', 'Lengua de primero' => 'Lengua de primero', 'Lengua de segundo' => 'Lengua de segundo', 'Lengua de tercero' => 'Lengua de tercero', 'Historia de primero' => 'Historia de primero', 'Historia de segundo' => 'Historia de segundo','Historia de tercero' => 'Historia de tercero');
        echo $this->Form->input('nombre', array('options' => $nombres, 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
		$alias = array('MAT1_1' => 'MAT1_1', 'MAT1_2' => 'MAT1_2', 'MAT1_3' => 'MAT1_3', 'MAT1_4' => 'MAT1_4','LEN1_1' => 'LEN1_1', 'LEN1_2' => 'LEN1_2', 'LEN1_3' => 'LEN1_3', 'LEN1_4' => 'LEN1_4', 'HIS1_1' => 'HIS1_1', 'HIS1_2' => 'HIS1_2', 'HIS1_3' => 'HIS1_3','HIS1_4' => 'HIS1_4', 'MAT2_1' => 'MAT2_1', 'MAT2_2' => 'MAT2_2', 'MAT2_3' => 'MAT2_3', 'MAT2_4' => 'MAT2_4','LEN2_1' => 'LEN2_1', 'LEN2_2' => 'LEN2_2', 'LEN2_3' => 'LEN2_3', 'LEN2_4' => 'LEN2_4', 'HIS2_1' => 'HIS2_1', 'HIS2_2' => 'HIS2_2', 'HIS2_3' => 'HIS2_3','HIS2_4' => 'HIS2_4', 'MAT3_1' => 'MAT3_1', 'MAT3_2' => 'MAT3_2', 'MAT3_3' => 'MAT3_3', 'MAT3_4' => 'MAT3_4','LEN3_1' => 'LEN3_1', 'LEN3_2' => 'LEN3_2', 'LEN3_3' => 'LEN3_3', 'LEN3_4' => 'LEN3_4', 'HIS3_1' => 'HIS3_1', 'HIS3_2' => 'HIS3_2', 'HIS3_3' => 'HIS3_3','HIS3_4' => 'HIS3_4');
		echo $this->Form->input('alia', array('options' => $alias, 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('campo_formacion', array('between' => '<br>', 'class' => 'form-control'));
		$tipos_dictado = array('Presencial' => 'Presencial', 'A Distancia - Semipresencial' => 'A                                Distancia - Semipresencial', 'A Distancia - Asistida' => 'A                                Distancia - Asistida', 'A Distancia - Abierta' => 'A Distancia -                                Abierta', 'A Distancia - Virtual' => 'A Distancia - Virtual');
		echo $this->Form->input('dictado', array('options' => $tipos_dictado, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
        $tipos_obligatoriedad = array('Obligatoria' => 'Obligatoria', 'Elegible' => 'Elegible',                                      'Optativa' => 'Optativa', 'Obligatoria reemplazable por otra                                      ' => 'Obligatoria reemplazable por otra');
		echo $this->Form->input('obligatoriedad', array('options' => $tipos_obligatoriedad,                                 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('contenido', array('between' => '<br>', 'class' => 'form-control'));
?>

</div><div class="col-md-6 col-sm-6 col-xs-12">

<?php
        $tipos_carga_horaria = array('Hora Cátedra' => 'Hora Cátedra', 'Hora Reloj' => 'Hora Reloj                                    ');
		echo $this->Form->input('carga_horaria', array('options' => $tipos_carga_horaria, 'empty'                                => '', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('carga_horaria_semanal', array('between' => '<br>', 'class' => 'form-control'));
        $tipos_duracion_en = array('Años' => 'Años', 'Cuatrimestres' => 'Cuatrimestres');
		echo $this->Form->input('duracion_en', array('options' => $tipos_duracion_en, 'empty' => '                               ', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('duracion', array('between' => '<br>', 'class' => 'form-control'));
		$tipos_escala_numerica = array('Si' => 'Si', 'No' => 'No');
		echo $this->Form->input('escala_numerica', array('options' => $tipos_escala_numerica,                                'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nota_minima', array('options' => $tipos_escala_numerica,                                'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
?>
</div>