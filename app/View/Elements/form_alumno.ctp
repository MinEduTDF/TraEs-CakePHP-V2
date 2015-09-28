
<!-- *********** DatePicker ************* -->
<?php echo $this->Html->script('datepicker'); ?>
<!-- ************************************** -->
<!-- *********** Tooltip ************* -->
<?php echo $this->Html->script('tooltip'); ?>
<!-- ************************************** -->


  <div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
   
<?php 
        echo $this->Form->input('creado', array('label' => 'Creado*', 'type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca fecha de creación del registro'));
		echo $this->Form->input('nombres', array('label' => 'Nombres*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca Nombre completo'));
		echo $this->Form->input('apellidos', array('label'=>'Apellidos*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca Apellido completo'));
        echo $this->Form->input('foto', array('type' => 'file', 'label'=>'Foto', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Adjunte imagen de 640 x 480'));
        echo $this->Form->input('foto_dir', array('type' => 'hidden'));
		$documentosTipos = array('DNI' => 'DNI', 'CI' => 'CI', 'LC' => 'LC', 'LE' => 'LE', 'Cédula                                 Mercosur' => 'Cédula Mercosur', 'Pasaporte extranjero' =>                                 'Pasaporte extranjero', 'Cédula de identidad extranjera' =>                                 'Cédula de identidad extranjera', 'Otro documento extranjero' =>                                 'Otro documento extranjero', 'No posee' => 'No posee', 'En                                  trámite' => 'En trámite','between' => '<br>', 'class' => 'form-control');
        echo $this->Form->input('documento_tipo', array('label' => 'Tipo de Documento*','options' => $documentosTipos, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
		echo $this->Form->input('documento_nro', array('label'=>'Número de Documento*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique el número sin puntos ni espacios'));
		echo $this->Form->input('cuil_cuit', array('label'=>'CUIL / CUIT', 'between' => '<br>', 'class' => 'form-control', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique el número sin puntos ni espacios'));

echo '</div><div class="col-md-4 col-sm-6 col-xs-12">';
		echo $this->Form->input('fecha_nac', array('label' => 'Fecha de Nacimiento*', 'between' => '<br>', 'type' => 'text', 'empty' => '','class' => 'datepicker form-control'));
		echo $this->Form->input('lugar_nac', array('label' => 'Lugar de Nacimiento*', 'between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nacionalidad',array('label' => 'Nacionalidad*', 'between' => '<br>', 'class' => 'form-control'));
		$indigenas = array('Atacama' => 'Atacama', 'Ava Guaraní' => 'Ava Guaraní', 'Aymara' =>                           'Aymara', 'Comechingón' => 'Comechingón', 'Chaná' => 'Chaná', 'Chané'                           => 'Chané', 'Charrúa' => 'Charrúa', 'Chorote' => 'Chorote', 'Chulupí                           (Nivacklé)' => 'Chulupí (Nivacklé)', 'Diaguita' => 'Diaguita',                           'Diaguita-Calchaquí' => 'Diaguita-Calchaquí', 'Guaraní' => 'Guaraní',                           'Huarpe' => 'Huarpe', 'Kolla (Colla)' => 'Kolla (Colla)', 'Lule' =>                           'Lule', 'Mapuche (Mapuce)' => 'Mapuche (Mapuce)', 'Mapuche-Tehuelche'                            => 'Mapuche-Tehuelche', 'Mbyá Guaraní' => 'Mbyá Guaraní', 'Moqoit                            (Mocoví)' => 'Moqoit (Mocoví)', 'Ocloya' => 'Ocloya', 'Omaguaca' =>                           'Omaguaca', 'Qom (Toba)' => 'Qom (Toba)', 'Quechua' => 'Quechua',                           'Querandí' => 'Querandí', 'Rankülche (Ranquel)' => 'Rankülche (Ranquel)                           ', 'Sanavirón' => 'Sanavirón', 'Selknam (Ona)' => 'Selknam (Ona)',                           'Tapiete' => 'Tapiete', 'Tehuelche (Aoniken)' => 'Tehuelche (Aoniken)',                           'Tilián' => 'Tilián', 'Tonocoté' => 'Tonocoté', 'Tupí-guraní' =>                           'Tupí-guraní', 'Vilela' => 'Vilela', 'Wichí' => 'Wichí', 'Otro/s' =>                           'Otro/s');
        echo $this->Form->input('indigena', array('label' => 'Pueblo originario', 'options' => $indigenas, 'empty' => '','between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Si pertenece a algún pueblo originario seleccione una opción de la lista'));
		$estadosCiviles = array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Viudo' => 'Viudo',                                'Divorciado' => 'Divorciado', 'Concubinato' => 'Concubinato',                                'Unión civil' => 'Unión civil');
        echo $this->Form->input('estado_civil', array('label' => 'Estado civil*', 'options' => $estadosCiviles, 'empty' => '','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('ocupacion', array('label'=>'Ocupación*', 'between' => '<br>', 'class' => 'form-control'));
?>
</div><div class="col-md-4 col-sm-6 col-xs-12">
<!--    <div class="subtitulo">Datos de contacto</div> -->
<?php		
		echo $this->Form->input('telefono_nro', array('label' => 'Numero de Telefono*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca un teléfono de contacto'));
		echo $this->Form->input('email', array('label' => 'Email','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca un email de contacto'));
		echo $this->Form->input('calle_nombre', array('label' => 'Nombre de la calle*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca el nombre de la calle del domicilio real'));
		echo $this->Form->input('calle_nro', array('label' => 'Número de la calle*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca el número de la calle del domicilio real'));
		echo $this->Form->input('barrio', array('label' => 'Barrio*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca el nombre del barrio del domicilio real'));
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' =>'Ushuaia');
        echo $this->Form->input('ciudad', array('label' => 'Ciudad*', 'empty' => '', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Introduzca el nombre de la ciudad del domicilio real'));
				
?>
</div></div>