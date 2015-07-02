<div class="unit">
   	   <span class="id"><?php echo $centro['Centro']['id']; ?></span>
       <span class="name"><?php echo $centro['Centro']['sigla']; ?></span> &nbsp;
	   <b>Fundado: </b><span class="date"><?php echo $this->Html->formatTime($centro['Centro']['fechaFundacion']); ?><br/></span>
       <span class="text">Tel: <?php echo $centro['Centro']['telefono']; ?></span><br/>
       <span class="text">Email: <?php echo $this->Html->link($centro['Centro']['email'],'mailto:'.$centro['Centro']['email']); ?></span><br/>
       <span class="text">Ciudad: <?php echo $centro['Centro']['ciudad']; ?></span><br/>
	   <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $centro['Centro']['id']), null, sprintf(__('Esta seguro que desea eliminar el centro %s?'), $centro['Centro']['sigla'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'centros', 'action' => 'edit',$centro['Centro']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'centros', 'action' => 'view', $centro['Centro']['id'])); ?></span>
     
</div> 