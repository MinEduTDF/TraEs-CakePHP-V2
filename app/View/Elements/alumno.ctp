<div class="col-md-6">
    <div class="unit">
           <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center">
                <?php if($alumno['Alumno']['pendiente'] == false): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../files/alumno/foto/' . $alumno['Alumno']['foto_dir'] . '/' . 'thumb_' .$alumno['Alumno']['foto'], array('class' => 'img-thumbnail img-responsive img-rounded')); ?>
                <?php endif; ?>
                <?php if($alumno['Alumno']['pendiente'] == true): ?>
                         <span class="error"></span><?php echo $this->Html->image('../files/alumno/foto/' . $alumno['Alumno']['foto_dir'] . '/' . 'thumb_' .$alumno['Alumno']['foto'], array('class' => 'img-responsive img-rounded img-thumbnail')); ?>
                <?php endif; ?>
           </div>
           <span class="name"><span class="glyphicon glyphicon-file"></span> <?php echo ($alumno['Alumno']['documento_tipo']).'  '.($alumno['Alumno']['documento_nro']); ?></span><br/>
           <span class="name"><span class="glyphicon glyphicon-user"></span> <?php echo $alumno['Alumno']['nombre_completo_alumno']; ?></span></br>
           <span class="text"><span class="glyphicon glyphicon-earphone"></span> <?php echo $alumno['Alumno']['telefono_nro']; ?></span><br/>
           <span class="text"><span class="glyphicon glyphicon-envelope"></span> <?php echo $this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email']); ?></span><br/>
           <span class="text"><span class="glyphicon glyphicon-map-marker"></span> <?php echo ($alumno['Alumno']['barrio'].' '.$alumno['Alumno']['calle_nombre'].' '.$alumno['Alumno']['calle_nro']); ?></span><br/>
           <hr />
           <div class="text-right">
               <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-edit"></i>', array('controller' => 'alumnos', 'action' => 'edit', $alumno['Alumno']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
               <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-eye-open"></i>', array('controller' => 'alumnos', 'action' => 'view', $alumno['Alumno']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
               <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-trash"></i>', array('controller' => 'alumnos', 'action' => 'delete', $alumno['Alumno']['id']), array('confirm' => 'Está seguro de borrar a '.$alumno['Alumno']['nombre_completo_alumno'], 'class' => 'btn btn-danger','escape' => false)); ?></span>
           </div>
    </div>
</div>
