<div class="col-md-5">
		<div class="unit">
   	           <span class="name"><span class="glyphicon glyphicon-user"></span> <b>Alumno:</b> <?php echo ($this->Html->link($inasistencia['Inasistencia']['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $inasistencia['Inasistencia']['alumno_id']))); ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-folder-open"></span> <b>Materia:</b> <?php echo ($this->Html->link($inasistencia['Inasistencia']['materia_id'], array('controller' => 'materias', 'action' => 'view', $inasistencia['Inasistencia']['materia_id'])));?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tipo:</b> <?php echo ($inasistencia['Inasistencia']['tipo']);?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Causa:</b> <?php echo ($inasistencia['Inasistencia']['causa']);?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Justificada:</b> <?php echo ($inasistencia['Inasistencia']['justificado']);?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Fecha:</b> <?php echo ($this->Html->formatTime($inasistencia['Inasistencia']['creado']));?></span><br/>
     
              <!--<span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Modificada el:</b> <?php echo ($this->Html->formatTime($inasistencia['Inasistencia']['modificado']));?></span><br/>-->    
               
	   <div class="text-right">
			   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'inasistencias', 'action' => 'edit', $inasistencia['Inasistencia']['id']), array('class' => 'btn btn-danger')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'inasistencias', 'action' => 'view', $inasistencia['Inasistencia']['id']), array('class' => 'btn btn-success')); ?></span>
               	   <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $inasistencia['Inasistencia']['id']), null, sprintf(__('Esta seguro que desea eliminar la inasistencia nº %s?'), $inasistencia['Inasistencia']['id'])); ?></span>-->

			   </div>
		</div>
</div>
