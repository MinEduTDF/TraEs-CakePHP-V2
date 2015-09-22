<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('jsapi'); ?>
<?php echo $this->Html->script('uds_api_contents'); ?>
<?php echo $this->Html->script('graficos'); ?>
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

   <div class="TituloSec"><?php echo __('Reportes gráficos'); ?></div>
<div id="ContenidoSec">

<!-- Alumnos Inscriptos por curso -->
<div id="click_01" class="titulo_acordeon">Inscriptos por Curso</div>
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
<!-- end Alumnos Inscriptos por curso -->

<!-- Alumnos Inscriptos por curso -->
<div id="click_02" class="titulo_acordeon">Abandonos por Curso</div>
<div id="acordeon_02">
    <script>
		graficos('barra');
		$(document).ready(function () {
		    $(window).resize(function(){
		        graficos('barra');
		    });
		});
    </script>
     <div id="grafico" style="width:100%; height:300px"></div>
</div>
<!-- end Alumnos Inscriptos por curso -->
</div>