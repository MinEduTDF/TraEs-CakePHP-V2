<?php echo $this->Html->script('acordeon'); ?>
<!-- start main -->
<div class="TituloSec"><?php echo 'Ciclo' .' '. ($ciclo['Ciclo']['nombre']); ?></div>
<div id="ContenidoSec">
   <div class="row">
      <div class="col-md-8">	
	     <div class="unit">
 		    <div class="row perfil">
               <div class="col-md-8 col-sm-6 col-xs-8">	
                  <b><?php echo __('Fecha de Inicio: '); ?></b>
                  <?php echo $ciclo['Ciclo']['fechaInicio']; ?></p>
                  <b><?php echo __('Fecha de Finalización: '); ?></b>
                  <?php echo $ciclo['Ciclo']['fechaFinal']; ?></p>
			   </div>
               <div class="col-md-8 col-sm-6 col-xs-8">
                  <b><?php echo __('Inicio del Primer Período: '); ?></b>
                  <?php echo $ciclo['Ciclo']['primer_periodo']; ?></p>
                  <b><?php echo __('Inicio del Segundo Período: '); ?></b>
                  <?php echo $ciclo['Ciclo']['segundo_periodo']; ?></p>
                  <b><?php echo __('Inicio del Tercer Período: '); ?></b>
                  <?php echo $ciclo['Ciclo']['tercer_periodo']; ?></p>
               </div>
 	        </div>
         </div>
     </div>
<!-- star sidebar -->
<div class="col-md-4">
   <div class="unit">
 	  <div class="subtitulo">Opciones</div>
		<div class="opcion"><?php echo $this->Html->link('Editar', array('action' => 'edit', $ciclo['Ciclo']['id'])); ?></div>
		<div class="opcion"><?php echo $this->Html->link('Borrar', array('action' => 'delete', $ciclo['Ciclo']['id']), null, sprintf(__('Esta seguro de borrar el centro %s?'), $ciclo['Ciclo']['nombre'])); ?></div>
		<div class="opcion"><?php echo $this->Html->link('Listar Ciclos', array('controller' => 'ciclos', 'action' => 'index')); ?></div>
		<div class="opcion"><?php echo $this->Html->link('Exportar a PDF', array('action' => 'view', $ciclo['Ciclo']['id'], 'ext' => 'pdf')); ?></div>
   </div>
  </div>
</div> 	
<!-- Inscripciones Relacionadas -->
	<div id="click_02" class="titulo_acordeon">Inscripciones Relacionadas</div>
	<div id="acordeon_02">
		<div class="row">
			<?php if (!empty($ciclo['Inscripcion'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($alumno['Inscripcion'] as $inscripcion):	?>
	<div class="col-md-6">
		<div class="unit">
			<!--<?php echo '<b>Ciclo id:</b> '.($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?><br>-->
			<?php echo '<b>Tipo de alta:</b> '.$inscripcion['tipo_alta'];?><br>
			<?php echo '<b>Fecha de alta:</b> '.$this->Html->formatTime($inscripcion['fecha_alta']);?><br>
			<!--<?php echo '<b>Cursa:</b> '.$inscripcion['cursa'];?><br>-->
            <?php echo '<b>Fecha de baja:</b> '.$this->Html->formatTime($inscripcion['fecha_baja']);?><br>
			<?php echo '<b>Tipo de baja:</b> '.$inscripcion['tipo_baja'];?><br>
            <?php echo '<b>Fecha de egreso:</b> '.$this->Html->formatTime($inscripcion['fecha_egreso']);?><br>
            <!--<?php echo '<b>Nota:</b> '.$inscripcion['nota'];?><br>-->

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id']), array('class' => 'btn btn-success')); ?>
			<?php echo $this->Html->link(__('Borrar'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), array('class' => 'btn btn-danger')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Inscripciones Relacionadas -->