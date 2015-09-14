<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('jsapi'); ?>
<?php echo $this->Html->script('uds_api_contents'); ?>
<?php echo $this->Html->script('graficos'); ?>
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

   <div class="TituloSec"><?php echo __('Reportes gráficos'); ?></div>
<div id="ContenidoSec">
   <div class="unit">

<!-- Alumnos por curso -->
<div id="click_01" class="titulo_acordeon">Alumnos por Curso</div>
<div id="acordeon_01">
    <script>
		graficos('torta');
		$(document).ready(function () {
		    $(window).resize(function(){
		        graficos('torta');
		    });
		});
    </script>
     <div id="grafico" style="width:100%; height:300px"></div>
		</div>
	</div>
</div>
<!-- end Alumnos por curso -->
