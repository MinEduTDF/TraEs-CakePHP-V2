<div class="docentes form">
<?php echo $this->Form->create('Docente');?>
	<fieldset>
 		<legend><?php __('Editar Docente'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_docente'); ?>
             </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Docente.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Docente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Docentes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Titulos', true), array('controller' => 'titulos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Titulo', true), array('controller' => 'titulos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
</div>