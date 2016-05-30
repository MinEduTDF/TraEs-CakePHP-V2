<div class="col-md-4">
    <div class="unit">
           <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Alumno:</b> <?php echo ($this->Html->link($nota['Alumno']['nombre_completo_alumno'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['id']))); ?></span><br/>
           <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Ciclo: </b> <?php echo ($this->Html->link($nota['Ciclo']['nombre'], array('controller' => 'ciclos', 'action' => 'view', $nota['Ciclo']['id']))); ?></span><br/>
           <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Materia: </b> <?php echo ($this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['id']))); ?></span><br/>
           <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio 1º Período: </b> <?php echo $nota['Nota']['promedio_primer_periodo']; ?></span><br/>
           <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio 2º Período: </b> <?php echo $nota['Nota']['promedio_segundo_periodo']; ?></span><br/>
           <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio 3º Período: </b> <?php echo $nota['Nota']['promedio_tercer_periodo']; ?></span><br/>
           <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio Final: </b> <?php echo $nota['Nota']['promedio_final']; ?></span><br/>
	       <hr />
           <div class="text-right">
			   <span class="link"><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), array('action' => 'edit', $nota['Nota']['id']), array('class' => 'btn btn-warning','escape'=> false)); ?></span>
			   <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>', array('controller' => 'notas', 'action' => 'view', $nota['Nota']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
   			   <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('controller' => 'notas', 'action' => 'delete', $nota['Nota']['id']), array('confirm' => 'Está seguro de borrar la calificación nro '.$nota['Nota']['id'], 'class' => 'btn btn-danger','escape' => false)); ?></span> 
		   </div>
	</div>
</div>