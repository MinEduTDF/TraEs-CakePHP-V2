<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('jsapi'); ?>
<?php echo $this->Html->script('uds_api_contents'); ?>
<?php echo $this->Html->script('graficos'); ?>
<!-- ************************************** -->

<?php
   App::uses('ConnectionManager', 'Model'); 
    $db = ConnectionManager::getDataSource('default');
    if (!$db->isConnected()) {
       $this->Session->setFlash(__('Could not connect to database.'), 'default',            array('class' => 'error'));
    } else {
        $alumnos = $db->Query('SELECT * FROM `alumnos` WHERE 1 limit 2');
        $inscripcions = $db->Query('SELECT * FROM `inscripcions` WHERE 1 limit 10');
        $cursos = $db->Query('SELECT * FROM `cursos` WHERE 1 limit 4');
        
        // var_dump($alumnos);
        // var_dump($inscripcions);
        // var_dump($cursos);
    }

?>

   <div class="TituloSec"><?php echo __('Estadisticas'); ?></div>
<div id="ContenidoSec">
   <div class="unit">
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
	</div>
