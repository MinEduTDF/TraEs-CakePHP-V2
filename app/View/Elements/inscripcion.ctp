<div class="unit">
   	   <b>Alumnos | Legajo Nro: </b><span class="name"><?php echo ($inscripcion['Inscripcion']['alumno_id']).' | '.($inscripcion['Inscripcion']['legajo_nro']); ?></span></br>
       <b>Fecha de: alta | baja | egreso: </b><span class="date"><?php echo ($this->Html->formatTime($inscripcion['Inscripcion']['fecha_alta'])).' | '.($this->Html->formatTime($inscripcion['Inscripcion']['fecha_baja'])).' | '.($this->Html->formatTime($inscripcion['Inscripcion']['fecha_egreso'])); ?></span><br>
	   <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), null, sprintf(__('Esta seguro que desea eliminar la inscripcion nº %s?'), $inscripcion['Inscripcion']['id'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['Inscripcion']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['Inscripcion']['id'])); ?></span>
     
</div> 