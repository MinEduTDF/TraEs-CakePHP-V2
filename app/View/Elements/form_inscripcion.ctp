
<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

  <div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
   
<?php 
		echo $this->Form->input('alumno_id', array('label'=>'Alumno ID', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('legajo_nro', array('label'=>'Legajo N°', 'between' => '<br>', 'class' => 'form-control'));
		$tipos_alta = array('Regular' => 'Regular', 'Equivalencia'=>'Equivalencia');
        echo $this->Form->input('tipo_alta', array('options' => $tipos_alta, 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_alta', array('type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control'));
		$tipos_cursa = array('Cursa algun espacio curricular.' => 'Cursa algun espacio curricular.', 'Sólo se inscribe a rendir final.' => 'Sólo se inscribe a rendir final.');
		echo $this->Form->input('cursa', array('options' => $tipos_cursa, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
		$tipos_fines = array('No' => 'No', 'Sí línea deudores de materias.' => 'Sí línea deudores de materias.', 'Sí línea trayectos educativos.' => 'Sí línea   trayectos educativos.');
		echo $this->Form->input('fines', array('options' => $tipos_fines, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('fecha_baja', array('type' => 'text', 'between' => '<br>', 'empty' => ' ','class' => 'datepicker form-control'));
		$tipos_baja = array('Salido con pase' => 'Salido con pase', 'Salido sin pase' => 'Salido sin pase', 'Pérdida de regularidad' => 'Pérdida de regularidad',       'Fallecimiento' => 'Fallecimiento');
		echo $this->Form->input('tipo_baja', array('options' => $tipos_baja, 'empty' => ' ','between' => '<br>', 'class' => 'form-control'));
		echo '</div><div class="col-md-4 col-sm-6 col-xs-12">';
		$motivos_baja = array('Mudanza de la familia' => 'Mudanza de la familia', 'Pasó a educación de jóvenes y adultos' => 'Pasó a educación de jóvenes y adultos', 'Pasó a educación especial' => 'Pasó a educación especial', 'No le gustaba la escuela' => 'No le gustaba la escuela', 'Tenía muchas materias previas' => 'Tenía muchas materias previas', 'Problemas disciplinarios' => 'Problemas disciplinarios',  'Decisión de la escuela' => 'Decisión de la escuela', 'Problemas de salud' =>  'Problemas de salud', 'Cambio en la situación económica' => 'Cambio en la situación económica', 'Comenzó a trabajar' => 'Comenzó a trabajar', 'Quedó embarazada' => 'Quedó embarazada', 'Debe colaborar en la casa' => 'Debe colaborar en la casa');
		echo $this->Form->input('motivo_baja', array('options' => $motivos_baja, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_egreso', array('type' => 'text', 'between' => '<br>', 'empty' => ' ','class' => 'datepicker form-control'));
		echo $this->Form->input('libro_matriz', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('acta', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('folio', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('fecha_emision_titulo', array('type' => 'text', 'between' => '<br>', 'empty' => ' ','class' => 'datepicker form-control'));
		$tipos_recursante = array('Si' => 'Si', 'No' => 'No');
		echo $this->Form->input('recursante', array('options' => $tipos_recursante, 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));	
		echo $this->Form->input('nota', array('between' => '<br>', 'class' => 'form-control'));

			echo '</div><div class="col-md-4 col-sm-6 col-xs-12">';
			
		$condiciones_aprobacion = array('Promocion directa' => 'Promocion directa', 'Examen                                         regular' => 'Examen regular', 'Examen libre' => 'Examen                                         libre', 'Examen de reválida' => 'Examen de reválida',                                         'Equivalencia' => 'Equivalencia', 'Saberes adquiridos'                                          => 'Saberes adquiridos');
		echo $this->Form->input('condicion_aprobacion', array('options' => $condiciones_aprobacion, 'empty' => '', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('ciclo_id', array('label'=>'Ciclo', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('centro_id', array('label'=>'Centro', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('Curso', array('label'=>'Curso', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('Materia', array('label'=>'Materia', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('empleado_id', array('label'=>'Empleado', 'between' => '<br>', 'class' => 'form-control'));
?>

</div></div>