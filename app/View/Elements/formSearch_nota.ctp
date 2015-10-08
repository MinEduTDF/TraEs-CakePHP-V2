
<?php echo $this->Form->create('Nota',array('type'=>'get','action'=>'index'));?>

<?php echo $this->Form->input('alumno_id', array('empty' => '','class' => 'form-control'));	?>

<?php echo $this->Form->input('ciclo_id', array('empty' => '','class' => 'form-control'));	?>

<?php echo $this->Form->input('materia_id', array('empty' => '','class' => 'form-control'));	?>
</p><div class="text-center">
			<?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-success btn-lg'));?>
	</div>
