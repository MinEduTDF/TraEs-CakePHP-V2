<div class="col-md-5">
		<div class="unit">
		       <span class="name"><span class="glyphicon glyphicon-user"></span> <b>CUE | Nombre:</b> <?php echo ($centro['Centro']['cue']).' | '.($centro['Centro']['sigla']); ?></span><br/>
   	           <span class="name"><span class="glyphicon glyphicon-map-marker"></span> <b>Dirección | Ciudad:</b> <?php echo ($centro['Centro']['direccion']).' | '.($centro['Centro']['ciudad']); ?></span><br/>  
  
               <span class="name"><span class="glyphicon glyphicon-earphone"></span> <b>Tel:</b> <?php echo ($centro['Centro']['telefono']); ?> </span><br/>

               <span class="name"><span class="glyphicon glyphicon-envelope"></span> <b>Email:</b> <?php echo $this->Html->link($centro['Centro']['email'], 'mailto:'.$centro['Centro']['email']); ?> </span><br/>
                 
		       <div class="text-right">
			   <span class="link"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $centro['Centro']['id']), array('class' => 'btn btn-danger')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'centros', 'action' => 'view', $centro['Centro']['id']), array('class' => 'btn btn-success')); ?></span>
			   </div>
		</div>
</div>