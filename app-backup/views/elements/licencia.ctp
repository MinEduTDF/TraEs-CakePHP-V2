<div class="unit">
   	   <span class="id"><?php echo $licencia['Licencia']['id']; ?></span>
       <span class="name"><?php echo $licencia['Licencia']['articulo']; ?></span> &nbsp;
	   <b>Desde: </b><span class="date"><?php echo $this->Html->formatTime($licencia['Licencia']['fechaDesde']); ?><br/></span>
       <b>Hasta: </b><span class="date"><?php echo $this->Html->formatTime($licencia['Licencia']['fechaHasta']); ?></span> /
	   <b>Docente: </b><span class="date"><?php echo ($this->Html->link($licencia['Docente']['apellido'], array('controller' => 'docentes', 'action' => 'view', $licencia['Docente']['apellido']))
			." ".($this->Html->link($licencia['Docente']['primerNombre'], array('controller' => 'docentes', 'action' => 'view', $licencia['Docente']['primerNombre'])))); ?></span><br/><br/>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $cargo['Cargo']['id']), null, sprintf(__('Esta seguro que desea eliminar el cargo %s?', true), $cargo['Cargo']['nombre'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'licencias', 'action' => 'edit', $licencia['Licencia']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'licencias', 'action' => 'view', $licencia['Licencia']['id'])); ?></span>
     
</div> 