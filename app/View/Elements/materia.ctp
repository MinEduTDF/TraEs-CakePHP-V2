<div class="col-md-6">
		<div class="unit">

		       <!--<span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Año: </b> <?php echo $curso['Curso']['id']; ?></span><br/>-->

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Alia: </b> <?php echo $materia['Materia']['alia']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Campo de formación: </b> <?php echo $materia['Materia']['campo_formacion']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Dictado: </b> <?php echo $materia['Materia']['dictado']; ?></span><br/>

               <!--<span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tipo: </b> <?php echo $curso['Curso']['tipo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Titulación: </b> <?php echo $curso['Curso']['titulacion_id']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Plazas: </b> <?php echo $curso['Curso']['plazas']; ?></span><br/>-->
                 
		       <div class="text-right">
			   <span class="link"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $materia['Materia']['id']), array('class' => 'btn btn-warning')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'materias', 'action' => 'view', $materia['Materia']['id']), array('class' => 'btn btn-success')); ?></span>
               <span class="link"><?php echo $this->Html->link('Borrar', array('controller' => 'materias', 'action' => 'delete', $materia['Materia']['id']), array('confirm' => 'Está seguro de borrar la materia '.$materia['Materia']['alia'], 'class' => 'btn btn-danger')); ?></span> 
 			   </div>
		</div>
</div>