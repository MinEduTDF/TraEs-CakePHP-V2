<div class="users form">
<?php echo $this->Form->create('User');?>
	</br>
	<fieldset>
 		<legend><?php __('Agregar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		$roles = array('administrador' => 'administrador',
		               'administrativo_jurisdiccional' => 'administrativo_jurisdiccional', 
					   'administrativo_institucional_docentes' => 'administrativo_institucional_docentes',
					   'administrativo_institucional_alumnos' => 'administrativo_institucional_alumnos');
        echo $this->Form->input('role', array('options' => $roles, 'empty' => ''));
		$puestos = array('Altas_Bajas' => 'Altas_Bajas', 'Licencias' => 'Licencias');
        echo $this->Form->input('puesto', array('options' => $puestos, 'empty' => ''));
		echo $this->Form->input('centro_id');
		echo $this->Form->input('empleado_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<!--<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
	</ul>
</div>-->