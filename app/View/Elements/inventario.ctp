<div class="unit">
   	   <span class="id"><?php echo $inventario['Inventario']['id']; ?></span>
       <span class="name"><?php echo $inventario['Inventario']['nombre']; ?></span></br>
	   <b>Creado el: </b><span class="date"><?php echo $this->Html->formatTime($inventario['Inventario']['fechaCreacion']); ?><br/></span>
	   <b>Modificado el: </b><span class="date"><?php echo $this->Html->formatTime($inventario['Inventario']['fechaModificacion']); ?><br/></span>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $inventario['Inventario']['id']), null, sprintf(__('Estas seguro que deseas eliminar el Inventario %s?'), $inventario['Inventario']['nombre'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'inventarios', 'action' => 'edit', $inventario['Inventario']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'inventarios', 'action' => 'view', $inventario['Inventario']['id'])); ?></span>
     
</div> 