<div class="cursos form">
<?php echo $this->Form->create('Curso',array('type'=>'get','action'=>'index'));?>
	<fieldset>
 		<legend><?php echo __('Buscar'); ?></legend>
        
	<?php
		echo $this->Form->input('tipo', array('empty' => ''));
		echo $this->Form->input('anio', array('empty' => ''));
		echo $this->Form->input('division', array('empty' => ''));
		echo $this->Form->input('turno', array('empty' => ''));
		echo $this->Form->input('titulacion', array('empty' => ''));
	?>
    
	</fieldset>
<?php echo $this->Form->end(__('Buscar'));?>
</div>