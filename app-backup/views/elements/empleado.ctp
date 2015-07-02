<div class="unit">
   	   <span class="id"><?php echo $empleado['Empleado']['id']; ?></span>
       <span class="name"><?php echo $empleado['Empleado']['apellido'].' '.$empleado['Empleado']['primerNombre']; ?></span><br/>
       <span class="text">Tel: <?php echo $empleado['Empleado']['telefono']; ?></span><br/>
       <span class="text">Email: <?php echo $this->Html->link($empleado['Empleado']['email'],'mailto:'.$empleado['Empleado']['email']); ?></span><br/>
       <span class="text">Ciudad: <?php echo $empleado['Empleado']['ciudad']; ?></span><br/>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $empleado['Empleado']['id']), null, sprintf(__('Esta seguro que desea borrar al empleado %s?', true), $empleado['Empleado']['apellido'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'empleados', 'action' => 'edit', $empleado['Empleado']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'empleados', 'action' => 'view', $empleado['Empleado']['id'])); ?></span>
     
</div> 