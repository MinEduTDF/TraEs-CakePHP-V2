<div class="unit">
   	   <span class="id"><?php echo $inscripcion['Inscripcion']['id']; ?></span>
	   <b>Alumno ID: </b><span class="name"><?php echo $inscripcion['Inscripcion']['alumno_id']; ?></span></br>
       <b>Tipo de inscripcion: </b><span class="name"><?php echo $inscripcion['Inscripcion']['tipoInscripcion']; ?></span></br>
	   <b>Ciclo: </b><span class="name"><?php echo $inscripcion['Inscripcion']['ciclo_id']; ?></span></br>
	   <b>Inscripto el </b><span class="date"><?php echo $this->Html->formatTime($inscripcion['Inscripcion']['fechaInscripcion']); ?><br/></span>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), null, sprintf(__('Esta seguro que desea eliminar la inscripcion nº %s?'), $inscripcion['Inscripcion']['id'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['Inscripcion']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['Inscripcion']['id'])); ?></span>
     
</div> 