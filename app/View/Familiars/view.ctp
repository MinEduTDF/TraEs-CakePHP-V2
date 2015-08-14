<div class="TituloSec">Familiares </div>
<div id="ContenidoSec">	

<div class="row"><div class="col-md-8">


	<div class="unit perfil">
		 <div class="subtitulo"><?php echo ($familiar['Familiar']['nombre_completo']); ?></div>
	 <div class="row">
	 <div class="col-md-6 col-sm-6">
 	<b>Id:</b>
	<?php echo $familiar['Familiar']['id']; ?><br>
	
    <b>Nombres y apellidos del Alumno:</b>
	<?php echo $this->Html->link($familiar['Alumno']['nombres'], array('controller' => 'centros', 'action' => 'view', $familiar['Alumno']['nombres']))."  ".($this->Html->link($familiar['Alumno']['apellidos'], array('controller' => 'centros', 'action' => 'view', $familiar['Alumno']['apellidos']))); ?><br>
	
	<b>Nombre completo:</b>	
	<?php echo ($familiar['Familiar']['nombre_completo']); ?><br>

	<b>Cuil/Cuit:</b>		
	<?php echo ($familiar['Familiar']['cuit_cuil']); ?><br>

	</div><div class="col-md-6 col-sm-6">

	<b>Ciudad:</b>
	<?php echo ($familiar['Familiar']['ciudad']); ?><br>

	<b>Domicilio:</b>
	<?php echo ($familiar['Familiar']['domicilio']); ?><br>

	<b>Telefono:</b>
	<?php echo ($familiar['Familiar']['telefono_nro']); ?><br>

	<b>Email:</b>
	<?php echo ($familiar['Familiar']['email']); ?>

			</div>
		</div>
	</div>

</div><div class="col-md-4">
		 <div class="unit">
	 			<div class="subtitulo">Opciones</div>
				<div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $familiar['Familiar']['id'])); ?></div>
				<div class="opcion"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $familiar['Familiar']['id'] ), null, sprintf(__('Esta seguro de borrar el familiar "'.$familiar['Familiar']['nombre_completo'].'"'), $this->Form->value('Familiar.id'))); ?></div>
		</div>
		</div>	
	</div>
</div>