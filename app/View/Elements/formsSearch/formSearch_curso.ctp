<?php echo $this->Form->create('Curso',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
	<?php
        $anios = array('1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to', '6to' => '6to');
        echo $this->Form->input('anio', array('label' =>false, 'empty' => 'Ingrese un año...', 'options' => $anios, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Selecciones una opción de la lista'));
    ?><br>
    <?php
		$divisiones = array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F',
							'G' => 'G', 'H' => 'H'/*, '1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', 
							'4to' => '4to', '5to' => '5to', '6to' => '6to'*/);
		echo $this->Form->input('division', array('label' => false, 'empty' => 'Ingrese una división...', 'options' => $divisiones, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
    ?><br>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>