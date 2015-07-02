<div class="unit">
   	   <span class="id"><?php echo $alumno['Alumno']['id']; ?></span>
       <span class="name"><?php echo $alumno['Alumno']['apellido'].' '.$alumno['Alumno']['primerNombre']; ?></span><br/>
       <span class="text">Tel: <?php echo $alumno['Alumno']['telefono']; ?></span><br/>
       <span class="text">Email: <?php echo $this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email']); ?></span><br/>
       <span class="text">Ciudad: <?php echo $alumno['Alumno']['ciudad']; ?></span><br/>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $alumno['Alumno']['id']), null, sprintf(__('Esta seguro que desea borrar al alumno %s?', true), $alumno['Alumno']['apellido'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'alumnos', 'action' => 'edit', $alumno['Alumno']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'alumnos', 'action' => 'view', $alumno['Alumno']['id'])); ?></span>
     
</div> 