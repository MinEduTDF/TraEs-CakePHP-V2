<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<!-- start main -->
<div class="TituloSec">Calificaciones</div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row">

   <!--<h3>Datos del Alumno</h3>-->
   <div class="col-md-4 col-sm-4 col-xs-12">	
		
        <b>Alumno:</b>		
	    <?php echo ($this->Html->link($nota['Alumno']['nombre_completo_alumno'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['id']))); ?></p>
  
        <!--<b>Curso:</b>		
	    <?php echo ($this->Html->link($nota['Curso']['nombre_completo_curso'], array('controller' => 'materias', 'action' => 'view', $nota['Curso']['id']))); ?></p>-->
      
        <b>Materia:</b>		
	    <?php echo ($this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['alia']))); ?></p>
	
        <b>Ciclo:</b>		
	    <?php echo ($this->Html->link($nota['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $nota['Ciclo']['ciclo']))); ?></p>
	
	</div>
    
    <!--<h3>Datos primer período</h3>-->
    <div class="col-md-4 col-sm-4 col-xs-12">
    <div id="click_03" class="titulo_acordeon_datos">Primer período</div>
    <div id="acordeon_03">
         <div class="unit">

        <b>Nota 1:</b>		
	    <?php echo ($nota['Nota']['nota_uno_primer_periodo']); ?></p>

        <b>Nota 2:</b>		
	    <?php echo ($nota['Nota']['nota_dos_primer_periodo']); ?></p>

        <b>Nota 3:</b>		
	    <?php echo ($nota['Nota']['nota_tres_primer_periodo']); ?></p>

        <b>Promedio:</b>		
	    <?php echo ($nota['Nota']['promedio_primer_periodo']); ?></p>

     </div></div>
        
     <!--<h3>Datos segundo período</h3>-->
      <div id="click_04" class="titulo_acordeon_datos">Segundo período</div>
      <div id="acordeon_04">
      <div class="unit">
 
        <b>Nota 1:</b>		
	    <?php echo ($nota['Nota']['nota_uno_segundo_periodo']); ?></p>

        <b>Nota 2:</b>		
	    <?php echo ($nota['Nota']['nota_dos_segundo_periodo']); ?></p>

        <b>Nota 3:</b>		
	    <?php echo ($nota['Nota']['nota_tres_segundo_periodo']); ?></p>

        <b>Promedio:</b>		
	    <?php echo ($nota['Nota']['promedio_segundo_periodo']); ?></p>
        
      </div></div>
        
     <!--<h3>Datos tercer período</h3>-->
		<div id="click_05" class="titulo_acordeon_datos">Tercer período</div>
        <div id="acordeon_05">
        <div class="unit">
 
        <b>Nota 1:</b>		
	    <?php echo ($nota['Nota']['nota_uno_tercer_periodo']); ?></p>

        <b>Nota 2:</b>		
	    <?php echo ($nota['Nota']['nota_dos_tercer_periodo']); ?></p>

        <b>Nota 3:</b>		
	    <?php echo ($nota['Nota']['nota_tres_tercer_periodo']); ?></p>

        <b>Promedio:</b>		
	    <?php echo ($nota['Nota']['promedio_tercer_periodo']); ?></p>
        
        </div>

     <!--<h3>Datos Cierre</h3>-->
        </div></div><div class="col-md-4 col-sm-4 col-xs-12">
        <div id="click_06" class="titulo_acordeon_datos">Cierre</div>
        <div id="acordeon_06">
        <div class="unit">

        <b>Promedio a término:</b>		
	    <?php echo ($nota['Nota']['promedio_a_termino']); ?></p>
 
        <b>Nota en diciembre:</b>		
	    <?php echo ($nota['Nota']['nota_en_diciembre']); ?></p>
   
        <b>Nota en marzo:</b>		
	    <?php echo ($nota['Nota']['nota_en_marzo']); ?></p>
   
        <b>Promedio final:</b>		
	    <?php echo ($nota['Nota']['promedio_final']); ?></p>

        <b>Observaciones:</b>		
	    <?php echo ($nota['Nota']['observaciones']); ?></p>
         </div></div>
		 </div>
 	</div>
 </div>
</div>

<div class="col-md-4">
		 <div class="unit">
 			<div class="subtitulo">Opciones</div>
			<div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $nota['Nota']['id'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $nota['Nota']['id'] ), null, sprintf(__('Esta seguro de borrar la nota "'.$nota['Nota']['id'].'"'), $this->Form->value('Nota.id'))); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Exportar a PDF'), array('action' => 'view', $nota['Nota']['id'], 'ext' => 'pdf')); ?></div>
         </div>
      </div>
   </div>
</div>                  
<!-- end main -->