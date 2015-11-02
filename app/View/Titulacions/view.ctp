<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<!-- *********** Slider ************* -->
<?php echo $this->Html->script('slider'); ?>
<?php echo $this->Html->css('slider.css'); ?>
<!-- ************************************** -->

<!-- start main -->
<div class="TituloSec"><?php echo ($titulacions['Titulacion']['nombre']); ?></div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		
  <div class="col-md-4 col-sm-6 col-xs-8">	
			<b><?php echo __('Orientación:'); ?></b>
			<?php echo ($titulacions['Titulacion']['orientacion']); ?></p>

			<b><?php echo __('Edad mínima:'); ?></b>
			<?php echo ($titulacions['Titulacion']['edad_minima']); ?></p>

			<b><?php echo __('Certificación:'); ?></b>
			<?php echo ($titulacions['Titulacion']['certificacion']); ?></p>

			<b><?php echo __('Condición de ingreso:'); ?></b>
			<?php echo ($titulacions['Titulacion']['condicion_ingreso']); ?></p>

			<b><?php echo __('Ciclo de implementación:'); ?></b>
			<?php echo ($titulacions['Titulacion']['ciclo_implementacion']); ?></p>

			<b><?php echo __('Ciclo de finalización:'); ?></b>
			<?php echo ($titulacions['Titulacion']['ciclo_finalizacion']); ?></p>

			<b><?php echo __('A término:'); ?></b>
			<?php echo $titulacions['Titulacion']['a_termino']; ?></p>

			<b><?php echo __('Organización del Plan:'); ?></b>
			<?php echo ($titulacions['Titulacion']['organizacion_plan']); ?></p>

			<b><?php echo __('Organización de la cursada:'); ?></b>
			<?php echo ($titulacions['Titulacion']['organizacion_cursada']); ?></p>

			<b><?php echo __('Forma del dictado:'); ?></b>
			<?php echo ($titulacions['Titulacion']['forma_dictado']); ?></p>

			<b><?php echo __('Carga horaria en:'); ?></b>
			<?php echo ($titulacions['Titulacion']['carga_horaria_en']); ?></p>

			<b><?php echo __('Carga horaria:'); ?></b>
			<?php echo ($titulacions['Titulacion']['carga_horaria']); ?></p>

			<b><?php echo __('Tiene articulación:'); ?></b>
			<?php echo ($titulacions['Titulacion']['tiene_articulacion']); ?></p>

			<b><?php echo __('Duración:'); ?></b>
			<?php echo ($titulacions['Titulacion']['duracion']); ?></p>

			<b><?php echo __('Duración en:'); ?></b>
			<?php echo ($titulacions['Titulacion']['duracion_en']); ?></p>

  </div><div class="col-md-4 col-sm-6 col-xs-8">	

			<b><?php echo __('Norma aprobada jurisdiccional:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_aprob_jur_tipo']); ?></p>

			<b><?php echo __('Norma aprobada jurisdiccional tipo:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_aprob_jur_tipo']); ?></p>

			<b><?php echo __('Norma aprobada jurisdiccional nro:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_aprob_jur_nro']); ?></p>

			<b><?php echo __('Norma aprobada jurisdiccional año:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_aprob_jur_anio']); ?></p>

			<b><?php echo __('Norma de validez nacional tipo:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_val_nac_tipo']); ?></p>

			<b><?php echo __('Norma de validez nacional nro:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_val_nac_nro']); ?></p>

			<b><?php echo __('Norma de validez nacional año:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_val_nac_anio']); ?></p>

  </div><div class="col-md-4 col-sm-6 col-xs-8">	

			<b><?php echo __('Norma de ratificación  jurisdiccional tipo:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_ratif_jur_tipo']); ?></p>

			<b><?php echo __('Norma de ratificación  jurisdiccional nro:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_ratif_jur_nro']); ?></p>

			<b><?php echo __('Norma de ratificación  jurisdiccional año:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_ratif_jur_anio']); ?></p>

			<b><?php echo __('Norma de homologación tipo:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_homologacion_tipo']); ?></p>

			<b><?php echo __('Norma de homologación nro:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_homologacion_nro']); ?></p>

			<b><?php echo __('Norma de homologación año:'); ?></b>
			<?php echo ($titulacions['Titulacion']['norma_homologacion_anio']); ?></p>
		  </div>
 	</div>
 </div>
</div>

<div class="col-md-4">
 <div class="unit">
 			<div class="subtitulo">Opciones</div>
			<div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $titulacions['Titulacion']['id'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $titulacions['Titulacion']['id']), null, sprintf(__('Esta seguro de borrar la titulación %s?'), $titulacions['Titulacion']['nombre'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Exportar a PDF'), array('action' => 'view', $titulacions['Titulacion']['id'], 'ext' => 'pdf')); ?></div>
			<!--<div class="opcion"><?php echo $this->Html->link(__('Agregar Familiar'), array('controller' => 'familiars', 'action' => 'add')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Agregar Integracion'), array('controller' => 'integracions', 'action' => 'add')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Agregar Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Agregar Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Agregar Calificación'), array('controller' => 'notas', 'action' => 'add')); ?></div>
	        <div class="opcion"><?php echo $this->Html->link(__('Agregar Inasistencia'), array('controller' => 'inasistencias', 'action' => 'add')); ?></div>-->
	</div>
</div>
</div>
 <!-- end main -->


<!-- Cursos Relacionados -->
<div id="click_01" class="titulo_acordeon">Cursos Relacionadas</div>
<div id="acordeon_01">
		<div class="row">
	<?php if (!empty($titulacions['Curso'])):?>

  	<!-- Swiper -->
    <div class="swiper-container" style="height: 200px;">
        <div class="swiper-wrapper" >
	<?php foreach ($titulacions['Curso'] as $curso): ?>

	<div class="swiper-slide">
    <div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Anio:</b> '.$curso['anio'];?><br>
			<?php echo '<b>Division:</b> '.$curso['division'];?><br>
			<?php echo '<b>Turno:</b> '.$curso['turno'];?><br>
			<?php echo '<b>AulaNro:</b> '.$curso['aula_nro'];?><br>
			<?php echo '<b>Plazas:</b> '.$curso['plazas'];?><br>
			<!--<?php echo '<b>Cursada:</b> '.$curso['organizacion_cursada'];?><br>-->
            
            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'cursos', 'action' => 'edit', $curso['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'cursos', 'action' => 'view', $curso['id']), array('class' => 'btn btn-success')); ?>
 			<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), array('class' => 'btn btn-danger')); ?>
            </div>
		</div>
	</div>
</div>
		
		<?php endforeach; ?>
			</div>
			        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Include plugin after Swiper -->
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>

        </div>
</div>
<!-- end Cursos Relacionados -->

</div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
    });
    </script>