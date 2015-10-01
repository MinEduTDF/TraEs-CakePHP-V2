<div class="unit">
   	   <span class="id"><?php echo $cargo['Cargo']['id']; ?></span>
       <span class="name"><?php echo $cargo['Cargo']['nombre']; ?></span> &nbsp;
	   <b>Creado: </b><span class="date"><?php echo $this->Html->formatTime($cargo['Cargo']['fechaCreacion']); ?><br/></span>
       <b>Alta: </b><span class="date"><?php echo $this->Html->formatTime($cargo['Cargo']['fechaAltaPersona']); ?></span> /
	   <b>Baja: </b><span class="date"><?php echo $this->Html->formatTime($cargo['Cargo']['fechaBajaPersona']); ?></span><br/><br/>
       <span class="<?php echo $this->Html->toLowerCaseAndTrim($cargo['Estado']['nombre']);?>"><?php echo $cargo['Estado']['nombre']; ?></span>
	   <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $cargo['Cargo']['id']), null, sprintf(__('Esta seguro que desea eliminar el cargo %s?'), $cargo['Cargo']['nombre'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'cargos', 'action' => 'edit', $cargo['Cargo']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'cargos', 'action' => 'view', $cargo['Cargo']['id'])); ?></span>
     
</div> 