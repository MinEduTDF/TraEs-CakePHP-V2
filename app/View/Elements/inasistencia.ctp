<div class="col-md-6">
    <div class="unit">
         <span class="name"><span class="glyphicon glyphicon-user"></span> <b>Alumno:</b> <?php echo ($this->Html->link($inasistencia['Alumno']['nombre_completo_alumno'], array('controller' => 'alumnos', 'action' => 'view', $inasistencia['Alumno']['id']))); ?></span><br/>
         <!--<span class="name"><span class="glyphicon glyphicon-folder-open"></span> <b>Materia:</b> <?php echo ($this->Html->link($inasistencia['Inasistencia']['materia_id'], array('controller' => 'materias', 'action' => 'view', $inasistencia['Inasistencia']['materia_id'])));?></span><br/>-->
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tipo:</b> <?php echo ($inasistencia['Inasistencia']['tipo']);?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Causa:</b> <?php echo ($inasistencia['Inasistencia']['causa']);?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Justificada:</b> <?php echo ($inasistencia['Inasistencia']['justificado']);?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Fecha:</b> <?php echo ($this->Html->formatTime($inasistencia['Inasistencia']['created']));?></span><br/>
         <div class="text-right">
             <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'inasistencias', 'action' => 'edit', $inasistencia['Inasistencia']['id']), array('class' => 'btn btn-warning')); ?></span>
             <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'inasistencias', 'action' => 'view', $inasistencia['Inasistencia']['id']), array('class' => 'btn btn-success')); ?></span>
             <span class="link"><?php echo $this->Html->link('Borrar', array('controller' => 'inasistencias', 'action' => 'delete', $inasistencia['Inasistencia']['id']), array('confirm' => 'Está seguro de borrar la inasistencia nro.'.$inasistencia['Inasistencia']['id'], 'class' => 'btn btn-danger')); ?></span> 
         </div>
    </div>     
</div>
