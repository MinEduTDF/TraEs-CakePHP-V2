<div class="titulacions form">
<?php echo $this->Form->create('Titulacion',array('type'=>'get','action'=>'index'));?>
	<fieldset>
 		<legend><?php echo __('Buscar'); ?></legend>
        
	<?php
		echo $this->Form->input('nombre', array('empty' => ''));
	?>
    
	</fieldset>
<?php echo $this->Form->end(__('Buscar'));?>
</div>