<div class="inasistencias form">
<?php echo $this->Form->create('Inasistencia',array('type'=>'get','action'=>'index'));?>
	<fieldset>
 		<legend><?php echo __('Buscar'); ?></legend>
        
	<?php
		echo $this->Form->input('curso_id', array('empty' => ''));
		echo $this->Form->input('materia_id', array('empty' => ''));
		echo $this->Form->input('alumno_id', array('empty' => ''));
		$tipos = array('un cuarto' => 'un cuarto' ,'media' => 'media', 'completa' => 'completa');
        echo $this->Form->input('tipo', array('options' => $tipos, 'empty' => ''));
		$tipos_justificado = array('Si' => 'Si', 'No' => 'No', 'Pendiente' => 'Pendiente');
        echo $this->Form->input('justificado', array('options' => $tipos_justificado, 'empty' => ''));
		$tipos_causa = array('Sin causa' => 'Sin causa', 'Razones particulares' => 'Razones particulares', 'Enfermedad' => 'Enfermedad', 'Fenómenos meteorológicos' => 'Fenómenos meteorológicos', 'Donación de sangre' => 'Donación de sangre', 'Obligaciones cívico_militares' => 'Obligaciones cívico_militares', 'Paro de transporte' => 'Paro de transporte');
        echo $this->Form->input('causa', array('options' => $tipos_causa, 'empty' => ''));
		echo $this->Form->input('creado', array('label' => 'Fecha de creación:', 'type' => 'date','dateFormat' => 'DMY', 'empty' => ' '));
		echo $this->Form->input('modificado', array('label' => 'Fecha de modificación:', 'type' =>'date', 'dateFormat' => 'DMY', 'empty' => ' '));
		/*echo $this->Form->label('Desde');
		echo $this->Form->day('day_f',isset($this->params['named']['day_f'])?$this->params['named'                              ]['day_f']:1, array('name'=>'day_f','empty'=>false));
		echo $this->Form->month('month_f',isset($this->params['named']['month_f'])?$this->params[                               'named']['month_f']:0, array('name'=>'month_f','empty'=>false,                               'monthNames' => array('Ene','Feb','Mar','Abr','May','Jun','Jul',                               'Ago','Sep','Oct','Nov','Dic')));
		echo $this->Form->year('year_f',date('Y') - 5,date('Y') + 5, isset($this->params['named'][                               'year_f'])? $this->params['named']['year_f']:date('Y') - 5,
								array('name'=>'year_f','empty'=>false));
		echo $this->Form->label('Hasta');
		echo $this->Form->day('day_t',isset($this->params['named']['day_t'])?$this->params['named'                              ]['day_t']:31, array('name'=>'day_t','empty'=>false));
		echo $this->Form->month('month_t',isset($this->params['named']['month_t'])?$this->params[                                'named']['month_t']:11, array('name'=>'month_t','empty'=>false,                                'monthNames' => array('Ene','Feb','Mar','Abr','May','Jun','Jul',                                'Ago','Sep','Oct','Nov','Dic')));
		echo $this->Form->year('year_t',date('Y') - 5,date('Y') + 5, isset($this->params['named'][                               'year_t'])? $this->params['named']['year_t']:date('Y')+5,array(                               'name'=>'year_t','empty'=>false));
		*/
?>
    
	</fieldset>
<?php echo $this->Form->end(__('Buscar'));?>
</div>