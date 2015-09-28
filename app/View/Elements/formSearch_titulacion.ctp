
<?php echo $this->Form->create('Titulacion',array('type'=>'get','action'=>'index'));?>
<?php echo $this->Form->input('nombre', array('label' => 'Nombre: ','class' => 'form-control'));	?>
</p><div class="text-center">
			<?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-success'));?>
	</div>