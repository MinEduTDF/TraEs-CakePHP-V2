<div class="col-md-6">
		<div class="unit">

		       <!--<span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Año: </b> <?php echo $curso['Curso']['id']; ?></span><br/>-->

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Año: </b> <?php echo $curso['Curso']['anio']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>División: </b> <?php echo $curso['Curso']['division']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Turno: </b> <?php echo $curso['Curso']['turno']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tipo: </b> <?php echo $curso['Curso']['tipo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Titulación: </b> <?php echo $curso['Curso']['titulacion_id']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Plazas: </b> <?php echo $curso['Curso']['plazas']; ?></span><br/>
                 
		       <div class="text-right">
			   <span class="link"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $curso['Curso']['id']), array('class' => 'btn btn-danger')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'cursos', 'action' => 'view', $curso['Curso']['id']), array('class' => 'btn btn-success')); ?></span>
			   </div>
		</div>
</div>