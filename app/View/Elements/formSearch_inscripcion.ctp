
<?php echo $this->Form->create('Inscripcion',array('type'=>'get','action'=>'index'));?>
<?php echo $this->Form->input('legajo_nro', array('label' => 'Legajo Nro: ','class' => 'form-control'));	?>
</p><div class="text-center">
			<?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-success btn-lg'));?>
	</div>

<?php
//echo $this->Form->input('alumno_id', array('empty' => ''));
		//echo $this->Form->input('fecha_alta', array('label' => 'Fecha de alta:', 'type' => 'date',                                'dateFormat' => 'DMY', 'empty' => ' '));
		//echo $this->Form->input('fecha_baja', array('label' => 'Fecha de baja:', 'type' => 'date',                                'dateFormat' => 'DMY', 'empty' => ' '));
		//echo $this->Form->input('fecha_egreso', array('label' => 'Fecha de egreso:', 'type' =>                                'date', 'dateFormat' => 'DMY', 'empty' => ' '));
		/*echo $this->Form->label('Desde');
		echo $this->Form->day('day_f',isset($this->params['named']['day_f'])?$this->params['named']['day_f']:1, array('name'=>'day_f','empty'=>false));
		echo $this->Form->month('month_f',isset($this->params['named']['month_f'])?$this->params['named']['month_f']:0, array('name'=>'month_f','empty'=>false,'monthNames' =>array('Ene','Feb','Mar','Abr','May','Jun','Jul', 'Ago','Sep','Oct','Nov','Dic')));
		echo $this->Form->year('year_f',date('Y') - 5,date('Y') + 5, isset($this->params['named']['year_f'])? $this->params['named']['year_f']:date('Y') - 5,
array('name'=>'year_f','empty'=>false));
		echo $this->Form->label('Hasta');
		echo $this->Form->day('day_t',isset($this->params['named']['day_t'])?$this->params['named']['day_t']:31, array('name'=>'day_t','empty'=>false));
		echo $this->Form->month('month_t',isset($this->params['named']['month_t'])?$this->params['named']['month_t']:11, array('name'=>'month_t','empty'=>false,                'monthNames' => array('Ene','Feb','Mar','Abr','May','Jun','Jul', Ago','Sep','Oct','Nov','Dic')));
		echo $this->Form->year('year_t',date('Y') - 5,date('Y') + 5, isset($this->params['named']['year_t'])? $this->params['named']['year_t']:date('Y')+5,array('name'=>'year_t','empty'=>false));
		*/
?>