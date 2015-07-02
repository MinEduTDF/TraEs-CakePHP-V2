<div class="unit">
   	   <span class="id"><?php echo $docente['Docente']['id']; ?></span>
       <span class="name"><?php echo $docente['Docente']['apellido'].' '.$docente['Docente']['primerNombre']; ?></span><br/>
       <span class="text">Tel: <?php echo $docente['Docente']['telefono']; ?></span><br/>
       <span class="text">Email: <?php echo $this->Html->link($docente['Docente']['email'],'mailto:'.$docente['Docente']['email']); ?></span><br/>
       <span class="text">Ciudad: <?php echo $docente['Docente']['ciudad']; ?></span><br/>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $docente['Docente']['id']), null, sprintf(__('Esta seguro que desea borrar al docente %s?'), $docente['Docente']['apellido'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'docentes', 'action' => 'edit', $docente['Docente']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'docentes', 'action' => 'view', $docente['Docente']['id'])); ?></span>
     
</div> 