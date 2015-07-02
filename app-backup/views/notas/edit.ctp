<div class="notas form">
<?php echo $this->Form->create('Nota');?>
	<fieldset>
 		<legend><?php __('Editar Nota'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_nota'); ?>
             </div>  
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar Nota', true), array('action' => 'delete', $this->Form->value('Nota.id')), null, sprintf(__('Está seguro de borrar la nota # %s?', true), $this->Form->value('Nota.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Notas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Alumno', true), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
</div>