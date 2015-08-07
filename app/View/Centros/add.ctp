<div class="centros form">
<?php echo $this->Form->create('Centro');?>
	<fieldset>
 		<legend><?php echo __('Agregar Centro'); ?></legend>
	          <div id="main">
                    <?php echo $this->element('form_centro'); ?>
              </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>

</div>
<!--<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Centros'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Modalidads'), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidad'), array('controller' => 'modalidads', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Orientaciones'), array('controller' => 'orientacions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Orientacion'), array('controller' => 'orientacions', 'action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar Inasistencias'), array('controller' => 'inasistencias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Agegar Inasistencias'), array('controller' => 'inasistencias', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?></li>
	</ul>
</div>-->
</div>