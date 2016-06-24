<?php echo $this->Form->create('Ciclo',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
   <?php echo $this->Form->input('nombre', array('label' => false, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el año con formato AAAA', 'Placeholder' => 'Ingrese año del ciclo...'));?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' =>' BUSCAR', 'class' => 'btn btn-primary'));?>
</div>
