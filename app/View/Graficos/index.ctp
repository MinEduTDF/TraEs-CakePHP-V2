<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('jsapi'); ?>
<?php echo $this->Html->script('uds_api_contents'); ?>
<?php echo $this->Html->script('graficos'); ?>
<!-- ************************************** -->

   <div class="TituloSec"><?php echo __('Estadisticas'); ?></div>
<div id="ContenidoSec">
   <div class="unit">
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
