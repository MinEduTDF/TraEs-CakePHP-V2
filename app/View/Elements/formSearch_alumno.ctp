<div class="alumnos form">
<?php echo $this->Form->create('Alumno',array('type'=>'get','action'=>'index'));?>
	<fieldset>
 		<legend><?php echo __('Buscar'); ?></legend>
        
	<?php
		echo $this->Form->input('documento_nro');
	?>
    </fieldset>
<?php echo $this->Form->end(__('Buscar'));?>
</div>