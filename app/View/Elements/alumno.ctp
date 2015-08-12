<div class="unit">
   	   <b>Documento Tipo | Número: </b><span class="name"><?php echo ($alumno['Alumno']['documento_tipo']).' | '.($alumno['Alumno']['documento_nro']); ?></span><br/>
       <b>Apellido | Nombre: </b><span class="name"><?php echo $alumno['Alumno']['apellidos'].' '.$alumno['Alumno']['nombres']; ?></span><br/>
       <b>Tel | Email: </b><span class="text"><?php echo ($alumno['Alumno']['telefono_nro']).' | '.($this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email'])); ?></span><br/>
       <span class="text">Ciudad: <?php echo $alumno['Alumno']['ciudad']; ?></span><br/>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $alumno['Alumno']['id']), null, sprintf(__('Esta seguro que desea borrar al alumno %s?'), $alumno['Alumno']['apellidos'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'alumnos', 'action' => 'edit', $alumno['Alumno']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'alumnos', 'action' => 'view', $alumno['Alumno']['id'])); ?></span>
</div> 