<div class="inscripcions form">
<?php echo $this->Form->create('Inscripcion',array('type'=>'get','action'=>'index'));?>
	<fieldset>
 		<legend><?php echo __('Buscar'); ?></legend>
        
	<?php
		//echo $this->Form->input('tipoInscripcion', array('empty' => ''));
		//echo $this->Form->input('Alumno');
		echo $this->Form->input('ciclo_id', array('empty' => ''));
		echo $this->Form->input('centro_id', array('empty' => ''));
		echo $this->Form->input('Materia');
		echo $this->Form->input('empleado_id', array('empty' => ''));
		/*echo $this->Form->label('Desde');
		echo $this->Form->day('day_f',isset($this->params['named']['day_f'])?$this->params['named']['day_f']:1,
		                       array('name'=>'day_f','empty'=>false));
		echo $this->Form->month('month_f',isset($this->params['named']['month_f'])?$this->params['named']['month_f']:0,
	                         	array('name'=>'month_f','empty'=>false,'monthNames' => 
								array('Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic')));
		echo $this->Form->year('year_f',date('Y') - 5,date('Y') + 5, isset($this->params['named']['year_f'])?
		                        $this->params['named']['year_f']:date('Y') - 5,
								array('name'=>'year_f','empty'=>false));
		echo $this->Form->label('Hasta');
		echo $this->Form->day('day_t',isset($this->params['named']['day_t'])?$this->params['named']['day_t']:31,
		                       array('name'=>'day_t','empty'=>false));
		echo $this->Form->month('month_t',isset($this->params['named']['month_t'])?$this->params['named']['month_t']:11,
		                       array('name'=>'month_t','empty'=>false,'monthNames' => 
							   array('Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic')));
		echo $this->Form->year('year_t',date('Y') - 5,date('Y') + 5, isset($this->params['named']['year_t'])?
		                       $this->params['named']['year_t']:date('Y')+5,array('name'=>'year_t','empty'=>false));
*/		
?>
    
	</fieldset>
<?php echo $this->Form->end(__('Buscar'));?>
</div>