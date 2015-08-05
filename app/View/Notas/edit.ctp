<div class="notas form">
<?php echo $this->Form->create('Nota');?>
	<fieldset>
 		<legend><?php echo __('Editar Nota'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_nota'); ?>
             </div>  
	</fieldset>
<?php  echo $this->Form->input('id', array('type' => 'hidden'));
       echo $this->Form->end(__('Grabar'));
?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar Nota'), array('action' => 'delete', $this->Form->value('Nota.id')), null, sprintf(__('Está seguro de borrar la nota # %s?'), $this->Form->value('Nota.id'))); ?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Notas'), array('action' => 'index'));?></li>-->
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
</div>