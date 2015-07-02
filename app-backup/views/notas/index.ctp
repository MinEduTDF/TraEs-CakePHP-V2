<!-- start main -->
 <div id="main">
 <h2>Calificaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nueva Calificacion', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
<div class="notas index">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id');?></th>-->
			<th><?php echo $this->Paginator->sort('alumno_id');?></th>
			<th><?php echo $this->Paginator->sort('materia_id');?></th>
			<!--<th><?php echo $this->Paginator->sort('notaPrimeraCuatPrimero');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('notaSegundaCuatPrimero');?></th>-->
			<th><?php echo $this->Paginator->sort('Promedio / 1º Cuatrimestre');?></th>
			<!--<th><?php echo $this->Paginator->sort('notaPrimeraCuatSegundo');?></th>-->
			<!--<th><?php echo $this->Paginator->sort('notaSegundaCuatSegundo');?></th>-->
			<th><?php echo $this->Paginator->sort('Promedio / 2º Cuatrimestre');?></th>
			<th><?php echo $this->Paginator->sort('Promedio / Termino');?></th>
			<th><?php echo $this->Paginator->sort('Nota / Examen Diciembre');?></th>
			<th><?php echo $this->Paginator->sort('Nota / Examen Marzo');?></th>
			<th><?php echo $this->Paginator->sort('Promedio / Final');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($notas as $nota):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!--<td><?php echo $nota['Nota']['id']; ?>&nbsp;</td>-->
		<td>
			<?php echo ($this->Html->link($nota['Alumno']['apellido'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['apellido']))
			." ".($this->Html->link($nota['Alumno']['primerNombre'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['primerNombre']))));
			?>
		</td>
		<td>
			<?php echo $this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['alia'])); ?>
		</td>
		<!--<td><?php echo $nota['Nota']['notaPrimeraCuatPrimero']; ?>&nbsp;</td>-->
		<!--<td><?php echo $nota['Nota']['notaSegundaCuatPrimero']; ?>&nbsp;</td>-->
		<td><?php echo $nota['Nota']['promCuatPrimero']; ?>&nbsp;</td>
		<!--<td><?php echo $nota['Nota']['notaPrimeraCuatSegundo']; ?>&nbsp;</td>-->
		<!--<td><?php echo $nota['Nota']['notaSegundaCuatSegundo']; ?>&nbsp;</td>-->
		<td><?php echo $nota['Nota']['promCuatSegundo']; ?>&nbsp;</td>
		<td><?php echo $nota['Nota']['promTermino']; ?>&nbsp;</td>
		<td><?php echo $nota['Nota']['notaDic']; ?>&nbsp;</td>
		<td><?php echo $nota['Nota']['notaMar']; ?>&nbsp;</td>
		<td><?php echo $nota['Nota']['promFinal']; ?>&nbsp;</td>
		<td><?php echo $nota['Nota']['observaciones']; ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $nota['Nota']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $nota['Nota']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $nota['Nota']['id']), null, sprintf(__('Esta seguro de borrar la nota n? %s?', true), $nota['Nota']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	</br>
	<ul>
		<!--<li><?php echo $this->Html->link(__('Nueva Calificacion', true), array('action' => 'add')); ?></li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Alumnos', true), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Alumno', true), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
</div>