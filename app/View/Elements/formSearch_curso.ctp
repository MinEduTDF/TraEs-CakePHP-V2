<?php echo $this->Form->create('Curso',array('type'=>'get','action'=>'index'));?>
<div class="form-group">
	<?php
        $anios = array('1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
        echo $this->Form->input('anio', array('label' => false, 'empty' => '-- Seleccione un año --', 'options' => $anios, 'class' => 'form-control'));
    ?><br>
    <?php
	    $divisiones = array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', '1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
        echo $this->Form->input('division', array('label' => false, 'empty' => '-- Seleccione una división --', 'options' => $divisiones, 'class' => 'form-control'));
    ?><br>
    <?php
	    $turnos = array('A distancia' => 'A distancia', 'Doble' => 'Doble', 'Intermedio' =>  'Intermedio', 'Libre' => 'Libre', 'Mañana' => 'Mañana', 'Noche' => 'Noche', 'Tarde' =>'Tarde', 'Vespertino' =>'Vespertino', 'Alternado' => 'Alternado', 'Manana Extendida' =>'Manana Extendida', 'Tarde Extendida' => 'Tarde Extendida', 'Doble Extendida' =>'Doble Extendida', 'Otro' =>'Otro');
        echo $this->Form->input('turno', array('label' => false, 'empty' => '-- Seleccione un turno --', 'options' => $turnos, 'class' => 'form-control'));
	?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>