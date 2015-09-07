<?php echo $this->Form->create('Curso',array('type'=>'get','action'=>'index'));?>
<?php
		$anios = array('1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
        echo $this->Form->input('anio', array('options' => $anios, 'empty' => '','class' => 'form-control'));
		$divisiones = array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', '1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
		echo $this->Form->input('division', array('options' => $divisiones, 'empty' => '','class' => 'form-control'));
		$turnos = array('A distancia' => 'A distancia', 'Doble' => 'Doble', 'Intermedio' =>  'Intermedio', 'Libre' => 'Libre', 'Manana' => 'Manana', 'Noche' => 'Noche', 'Tarde' =>'Tarde', 'Vespertino' =>'Vespertino', 'Alternado' => 'Alternado', 'Manana Extendida' =>'Manana Extendida', 'Tarde Extendida' => 'Tarde Extendida', 'Doble Extendida' =>'Doble Extendida', 'Otro' =>'Otro');
        echo $this->Form->input('turno', array('options' => $turnos, 'empty' => '','class' => 'form-control'));?>
</p><div class="text-center">
<?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-success'));?>
	</div>