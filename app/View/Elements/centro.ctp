<div class="col-md-6">
		<div class="unit">
		       <span class="name"><span class="glyphicon glyphicon-file"></span> <b>CUE | Nombre: </b> <?php echo ($centro['Centro']['cue']).' | '.($centro['Centro']['sigla']); ?></span><br/>
   	           <span class="name"><span class="glyphicon glyphicon-file"></span> <b>Dirección | Ciudad: </b> <?php echo ($centro['Centro']['direccion']).' | '.($centro['Centro']['ciudad']); ?></span><br/>  
  
               <span class="name"><span class="glyphicon glyphicon-file"></span> <b>Tel | Email: </b> <?php echo ($centro['Centro']['telefono']).' | '.($this->Html->link($centro['Centro']['email'],'mailto:'.$centro['Centro']['email'])); ?> </span><br/>
  
		       <div class="text-right">
			   <span class="link"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $centro['Centro']['id']), array('class' => 'btn btn-danger')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'centros', 'action' => 'view', $centro['Centro']['id']), array('class' => 'btn btn-success')); ?></span>
			   </div>
		</div>
</div>