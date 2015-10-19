<div class="col-md-6">
		<div class="unit">
		       <span class="name"><span class="glyphicon glyphicon-file"></span> <b>Documento:</b> <?php echo ($alumno['Alumno']['documento_tipo']).'  '.($alumno['Alumno']['documento_nro']); ?></span><br/>
		       <span class="name"><span class="glyphicon glyphicon-user"></span> <b>Nombre:</b> <?php echo $alumno['Alumno']['apellidos'].' '.$alumno['Alumno']['nombres']; ?></span><br/>
		       <span class="text"><span class="glyphicon glyphicon-earphone"></span> <b>Tel:</b> <?php echo $alumno['Alumno']['telefono_nro']; ?></span><br/>
		       <span class="text"><span class="glyphicon glyphicon-envelope"></span> <b>Email:</b> <?php echo $this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email']); ?></span><br/>
		       <span class="text"><span class="glyphicon glyphicon-map-marker"></span> <b>Domicilio:</b> <?php echo ($alumno['Alumno']['barrio'].' '.$alumno['Alumno']['calle_nombre'].' '.$alumno['Alumno']['calle_nro']); ?></span><br/>
		       <div class="text-right">
			   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'alumnos', 'action' => 'edit', $alumno['Alumno']['id']), array('class' => 'btn btn-warning')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'alumnos', 'action' => 'view', $alumno['Alumno']['id']), array('class' => 'btn btn-success')); ?></span>
  			   <span class="link"><?php echo $this->Html->link('Borrar', array('controller' => 'alumnos', 'action' => 'delete', $alumno['Alumno']['id']), array('confirm' => 'Está seguro de borrar a '.$alumno['Alumno']['nombre_completo_alumno'], 'class' => 'btn btn-danger')); ?></span>
			   </div>
		</div>
</div>