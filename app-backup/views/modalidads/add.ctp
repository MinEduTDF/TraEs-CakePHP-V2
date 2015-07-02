<div class="modalidads form">
<?php echo $this->Form->create('Modalidad');?>
	<fieldset>
 		<legend><?php __('Agregar Modalidades'); ?></legend>
	        <div id="main">
                    <?php echo $this->element('form_modalidad'); ?>
            </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Modalidades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
	</ul>
</div>