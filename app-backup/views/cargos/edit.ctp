<div class="cargos form">
<?php echo $this->Form->create('Cargo');?>
	</br>
	<fieldset>
 		<legend><?php __('Editar Cargo'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_cargo'); ?>
           </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<!--<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Cargo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Cargo.id'))); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('action' => 'index'));?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Ciclos', true), array('controller' => 'ciclos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Ciclo', true), array('controller' => 'ciclos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Horarios', true), array('controller' => 'horarios', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Horario', true), array('controller' => 'horarios', 'action' => 'add')); ?> </li>-->
	</ul>
</div>