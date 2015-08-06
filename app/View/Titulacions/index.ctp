<!-- start main -->
 <div id="main">
 <?php echo $this->Session->flash(); ?>
 <h2>Titulaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Titulación'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->

    <table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('orientacion');?></th>
            <th><?php echo $this->Paginator->sort('organizacion_plan');?></th>
			<th><?php echo $this->Paginator->sort('organizacion_cursada');?></th>
            <th><?php echo $this->Paginator->sort('forma_dictado');?></th>
            <th><?php echo $this->Paginator->sort('duracion_en');?></th>
            <th><?php echo $this->Paginator->sort('duracion');?></th>
            <!--<th><?php echo $this->Paginator->sort('centro_id');?></th>-->
			<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($titulacions as $titulacion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $titulacion['Titulacion']['id']; ?>&nbsp;</td>
		<td><?php echo $titulacion['Titulacion']['nombre']; ?>&nbsp;</td>
		<td><?php echo $titulacion['Titulacion']['orientacion']; ?>&nbsp;</td>
        <td><?php echo $titulacion['Titulacion']['organizacion_plan']; ?>&nbsp;</td>
        <td><?php echo $titulacion['Titulacion']['organizacion_cursada']; ?>&nbsp;</td>
        <td><?php echo $titulacion['Titulacion']['forma_dictado']; ?>&nbsp;</td>
        <td><?php echo $titulacion['Titulacion']['duracion_en']; ?>&nbsp;</td>
        <td><?php echo $titulacion['Titulacion']['duracion']; ?>&nbsp;</td>
		<!--<td>
			<?php echo $this->Html->link($titulacion['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $titulacion['Centro']['sigla'])); ?>
		</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $titulacion['Titulacion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $titulacion['Titulacion']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $titulacion['Titulacion']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $titulacion['Titulacion']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<!--<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Titulación'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
</div>