<div class="unit">
   	   <span class="id"><?php echo $curso['Curso']['id']; ?></span>
	   <b>Tipo: </b><span class="name"><?php echo $curso['Curso']['tipo']; ?></span>
       <b>Año: </b><span class="name"><?php echo $curso['Curso']['anio']; ?></span><br>
       <b>División: </b><span class="name"><?php echo $curso['Curso']['division']; ?></span><br>
	   <b>Turno: </b><span class="name"><?php echo $curso['Curso']['turno']; ?></span><br>
       <b>Titulación: </b><span class="name"><?php echo $this->Html->link($curso['Titulacion']['id'], array('controller' => 'titulacions', 'action' => 'view', $curso['Titulacion']['id'])); ?></span><br>
       <b>Plazas: </b><span class="name"><?php echo $curso['Curso']['plazas']; ?></span><br>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), null, sprintf(__('Esta seguro que desea eliminar la inscripcion nº %s?'), $inscripcion['Inscripcion']['id'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'cursos', 'action' => 'edit', $curso['Curso']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'cursos', 'action' => 'view', $curso['Curso']['id'])); ?></span>
     
</div>