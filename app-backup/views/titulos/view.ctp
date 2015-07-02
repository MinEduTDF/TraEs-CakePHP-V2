<div class="titulos view">
<h2><?php  __('Titulo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulo['Titulo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulo['Titulo']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulo['Titulo']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Institucion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $titulo['Titulo']['institucion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Docente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($titulo['Docente']['id'], array('controller' => 'docentes', 'action' => 'view', $titulo['Docente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Titulo', true), array('action' => 'edit', $titulo['Titulo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Titulo', true), array('action' => 'delete', $titulo['Titulo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $titulo['Titulo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Titulos', true), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Titulo', true), array('action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Docentes', true), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Docente', true), array('controller' => 'docentes', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
