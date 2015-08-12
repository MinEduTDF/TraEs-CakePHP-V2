<div class="centros form">
<?php echo $this->Form->create('Centro',array('type'=>'get','action'=>'index'));?>
	<fieldset>
 		<legend><?php echo __('Buscar'); ?></legend>
        
	<?php
		echo $this->Form->input('cue', array('label' => 'CUE: '));
				
    ?>
    
	</fieldset>
<?php echo $this->Form->end(__('Buscar'));?>
</div>