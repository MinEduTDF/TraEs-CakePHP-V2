<?php echo $this->Form->create('Inasistencia',array('type'=>'get','action'=>'index'));?>
<div class="form-group">
	<?php 
	    echo $this->Form->input('alumno_id', array('label' => false, 'empty' => '-- Seleccione un alumno --', 'class' => 'form-control'));
	?><br>
    <?php 
	    $tipos = array('un cuarto' => 'un cuarto' ,'media' => 'media', 'completa' => 'completa');
        echo $this->Form->input('tipo', array('label' => false, 'empty' => '-- Seleccione un tipo --', 'options' => $tipos, 'class' => 'form-control'));
    ?><br>
    <?php
		$tipos_justificado = array('Si' => 'Si', 'No' => 'No', 'Pendiente' => 'Pendiente');
		echo $this->Form->input('justificado', array('label' => false, 'empty' => '-- Seleccione un justificado --', 'options' => $tipos_justificado, 'class' => 'form-control'));
    ?><br> 
    <?php
		$tipos_causa = array('Sin causa' => 'Sin causa', 'Razones particulares' => 'Razones particulares', 'Enfermedad' => 'Enfermedad', 'Fenómenos meteorológicos' => 'Fenómenos meteorológicos', 'Donación de sangre' => 'Donación de sangre', 'Obligaciones cívico_militares' => 'Obligaciones cívico_militares', 'Paro de transporte' => 'Paro de transporte');
		echo $this->Form->input('causa', array('label' => false, 'empty' => '-- Seleccione una causa --', 'options' => $tipos_causa, 'class' => 'form-control'));
    ?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>