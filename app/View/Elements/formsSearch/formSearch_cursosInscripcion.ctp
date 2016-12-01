<?php echo $this->Form->create('CursosInscripcion',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<div class="form-group">
   <?php echo $this->Form->input('curso_id', array('label' => false, 'empty' => 'Ingrese un curso...', 'class' => 'form-control'));	?>
</div>
<hr>
<div class="form-group">
   <?php echo $this->Form->input('inscripcion_id', array('label' => false, 'empty' => 'Ingrese un nº de legajo...', 'class' => 'form-control'));	?>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>
