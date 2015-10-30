<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->
<!-- *********** Tooltip ************* -->
<?php echo $this->Html->script('tooltip'); ?>
<!-- ************************************** -->

<div class="row"><!--<div class="subtitulo">Datos del curso</div>-->
<div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('centro_id', array('readonly' => 'readonly', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Centro'));
		echo $this->Form->input('Ciclo', array('between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione opciones de la lista', 'placeholder' => 'Ciclo'));
		$anios = array('1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
		echo $this->Form->input('anio', array('label' =>'Año', 'options' => $anios, 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Selecciones una opción de la lista', 'placeholder' => 'Año'));
		$divisiones = array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', '1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
        echo $this->Form->input('division', array('label' => 'División', 'options' => $divisiones, 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'División'));
		$turnos = array('A distancia' => 'A distancia', 'Doble' => 'Doble', 'Intermedio' =>  'Intermedio', 'Libre' => 'Libre', 'Manana' => 'Manana', 'Noche' => 'Noche', 'Tarde' =>'Tarde', 'Vespertino' =>'Vespertino', 'Alternado' => 'Alternado', 'Manana Extendida' =>'Manana Extendida', 'Tarde Extendida' => 'Tarde Extendida', 'Doble Extendida' =>'Doble Extendida', 'Otro' =>'Otro');
        echo $this->Form->input('turno', array('label' => 'Turno', 'options' => $turnos, 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Turno'));
?>

</div><div class="col-md-6 col-sm-6 col-xs-12">
<!--<div class="subtitulo">Datos de contacto</div>-->
<?php		
		echo $this->Form->input('titulacion_id', array('label' => 'Titulación', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Titulación'));
		$tipos = array('Independiente' => 'Independiente', 'Independiente de recuperación' =>    'Independiente de recuperación', 'Independiente semipresencial' => 'Independiente semipresencial', 'Independiente presencial y semipresencial' => 'Independiente presencial y semipresencial', 'Múltiple' => 'Múltiple',   'Múltiple de recuperación' => 'Múltiple de recuperación', 'Múltiple semipresencial' => 'Múltiple semipresencial', 'Múltiple presencial y semipresencial' => 'Múltiple presencial y semipresencial', 'No Corresponde' => 'No Corresponde', 'Independiente presencial y  semipresencial (violeta)' => 'Independiente presencial y semipresencial (violeta)', 'Mixta / Bimodal' => 'Mixta / Bimodal', 'Múltiple presencial y semipresencial (violeta)' => 'Múltiple presencial y semipresencial (violeta)', 'Multinivel' => 'Multinivel', 'Multiplan' => 'Multiplan');
		echo $this->Form->input('tipo', array('options' => $tipos, 'empty' => '', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista', 'placeholder' => 'Ciclo'));
		echo $this->Form->input('aula_nro', array('label' => 'Aula Nro', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca un número de aula', 'placeholder' => 'Aula Nro'));
		echo $this->Form->input('plazas', array('between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca cantidad máxima de alumnos para esa aula', 'placeholder' => 'Plaza'));
        echo $this->Form->input('horario', array('type' => 'file', 'label' => 'Horario', 'id' => 'horario', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
?>
</div></div>