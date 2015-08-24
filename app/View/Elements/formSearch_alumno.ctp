
<?php echo $this->Form->create('Alumno',array('type'=>'get','action'=>'index'));?>
<?php echo $this->Form->input('documento_nro' , array('label' => 'Nro de Documento: ','class' => 'form-control'));	?>
</p><div class="text-center">
			<?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-success'));?>
	</div>