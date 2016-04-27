<?php echo $this->Html->script(array('acordeon', 'tooltip', 'datepicker', 'moment', 'bootstrap-datetimepicker')); ?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="row">
	<div class="col-xs-6 col-sm-3">
	    <?php echo $this->Form->input('created', array('label' => 'Creado*', 'id' => 'datetimepicker1', 'type' => 'text', 'class' => 'input-group date', 'class' => 'form-control', 'span class' => 'fa fa-calendar')); ?>
    </div>
</div><hr />
<div class="row"><!--<div class="subtitulo">Datos del curso</div>-->
   <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="unit"><strong><h3>Datos Generales</h3></strong><hr />
			<?php
                echo $this->Form->input('centro_id', array('readonly' => true, 'default' => 'CPLA', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
                echo $this->Form->input('Ciclo', array('empty' => 'Ingrese un ciclo...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione opciones de la lista'));
                $anios = array('1ero' => '1ero', '2do' => '2do', '3ero' => '3ero', '4to' => '4to', '5to' => '5to',
                               '6to' => '6to');
                echo $this->Form->input('anio', array('label' =>'Año', 'empty' => 'Ingrese un año...', 'options' => $anios, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Selecciones una opción de la lista'));
                $divisiones = array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F',
                                    'G' => 'G', 'H' => 'H', '1ero' => '1ero', '2do' => '2do', '3ero' => '3ero',
                                    '4to' => '4to', '5to' => '5to', '6to' => '6to');
                echo $this->Form->input('division', array('label' => 'División', 'empty' => 'Ingrese una división...', 'options' => $divisiones, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
                $turnos = array('A distancia' => 'A distancia', 'Doble' => 'Doble', 'Intermedio' => 'Intermedio',
                                'Libre' => 'Libre', 'Manana' => 'Manana', 'Noche' => 'Noche', 'Tarde' =>'Tarde',
                                'Vespertino' =>'Vespertino', 'Alternado' => 'Alternado', 'Mañana Extendida' =>'Mañana Extendida',
                                'Tarde Extendida' => 'Tarde Extendida', 'Doble Extendida' =>'Doble Extendida', 'Otro' =>'Otro');
                echo $this->Form->input('turno', array('label' => 'Turno', 'empty' => 'Ingrese un turno...', 'options' => $turnos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
            ?>
        </div>
   </div>     
   <div class="col-md-6 col-sm-6 col-xs-12"><!--<div class="subtitulo">Datos de contacto</div>-->
		<div class="unit"><strong><h3>Datos Específicos</h3></strong><hr />
			<?php		
                echo $this->Form->input('titulacion_id', array('label' => 'Titulación', 'empty' => 'Ingrese una titulación...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
                $tipos = array('Independiente' => 'Independiente', 'Independiente de recuperación' => 'Independiente de recuperación',
                               'Independiente semipresencial' => 'Independiente semipresencial', 'Independiente presencial y semipresencial' => 'Independiente presencial y semipresencial',
                               'Múltiple' => 'Múltiple', 'Múltiple de recuperación' => 'Múltiple de recuperación', 'Múltiple semipresencial' => 'Múltiple semipresencial',
                               'Múltiple presencial y semipresencial' => 'Múltiple presencial y semipresencial', 'No Corresponde' => 'No Corresponde',
                               'Independiente presencial y semipresencial (violeta)' => 'Independiente presencial y semipresencial (violeta)',
                               'Mixta / Bimodal' => 'Mixta / Bimodal', 'Múltiple presencial y semipresencial (violeta)' => 'Múltiple presencial y semipresencial (violeta)',
                               'Multinivel' => 'Multinivel', 'Multiplan' => 'Multiplan');
                echo $this->Form->input('tipo', array('empty' => 'Ingrese un tipo...', 'options' => $tipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
                echo $this->Form->input('aula_nro', array('label' => 'Aula Nro', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca un número de aula', 'Placeholder' => 'Ingrese un nº de Aula...'));
                echo $this->Form->input('plazas', array('between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca cantidad máxima de alumnos para esa aula', 'Placeholder' => 'Ingrese cantidad máxima de alumnos'));
            ?>
        </div>    
   </div>
</div>
