<div class="titulos form">
<?php echo $this->Form->create('Titulo');?>
	<fieldset>
 		<legend><?php echo __('Agrega Titulo'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		//echo $this->Form->input('tipo');
		$tipos = array('Bachiller' => 'Bachiller', 'Tecnico' => 'Tecnico', 'Tecnico Superior' => 'Tecnico Superior', 'Universitario Pregrado' => 'Universitario Pregrado', 'Universitario Grado' => 'Universitario Grado');
        echo $this->Form->input('tipo', array('options' => $tipos, 'empty' => ''));
		echo $this->Form->input('institucion');
		echo $this->Form->input('docente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Titulos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
	</ul>
</div>