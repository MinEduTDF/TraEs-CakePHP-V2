<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
<?php
		echo $this->Form->input('creado', array('type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('alumno_id', array('label'=>'Alumno ID', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('vinculo', array('label'=>'Vinculo', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nombre_completo', array('label'=>'Nombre Completo', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('cuil_cuit', array('label'=>'Cuil / Cuit', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('ocupacion', array('label'=>'Ocupacion', 'between' => '<br>', 'class' => 'form-control'));

echo '</div><div class="col-md-6 col-sm-6 col-xs-12">';

		echo $this->Form->input('nacionalidad', array('label'=>'Nacionalidad', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('email', array('label'=>'Email', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('telefono_nro', array('label'=>'Numero de Telefono', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('domicilio', array('label'=>'Domicilio', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('barrio', array('label'=>'Barrio', 'between' => '<br>', 'class' => 'form-control'));
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' =>                          'Ushuaia');
        echo $this->Form->input('ciudad', array('options' => $ciudades, 'empty' => '', 'class' => 'form-control'));
				
?>
</div>
</div>
