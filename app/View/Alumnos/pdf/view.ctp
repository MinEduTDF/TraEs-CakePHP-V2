<!-- start main -->
<div class="TituloSec"><?php echo ($alumno['Alumno']['apellidos']).' '.($alumno['Alumno']['nombres']); ?></div>
  <div id="ContenidoSec">
     <div class="row">
        <div class="col-md-8">	
	       <div class="unit">
 		      <div class="row perfil">
                 <div class="col-md-4 col-sm-6 col-xs-12 thumbnail text-center">
					<?php echo $this->Html->image('../files/alumno/foto/' . $alumno['Alumno']['foto_dir'] . '/' . 'thumb_' .$alumno['Alumno']['foto'], array('class' => 'img-thumbnail img-responsive')); ?>
                 </div>
                 <div class="col-md-8 col-sm-6 col-xs-8">	
                    <b><?php echo __('Nombres: '); ?></b>
                    <?php echo ($alumno['Alumno']['nombres']); ?></p>
                    <b><?php echo __('Apellidos: '); ?></b>
                    <?php echo ($alumno['Alumno']['apellidos']); ?></p>
                    <b><?php echo __('Documento: '); ?></b>
                    <?php echo ($alumno['Alumno']['documento_tipo']).' '.($alumno['Alumno']['documento_nro']); ?></p>
	                </div>
                    <div class="col-md-8 col-sm-6 col-xs-8">
                    <b><?php echo __('Direccion: '); ?></b>
                    <?php echo $alumno['Alumno']['calle_nombre'].' N° '.$alumno['Alumno']['calle_nro']; ?></p>
                    <b><?php echo __('Telefono: '); ?></b>
                    <?php echo $alumno['Alumno']['telefono_nro']; ?></p>
                    <b><?php echo __('Email: '); ?></b>
                    <?php echo ($this->Html->link($alumno['Alumno']['email'],'mailto:'.$alumno['Alumno']['email'])); ?></p>
                    <b><?php echo __('Observaciones: '); ?></b>
                    <?php echo $alumno['Alumno']['observaciones']; ?></p>
                 </div>
 	          </div>
         </div>
    </div>
<!-- end main -->
<!-- Familiares Relacionados -->
<div class="titulo_acordeon">Familiares Relacionados</div>
<div class="table-responsive">
 <table class="table table-condensed">
   <thead>
    <tr>
        <th><?php echo $this->Paginator->sort('vinculo', 'Vinculo');?></th>
        <th><?php echo $this->Paginator->sort('nombre_completo', 'Nombre');?></th>
        <th><?php echo $this->Paginator->sort('cuit_cuil', 'Cuil/Cuit');?></th>
        <th><?php echo $this->Paginator->sort('telefono_nro', 'Telefono');?></th>
        <th><?php echo $this->Paginator->sort('email', 'Email');?></th>
        <th><?php echo $this->Paginator->sort('domicilio', 'Domicilio');?></th>
    </tr>
</thead>
<tbody>						
    <?php $count=0; ?>
    <?php foreach($alumno['Familiar'] as $familiar): ?>				
    <?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>
        <td style="text-align: center;"><?php echo $familiar['vinculo']; ?></td>
        <td style="text-align: center;"><?php echo $familiar['nombre_completo']; ?></td>
        <td style="text-align: center;"><?php echo $familiar['cuit_cuil']; ?></td>
        <td style="text-align: center;"><?php echo $familiar['telefono_nro']; ?></td>
        <td style="text-align: center;"><?php echo $familiar['email']; ?></td>
        <td style="text-align: center;"><?php echo $familiar['domicilio']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($familiar); ?>
</tbody>
</table>
</div>
<!-- end Familiares Relacionados -->
<!-- Inscripciones Relacionadas -->
<div class="titulo_acordeon">Inscripciones Relacionadas</div>
<div class="table-responsive">
 <table class="table table-condensed">
   <thead>
    <tr>
        <th><?php echo $this->Paginator->sort('ciclo_id', 'Ciclo id');?></th>
        <th><?php echo $this->Paginator->sort('tipo_alta', 'Tipo de alta');?></th>
        <th><?php echo $this->Paginator->sort('fecha_alta', 'Fecha de alta');?></th>
        <th><?php echo $this->Paginator->sort('cursa', 'Cursa');?></th>
        <th><?php echo $this->Paginator->sort('fecha_baja', 'Fecha de baja');?></th>
        <th><?php echo $this->Paginator->sort('tipo_baja', 'Tipo de baja');?></th>
        <th><?php echo $this->Paginator->sort('fecha_egreso', 'Fecha de egreso');?></th>
    </tr>
</thead>
<tbody>						
    <?php $count=0; ?>
    <?php foreach($alumno['Inscripcion'] as $inscripcion): ?>				
    <?php $count ++;?>
    <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
    <?php endif; ?>
        <td style="text-align: center;"><?php echo $inscripcion['ciclo_id']; ?></td>
        <td style="text-align: center;"><?php echo $inscripcion['tipo_alta']; ?></td>
        <td style="text-align: center;"><?php echo $inscripcion['fecha_alta']; ?></td>
        <td style="text-align: center;"><?php echo $inscripcion['cursa']; ?></td>
        <td style="text-align: center;"><?php echo $inscripcion['fecha_baja']; ?></td>
        <td style="text-align: center;"><?php echo $inscripcion['tipo_baja']; ?></td>
        <td style="text-align: center;"><?php echo $inscripcion['fecha_egreso']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($familiar); ?>
</tbody>
</table>
</div>
<!-- end Inscripciones Relacionadas -->
