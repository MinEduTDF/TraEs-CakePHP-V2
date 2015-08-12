<div class="unit">
   	   <span class="name"><?php echo 'Alumno: '.''.($this->Html->link($inasistencia['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $inasistencia['Alumno']['id'])));?>&nbsp;</span>
       <!--<span class="name"><?php echo 'Materia: '.''.($this->Html->link($inasistencia['Materia']['id'], array('controller' => 'materias', 'action' => 'view', $inasistencia['Materia']['id'])));?>&nbsp;</span>-->
       <span class="name"><?php echo ' | '.'Tipo: '.''.($inasistencia['Inasistencia']['tipo']);?>&nbsp;</span>
       <span class="name"><?php echo ' | '.'Causa: '.''.($inasistencia['Inasistencia']['causa']);?>&nbsp;</span>
       <span class="name"><?php echo ' | '.'Justificada: '.''.($inasistencia['Inasistencia']['justificado']);?>&nbsp;</span>
	   <span class="date"><?php echo ' | '.'Creada el: '.''.($this->Html->formatTime($inasistencia['Inasistencia']['creado']));?>&nbsp;</span>
       <span class="date"><?php echo ' | '.'Modificada el: '.''.($this->Html->formatTime($inasistencia['Inasistencia']['modificado']));?>&nbsp;</span>
       <span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $inasistencia['Inasistencia']['id']), null, sprintf(__('Esta seguro que desea eliminar la inasistencia nro %s?'), $inasistencia['Inasistencia']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'inasistencias', 'action' => 'edit', $inasistencia['Inasistencia']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'inasistencias', 'action' => 'view', $inasistencia['Inasistencia']['id'])); ?></span>
</div> 
