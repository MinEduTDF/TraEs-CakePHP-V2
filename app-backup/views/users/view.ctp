<div class="users view">
</br></br>
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Id: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('NombreUsuario: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Clave: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Rol: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Puesto: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['puesto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Centro: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Centro']['id'], array('controller' => 'centros', 'action' => 'view', $$user['Centro']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Empleado: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($$user['Empleado']['id'], array('controller' => 'empleados', 'action' => 'view', $$user['Empleado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Usuario', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Esta seguro de borrar # %s?', true), $user['User']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Usuarios', true), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Usuario', true), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
