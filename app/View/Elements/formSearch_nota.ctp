<?php echo $this->Form->create('Nota',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
    <?php echo $this->Form->input('alumno_id', array('label' => false, 'empty' => 'Ingrese un alumno...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));?>
    <br>
    <?php echo $this->Form->input('ciclo_id', array('label' => false, 'empty' => 'Ingrese un ciclo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));?>
    <br>
    <?php echo $this->Form->input('materia_id', array('label' => false, 'empty' => 'Ingrese una materia...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>