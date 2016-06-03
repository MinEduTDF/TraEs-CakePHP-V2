<div class="col-md-6">
	 <div class="unit">
         <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center">
                <?php if($inscripcion['Inscripcion']['estado'] == true): ?>
                         <span class="checked"></span><?php echo $this->Html->image('../img/inscription_image.png', array('class' => 'img-thumbnail img-responsive')); ?>
                <?php endif; ?>
                <?php if($inscripcion['Inscripcion']['estado'] == false): ?>
                         <span class="error"></span><?php echo $this->Html->image('../img/inscription_image.png', array('class' => 'img-thumbnail img-responsive')); ?>
                <?php endif; ?>
         </div>
         <span class="name"><span class="glyphicon glyphicon-user"></span> <b>Legajo Nro:</b> <?php echo $inscripcion['Inscripcion']['legajo_nro']; ?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Alta:</b> <?php echo $this->Html->formatTime($inscripcion['Inscripcion']['fecha_alta']);?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Baja:</b> <?php echo $this->Html->formatTime($inscripcion['Inscripcion']['fecha_baja']);?></span><br/> 		   
         <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Egreso:</b> <?php echo $this->Html->formatTime($inscripcion['Inscripcion']['fecha_egreso']);?></span><br/>       
	     <hr />
         <div class="text-right">
<<<<<<< HEAD
             <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>', array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['Inscripcion']['id']), array('confirm' => 'Está seguro de borrar la inscripción nro.'.$inscripcion['Inscripcion']['id'], 'class' => 'btn btn-danger','escape' => false)); ?></span> 
=======
             <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-edit"></i>', array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>', array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-trash"></i>', array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['Inscripcion']['id']), array('confirm' => 'Está seguro de borrar la inscripción nro.'.$inscripcion['Inscripcion']['id'], 'class' => 'btn btn-danger','escape' => false)); ?></span> 
>>>>>>> estilos_botones_view
		 </div>
	 </div>
</div>