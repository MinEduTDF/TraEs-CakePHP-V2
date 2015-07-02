<div class="modalidads form">
<?php echo $this->Form->create('Modalidad');?>
	<fieldset>
 		<legend><?php __('Editar Modalidad'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_modalidad'); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $this->Form->value('Modalidad.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Modalidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Modalidades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>