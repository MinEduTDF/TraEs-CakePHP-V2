<div class="orientacions form">
<?php echo $this->Form->create('Orientacion');?>
	<fieldset>
 		<legend><?php echo __('Editar Orientacion'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_orientacion'); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $this->Form->value('Orientacion.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Orientacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Orientaciones'), array('action' => 'index'));?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro'), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>