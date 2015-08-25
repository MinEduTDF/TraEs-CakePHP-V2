<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<!-- start main -->
<div class="TituloSec">Legajo Nro: <?php echo ($inscripcion['Inscripcion']['legajo_nro']); ?></div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		
   <!--<h3>Datos del Alumno</h3>-->
   <div class="col-md-4 col-sm-6 col-xs-8">	
		
   			<b><?php echo __('Alumno:'); ?></b>
			
			<?php echo ($this->Html->link($inscripcion['Alumno']['apellidos'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['Alumno']['apellidos']))
			." ".($this->Html->link($inscripcion['Alumno']['nombres'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['Alumno']['nombres']))));
			?></p>

			<b><?php echo __('Ciclo | Centro: '); ?></b>
			
			<?php echo ($this->Html->link($inscripcion['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['Ciclo']['ciclo'])))." | ".($this->Html->link($inscripcion['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $inscripcion['Centro']['sigla']))); ?></p>
                
			
	<!--<h3>Datos previos</h3>-->
    <div class="subtitulo">Datos previos</div>
        
        <b><?php echo __('Cursa:'); ?></b>
        
		<?php echo $inscripcion['Inscripcion']['cursa']; ?></p>
		
        <b><?php echo __('Fines:'); ?></b>
        
		<?php echo $inscripcion['Inscripcion']['fines']; ?></p>
		
        <b><?php echo __('Recursante:'); ?></b>
        
		<?php echo $inscripcion['Inscripcion']['recursante']; ?></p>
		
        <b><?php echo __('Condición de aprobación:'); ?></b>
        
		<?php echo $inscripcion['Inscripcion']['condicion_aprobacion']; ?></p>
		
        
     <!--<h3>Datos del alta baja y egreso del Alumno</h3>-->
     </div><div class="col-md-4 col-sm-6 col-xs-8"><div class="subtitulo">Alta</div>
        
        <b><?php echo __('Tipo:'); ?></b>
        
		<?php echo ($inscripcion['Inscripcion']['tipo_alta']); ?></p>
		
		<b><?php echo __('Fecha:'); ?></b>
		
		<?php ($this->Html->formatTime($inscripcion['Inscripcion']['fecha_alta'])); ?></p>
		
        <div class="subtitulo">Baja</div>
        
        <b><?php echo __('Tipo:'); ?></b>
        
		<?php echo ($inscripcion['Inscripcion']['tipo_baja']); ?></p>
		
		<b><?php echo __('Fecha:'); ?></b>
		
		<?php ($this->Html->formatTime($inscripcion['Inscripcion']['fecha_baja'])); ?></p>
		
		<b><?php echo __('Motivo:'); ?></b>
		
		<?php echo $inscripcion['Inscripcion']['motivo_baja']; ?></p>
		
        <!--<h3>Datos del egreso</h3>-->
        </div><div class="col-md-4 col-sm-6 col-xs-8"><div class="subtitulo">Egreso</div>
                
        <b><?php echo __('Fecha:'); ?></b>
        
		<?php echo ($this->Html->formatTime($inscripcion['Inscripcion']['fecha_egreso'])); ?></p>
		<b><?php echo __('Libro matriz:'); ?></b>
		
        <?php echo $inscripcion['Inscripcion']['libro_matriz']; ?></p>
		
		<b><?php echo __('Acta | Folio:'); ?></b>
		
		<?php $inscripcion['Inscripcion']['acta']." | ".$inscripcion['Inscripcion']['folio']; ?></p>
		    
    <!--<h3>Datos de la titulación</h3>-->
    <div class="subtitulo">Titulación</div>
       
        <b><?php echo __('Emitido el:'); ?></b>
        
		<?php echo ($this->Html->formatTime($inscripcion['Inscripcion']['fecha_emision_titulo'])); ?></p>
		
        <b><?php echo __('Nota: | Fecha de nota:'); ?></b>
		
		<?php ($inscripcion['Inscripcion']['nota'])." | ".($inscripcion['Inscripcion']['fecha_nota']); ?></p>
		        
        <b><?php echo __('Empleado: '); ?></b>
        
		<?php echo ($this->Html->link($inscripcion['Empleado']['apellido'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['Empleado']['apellido']))
			." ".($this->Html->link($inscripcion['Empleado']['primerNombre'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['Empleado']['primerNombre']))));
			?></p>
            
		  </div>
 	</div>
 </div>
</div>

<div class="col-md-4">
 <div class="unit">
 			<div class="subtitulo">Opciones</div>
		    <div class="opcion"><?php echo $this->Html->link(__('Editar Inscripcion'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?> </div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </div>	
			<div class="opcion"><?php echo $this->Html->link(__('Listar Centros'), array('controller' => 'centros', 'action' => 'index')); ?> </div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </div>
			<div class="opcion"><?php echo $this->Html->link(__('Listar Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </div>
	</div>
</div>
</div>
 <!-- end main -->

<!-- Cursos Relacionados -->
 
<div id="click_01" class="titulo_acordeon">Cursos Relacionadas</div>
<div id="acordeon_01">
		<div class="row">
	<?php if (!empty($inscripcion['Curso'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($inscripcion['Curso'] as $curso): ?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Año:</b> '.$curso['anio'];?><br>
			<?php echo '<b>División:</b> '.$curso['division'];?><br>
			<?php echo '<b>Turno:</b> '.$curso['turno'];?><br>
            <?php echo '<b>Tipo:</b> '.$curso['tipo'];?><br>
			<?php echo '<b>Cursada:</b> '.$curso['organizacion_cursada'];?><br>
            <?php echo '<b>Titulación:</b> '.($this->Html->link($curso['titulacion_id'], array('controller' => 'titulacions', 'action' => 'view', $curso['titulacion_id'])));?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'cursos', 'action' => 'edit', $curso['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'cursos', 'action' => 'view', $curso['id']), array('class' => 'btn btn-success')); ?>
			<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $materia['id'])); ?>-->
            </div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Cursos Relacionados -->

<!-- Materias Relacionados -->

<div id="click_01" class="titulo_acordeon">Materias Relacionadas</div>
<div id="acordeon_01">
		<div class="row">
	<?php if (!empty($inscripcion['Materia'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($inscripcion['Materia'] as $materia): ?>
	<div class="col-md-6">
		<div class="unit">
			<?php echo '<b>Alia:</b> '.$materia['alia'];?><br>
			<?php echo '<b>Carga horaria en:</b> '.$materia['carga_horaria_en'];?><br>
			<?php echo '<b>Carga horaria semanal:</b> '.$materia['carga_horaria_semanal'];?><br>
            <?php echo '<b>Contenido:</b> '.$materia['contenido'];?><br>
			<?php echo '<b>Curso Id:</b> '.($this->Html->link($materia['curso_id'], array('controller' => 'cursos', 'action' => 'view', $materia['curso_id'])));?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'materias', 'action' => 'edit', $materia['id']), array('class' => 'btn btn-danger')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'materias', 'action' => 'view', $materia['id']), array('class' => 'btn btn-success')); ?>
			<!--<?php echo $this->Html->link(__('Borrar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $materia['id'])); ?>-->
            </div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Materias Relacionados -->

</div>
