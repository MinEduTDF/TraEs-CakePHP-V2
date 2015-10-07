<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('jsapi'); ?>
<?php echo $this->Html->script('uds_api_contents'); ?>
<?php echo $this->Html->script('graficos'); ?>
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<div class="TituloSec"><?php echo __('Reportes gráficos'); ?></div>
<div id="ContenidoSec">

<!-- Alumnos Inscriptos por curso 
<div id="click_01" class="titulo_acordeon">Inscriptos por Curso</div>
<div id="acordeon_01">-->
    <script>
		graficos('torta','inscripcion');
		$(document).ready(function () {
		    $(window).resize(function(){
		        graficos('torta','inscripcion');
		    });
		});
    </script>
     <div id="inscripcion" style="width:100vw; height:300px"></div>

<!-- end Alumnos Inscriptos por curso -->

<!-- Abandono por curso -->
<!-- <div id="click_02" class="titulo_acordeon">Abandonos por Curso</div>
<div id="acordeon_02">
    <script>
		graficos('barra','abandono');
		$(document).ready(function () {
		    $(window).resize(function(){
		        graficos('barra','abandono');
		    });
		});
    </script>
     <div id="abandono" style="width:100vw; height:300px"></div>
</div>
 end Abandono por curso -->
</div>