
<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

<div class="row"><div class="subtitulo">Datos del centro</div>
<div class="col-md-4 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('cue', array('id'=>'cue', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nombre', array('id'=>'nombre', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('sigla', array('id'=>'sigla', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('fechaFundacion', array('label' => 'Fecha Fundación', 'type' => 'date', 'dateFormat' => 'DMY', 'between' => '<br>', 'type' => 'text', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('equipoDirectivo', array('label' => 'Director', 'id'=>'equipoDirectivo', 'between' => '<br>', 'class' => 'form-control'));
?>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
<!--<div class="subtitulo">Datos de contacto</div>-->
<?php
		echo $this->Form->input('direccion', array('id'=>'direccion', 'between' => '<br>', 'class' => 'form-control'));
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' => 'Ushuaia', 'between' => '<br>', 'class' => 'form-control');
        echo $this->Form->input('ciudad', array('options' => $ciudades, 'empty' => '', 'id'=>'ciudad', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('telefono', array('id'=>'telefono', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('email', array('id'=>'email', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('url', array('id'=>'url', 'between' => '<br>', 'class' => 'form-control'));
?>
</div>

<!--<div class="col-md-4 col-sm-6 col-xs-12">
<div class="subtitulo">Datos de contacto</div>
<?php
		echo $this->Form->input('Empleado', array('id'=>'Empleado', 'between' => '<br>', 'class' => 'form-control'));
?>
</div>-->
</div>