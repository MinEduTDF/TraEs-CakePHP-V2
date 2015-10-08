
<?php echo $this->Form->create('Centro',array('type'=>'get','action'=>'index'));?>
<?php echo $this->Form->input('cue', array('label' => 'CUE: ','class' => 'form-control'));	?>
</p><div class="text-center">
			<?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-success btn-lg'));?>
	</div>