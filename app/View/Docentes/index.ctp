<!-- start main -->
 <div id="main">
 <h2>Docentes</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Docente'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
   
   
   	<?php foreach ($docentes as $docente): ?>
    
    <?php echo $this->element('docente',array( 'docente' => $docente )); ?>
    
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
		<!--<li><?php echo $this->Html->link(__('Nuevo Docente'), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Titulos'), array('controller' => 'titulos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Titulo'), array('controller' => 'titulos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Licencias'), array('controller' => 'licencias', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		</ul>
    </div>
</div>
<!-- end sidebar -->
 
 
