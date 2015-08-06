<div class="inasistencias form">

<?php echo $this->Form->create('Inasistencia');?>
	<fieldset>
 		<legend><?php echo __('Agregar Inasistencia'); ?></legend>
	         <div id="main">
                    <?php echo $this->element('form_inasistencia'); ?>
             </div>
	</fieldset>
<?php echo $this->Form->end(__('Grabar'));?>
</div>
<!--<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Alumnos'), array('action' => 'index'));?></li>
	</ul>
</div>-->