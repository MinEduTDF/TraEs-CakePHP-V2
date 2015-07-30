<!-- start main -->
 <div id="main">
 
 <h2>Titulaciones</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Agregar Titulación'), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id: '); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Nombre: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Certificación: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['certificacion']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Condición de ingreso: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['condicion_ingreso']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Ciclo de implementación: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['ciclo_implementacion']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Ciclo de finalización: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['ciclo_finalizacion']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('A término: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['a_termino']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Orientación: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['orientacion']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Organización del Plan: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['organizacion_plan']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Organización de la cursada: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['organizacion_cursada']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Forma del dictado: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['forma_dictado']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Carga horaria en: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['carga_horaria_en']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Carga horaria: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['carga_horaria']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Edad mínima: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['edad_minima']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Tiene articulación: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulacions['Titulacion']['tiene_articulacion']; ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Duración: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($titulacions['Titulacion']['duracion']).' '.($titulacions['Titulacion']['duracion_en']); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Norma aprobada jurisdiccional: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($titulacions['Titulacion']['norma_aprob_jur_tipo']).' '.($titulacions['Titulacion']['norma_aprob_jur_nro']).' / '.($titulacions['Titulacion']['norma_aprob_jur_anio']); ?>
			&nbsp;
		</dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Norma de validez nacional: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($titulacions['Titulacion']['norma_val_nac_tipo']).' '.($titulacions['Titulacion']['norma_val_nac_nro']).' / '.($titulacions['Titulacion']['norma_val_nac_anio']); ?>
			&nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Norma de ratificación  jurisdiccional: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($titulacions['Titulacion']['norma_ratif_jur_tipo']).' '.($titulacions['Titulacion']['norma_ratif_jur_nro']).' / '.($titulacions['Titulacion']['norma_ratif_jur_anio']); ?>
			&nbsp;
        </dd>
        <dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php echo __('Norma de homologación: '); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($titulacions['Titulacion']['norma_homologacion_tipo']).' '.($titulacions['Titulacion']['norma_homologacion_nro']).' / '.($titulacions['Titulacion']['norma_homologacion_anio']); ?>
			&nbsp;
        </dd>
    </dl>
 </div>
 <!-- end main -->
 <!-- start sidebar -->
 <div id="sidebar">
		
		<div id="invoice-stats">
   		
        </div>
  <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Titulación'), array('action' => 'edit', $titulacions['Titulacion']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Titulación'), array('action' => 'delete', $titulacions['Titulacion']['id']), null, sprintf(__('Esta seguro que quiere borrar la orientacion %s?'), $titulacions['Titulacion']['nombre'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Titulaciones'), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Agregar Titulación'), array('action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
   </div>
</div>	
<!-- end sidebar -->
<div class="related">
	<h3><?php echo __('Cursos Relacionados');?></h3>
	<?php if (!empty($titulacions['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php echo __('Id'); ?></th>-->
		<th><?php echo __('Anio'); ?></th>
		<th><?php echo __('Division'); ?></th>
		<th><?php echo __('Turno'); ?></th>
		<th><?php echo __('AulaNro'); ?></th>
		<th><?php echo __('Plazas'); ?></th>
        <th><?php echo __('Cursada'); ?></th>
		<!--<th><?php echo __('Centro Id'); ?></th>-->
		<!--<th><?php echo __('Titulacion Id'); ?></th>-->
		<!--<th><?php echo __('Modalidad Id'); ?></th>-->
		<th class="actions"><?php echo __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($titulacions['Curso'] as $curso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $curso['id'];?></td>-->
			<td><?php echo $curso['anio'];?></td>
			<td><?php echo $curso['division'];?></td>
			<td><?php echo $curso['turno'];?></td>
			<td><?php echo $curso['aulaNro'];?></td>
			<td><?php echo $curso['plazas'];?></td>
            <td><?php echo $curso['organizacion_cursada'];?></td>
			<!--<td><?php echo $curso['centro_id'];?></td>-->
			<!--<td><?php echo $curso['titulacion_id'];?></td>-->
			<!--<td><?php echo $curso['modalidad_id'];?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, sprintf(__('Esta seguro que desea borrar el curso %s?'), $curso['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>