<div class="centros form">

<?php echo $this->Form->create('Centro');?>
	<fieldset>
 		<legend><?php __('Agregar Centro'); ?></legend>
	          <div id="main">
                    <?php echo $this->element('form_centro'); ?>
              </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>

</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('action' => 'index'));?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Alumno', true), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripcions', true), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Modalidads', true), array('controller' => 'modalidads', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Modalidad', true), array('controller' => 'modalidads', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Orientaciones', true), array('controller' => 'orientacions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Orientacion', true), array('controller' => 'orientacions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
</div>