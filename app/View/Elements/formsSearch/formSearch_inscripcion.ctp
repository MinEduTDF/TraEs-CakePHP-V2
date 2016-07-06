<?php echo $this->Form->create('Inscripcion',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
   <?php echo $this->Form->input('legajo_nro', array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese nº de legajo...'));	?>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>
