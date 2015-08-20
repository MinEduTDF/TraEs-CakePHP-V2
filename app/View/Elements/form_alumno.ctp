
<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->

  <div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
   
<?php 
        echo $this->Form->input('creado', array('type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('nombres', array('label'=>'Nombre', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('apellidos', array('label'=>'Apellido', 'between' => '<br>', 'class' => 'form-control'));
		$documentosTipos = array('DNI' => 'DNI', 'CI' => 'CI', 'LC' => 'LC', 'LE' => 'LE', 'Cédula                                 Mercosur' => 'Cédula Mercosur', 'Pasaporte extranjero' =>                                 'Pasaporte extranjero', 'Cédula de identidad extranjera' =>                                 'Cédula de identidad extranjera', 'Otro documento extranjero' =>                                 'Otro documento extranjero', 'No posee' => 'No posee', 'En                                  trámite' => 'En trámite','between' => '<br>', 'class' => 'form-control');
        echo $this->Form->input('documento_tipo', array('label' => 'Tipo de Documento','options' => $documentosTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('documento_nro', array('label'=>'Numero de Documento:', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('cuil_cuit', array('label'=>'CUIL / CUIT', 'between' => '<br>', 'class' => 'form-control'));

echo '</div><div class="col-md-4 col-sm-6 col-xs-12">';
		echo $this->Form->input('ocupacion', array('label'=>'Ocupacion', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('fecha_nac', array('label' => 'Fecha Nacimiento', 'between' => '<br>', 'type' => 'text', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('lugar_nac', array('label' => 'Lugar Nacimiento', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nacionalidad',array('label' => 'Nacionalidad', 'between' => '<br>', 'class' => 'form-control'));
		$indigenas = array('Atacama' => 'Atacama', 'Ava Guaraní' => 'Ava Guaraní', 'Aymara' =>                           'Aymara', 'Comechingón' => 'Comechingón', 'Chaná' => 'Chaná', 'Chané'                           => 'Chané', 'Charrúa' => 'Charrúa', 'Chorote' => 'Chorote', 'Chulupí                           (Nivacklé)' => 'Chulupí (Nivacklé)', 'Diaguita' => 'Diaguita',                           'Diaguita-Calchaquí' => 'Diaguita-Calchaquí', 'Guaraní' => 'Guaraní',                           'Huarpe' => 'Huarpe', 'Kolla (Colla)' => 'Kolla (Colla)', 'Lule' =>                           'Lule', 'Mapuche (Mapuce)' => 'Mapuche (Mapuce)', 'Mapuche-Tehuelche'                            => 'Mapuche-Tehuelche', 'Mbyá Guaraní' => 'Mbyá Guaraní', 'Moqoit                            (Mocoví)' => 'Moqoit (Mocoví)', 'Ocloya' => 'Ocloya', 'Omaguaca' =>                           'Omaguaca', 'Qom (Toba)' => 'Qom (Toba)', 'Quechua' => 'Quechua',                           'Querandí' => 'Querandí', 'Rankülche (Ranquel)' => 'Rankülche (Ranquel)                           ', 'Sanavirón' => 'Sanavirón', 'Selknam (Ona)' => 'Selknam (Ona)',                           'Tapiete' => 'Tapiete', 'Tehuelche (Aoniken)' => 'Tehuelche (Aoniken)',                           'Tilián' => 'Tilián', 'Tonocoté' => 'Tonocoté', 'Tupí-guraní' =>                           'Tupí-guraní', 'Vilela' => 'Vilela', 'Wichí' => 'Wichí', 'Otro/s' =>                           'Otro/s');
        echo $this->Form->input('indigena', array('options' => $indigenas, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
		$estadosCiviles = array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Viudo' => 'Viudo',                                'Divorciado' => 'Divorciado', 'Concubinato' => 'Concubinato',                                'Unión civil' => 'Unión civil');
        echo $this->Form->input('estado_civil', array('options' => $estadosCiviles, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
?>
</div><div class="col-md-4 col-sm-6 col-xs-12">
<!--    <div class="subtitulo">Datos de contacto</div> -->
<?php		
		echo $this->Form->input('telefono_nro', array('label' => 'Numero de Telefono','class' => 'form-control'));
		echo $this->Form->input('email', array('label' => 'Email','class' => 'form-control'));
		echo $this->Form->input('calle_nombre', array('label' => 'Nombre de la calle','class' => 'form-control'));
		echo $this->Form->input('calle_nro', array('label' => 'Numero de la calle','class' => 'form-control'));
		echo $this->Form->input('barrio', array('label' => 'Barrio','class' => 'form-control'));
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' =>'Ushuaia');
        echo $this->Form->input('ciudad', array('label' => 'Ciudad', 'empty' => '', 'class' => 'form-control'));
				
?>
</div></div>