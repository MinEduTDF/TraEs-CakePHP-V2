<div class="alumnos form">
<?php echo $this->Form->create('Alumno');?>
	</br>
	<fieldset>
 		<legend><?php echo __('Editar Alumno'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_alumno'); ?>
             </div>
	</fieldset>
<?php echo $this->Form->input('id', array('type' => 'hidden'));
      echo $this->Form->end(__('Grabar'));
?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<!--<li><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $this->Form->value('Alumno.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Alumno.id'))); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index'));?></li>-->
		<!--<li><?php echo $this->Html->link(__('List Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Agregar Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Notas'), array('controller' => 'notas', 'action' => 'index')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Agregar Calificación'), array('controller' => 'notas', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
</div>