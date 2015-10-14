<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

  <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">

<?php

        echo $this->Form->input('creado', array('type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('ciclo_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('Curso', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('alumno_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('Materia', array('between' => '<br>', 'class' => 'form-control'));
		$tipos_causa = array('Sin causa' => 'Sin causa', 'Razones particulares' => 'Razones particulares', 'Enfermedad' => 'Enfermedad', 'Fenómenos meteorológicos' => 'Fenómenos meteorológicos', 'Donación de sangre' => 'Donación de sangre', 'Obligaciones cívico_militares' => 'Obligaciones cívico_militares', 'Paro de transporte' => 'Paro de transporte');

echo '</div><div class="col-md-6 col-sm-6 col-xs-12">';

        echo $this->Form->input('causa', array('options' => $tipos_causa, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
        $tipos = array('un cuarto' => 'un cuarto' ,'media' => 'media', 'completa' => 'completa');
        echo $this->Form->input('tipo', array('options' => $tipos, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
		$tipos_justificado = array('Si' => 'Si', 'No' => 'No', 'Pendiente' => 'Pendiente');
        echo $this->Form->input('justificado', array('options' => $tipos_justificado, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('certificacion', array('type' => 'file', 'label' => 'Certificación', 'id' => 'certificacion', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
?>

</div></div>