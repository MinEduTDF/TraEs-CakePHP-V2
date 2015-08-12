<div class="alumnos form">

<?php echo $this->Form->create('Alumno');?>
	<fieldset>
 		<legend><?php echo __('Agregar Alumno'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_alumno'); ?>
             </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index'));?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
	</ul>
</div>