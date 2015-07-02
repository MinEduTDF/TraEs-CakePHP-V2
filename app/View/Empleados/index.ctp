<!-- start main -->
 <div id="main">
 </br>
 <h2>Empleados</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Empleado'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <?php foreach ($empleados as $empleado): ?>
    
    <?php echo $this->element('empleado',array( 'empleado' => $empleado )); ?>
    
    <?php endforeach; ?>
    
    <?php echo $this->element('pagination'); ?>
 
 </div>
 <!-- end main -->
 
 <!-- start sidebar -->
 <div id="sidebar">
		
		<div id="invoice-stats">
   		<?php
			
			echo ($activeLetter == '') ? 'ALL' : $this->Html->link('ALL','index/letter:');
   			foreach($letters as $letter)
			{
				echo ' / ' . (($activeLetter != $letter) ? $this->Html->link($letter,'index/letter:'.$letter) : $letter);
			}
		?>
        </div>
    <br></br>
    <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nuevo Empleado'), array('action' => 'add')); ?></li>-->
		<li><?php echo $this->Html->link(__('Listar Licencias'), array('controller' => 'licencias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inscripciones'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Inventarios'), array('controller' => 'inventarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Inventario'), array('controller' => 'inventarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
	</ul>
    </div>
</div>
 <!-- end sidebar -->