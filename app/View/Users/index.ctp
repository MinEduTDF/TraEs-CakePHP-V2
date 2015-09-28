<!-- app/View/Users/index.ctp -->
<div class="users form">
<!-- start main -->
<div class="TituloSec">Administracion de Usuarios</div>
<div id="ContenidoSec">
<div class="table-responsive">
  <table class="table table-condensed">
    <thead>
		<tr>
			<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
			<th><?php echo $this->Paginator->sort('username', 'Usuario');?>  </th>
			<th><?php echo $this->Paginator->sort('role','Rol');?></th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
   			<th><?php echo $this->Paginator->sort('puesto', 'Puesto');?></th>
			<!--<th><?php echo $this->Paginator->sort('centro_id', 'Centro');?></th>-->
            <th><?php echo $this->Paginator->sort('empleado_id', 'Empleado');?></th>
            <th><?php echo $this->Paginator->sort('created', 'Creado');?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado');?></th>
			<th><?php echo $this->Paginator->sort('status','Estado');?></th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
			<td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>
			<td style="text-align: center;"><?php echo $user['User']['role']; ?></td>
			<td style="text-align: center;"><?php echo $this->Html->link($user['User']['email'], 'mailto:'.$user['User']['email']); ?></td>
            <td style="text-align: center;"><?php echo $user['User']['puesto']; ?></td>
            <!--<td style="text-align: center;"><?php echo $user['User']['centro_id']; ?></td>-->
            <td style="text-align: center;"><?php echo $this->Html->link($user['User']['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $user['User']['empleado_id'])); ?></td>
			<td style="text-align: center;"><?php echo $this->Html->formatTime($user['User']['created']); ?></td>
			<td style="text-align: center;"><?php echo $this->Html->formatTime($user['User']['modified']); ?></td>
			<td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
			<td >
			<?php echo $this->Html->link("Editar", array('action'=>'edit', $user['User']['id']) ); ?> | 
			<?php
				if( $user['User']['status'] != 0){ 
					echo $this->Html->link("Borrar", array('action'=>'delete', $user['User']['id']));}else{
					echo $this->Html->link("Reactivar", array('action'=>'activate', $user['User']['id']));
					}
			?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>
</div>

<!--<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>-->
</div>				
<!--<div id="second-nav">
 	  <span class="link"><?php echo $this->Html->link('Agregar usuario', array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-primary')); ?></span>
</div>-->

<!--<?php echo $this->Html->link( "Crear usuario",   array('action'=>'add'),array('escape' => false) ); ?>
<br/>
<?php 
//echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
?>-->

<!--<div class="users index">
	</br></br>
	<h2><?php echo __('Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombreUsuario');?></th>
			<th><?php echo $this->Paginator->sort('clave');?></th>
			<th><?php echo $this->Paginator->sort('role');?></th>
			<th><?php echo $this->Paginator->sort('puesto');?></th>
			<th><?php echo $this->Paginator->sort('centro_id');?></th>
			<th><?php echo $this->Paginator->sort('empleado_id');?></th>
			<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['role']; ?>&nbsp;</td>
		<td><?php echo $user['User']['puesto']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $user['Centro']['sigla'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Empleado']['apellido'], array('controller' => 'empleados', 'action' => 'view', $user['Empleado']['apellido'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Està seguro de borrar # %s?'), $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>-->
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>

    <!--<p><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?></p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior'), array(), null, array('class'=>'disabled'));?>
	  	<?php echo $this->Paginator->numbers();?>
 
		<?php echo $this->Paginator->next(__('siguiente') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>-->
</div>
<!--<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
</div>