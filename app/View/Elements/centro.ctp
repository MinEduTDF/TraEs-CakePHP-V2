<div class="unit">
   	   <b>CUE | Nombre: </b><span class="name"><?php echo ($centro['Centro']['cue']).' | '.($centro['Centro']['sigla']); ?></span></br>
       <b>Dirección | Ciudad: </b><span class="text"><?php echo ($centro['Centro']['direccion']).' | '.($centro['Centro']['ciudad']); ?></span><br/>
       <b>Tel | Email: </b><span class="text"><?php echo ($centro['Centro']['telefono']).' | '.($this->Html->link($centro['Centro']['email'],'mailto:'.$centro['Centro']['email'])); ?></span><br/>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $centro['Centro']['id']), null, sprintf(__('Esta seguro que desea eliminar el centro %s?'), $centro['Centro']['sigla'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'centros', 'action' => 'edit',$centro['Centro']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'centros', 'action' => 'view', $centro['Centro']['id'])); ?></span>
     
</div> 