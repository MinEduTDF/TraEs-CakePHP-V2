<h3><?php echo __('Datos Personales');?></h3>
<?php 
        echo $this->Form->input('creado', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		$documentosTipos = array('DNI' => 'DNI', 'CI' => 'CI', 'LC' => 'LC', 'LE' => 'LE', 'Cédula                                 Mercosur' => 'Cédula Mercosur', 'Pasaporte extranjero' =>                                 'Pasaporte extranjero', 'Cédula de identidad extranjera' =>                                 'Cédula de identidad extranjera', 'Otro documento extranjero' =>                                 'Otro documento extranjero', 'No posee' => 'No posee', 'En                                  trámite' => 'En trámite');
        echo $this->Form->input('documento_tipo', array('options' => $documentosTipos, 'empty' => ''));
		echo $this->Form->input('documento_nro');
		echo $this->Form->input('cuil_cuit');
		echo $this->Form->input('ocupacion');
		echo $this->Form->input('fecha_nac', array('label' => 'Fecha Nacimiento', 'type' => 'date'                                , 'dateFormat' => 'DMY', 'empty' => ''));
		echo $this->Form->input('lugar_nac', array('label' => 'Lugar Nacimiento', ));
		echo $this->Form->input('nacionalidad');
		$indigenas = array('Atacama' => 'Atacama', 'Ava Guaraní' => 'Ava Guaraní', 'Aymara' =>                           'Aymara', 'Comechingón' => 'Comechingón', 'Chaná' => 'Chaná', 'Chané'                           => 'Chané', 'Charrúa' => 'Charrúa', 'Chorote' => 'Chorote', 'Chulupí                           (Nivacklé)' => 'Chulupí (Nivacklé)', 'Diaguita' => 'Diaguita',                           'Diaguita-Calchaquí' => 'Diaguita-Calchaquí', 'Guaraní' => 'Guaraní',                           'Huarpe' => 'Huarpe', 'Kolla (Colla)' => 'Kolla (Colla)', 'Lule' =>                           'Lule', 'Mapuche (Mapuce)' => 'Mapuche (Mapuce)', 'Mapuche-Tehuelche'                            => 'Mapuche-Tehuelche', 'Mbyá Guaraní' => 'Mbyá Guaraní', 'Moqoit                            (Mocoví)' => 'Moqoit (Mocoví)', 'Ocloya' => 'Ocloya', 'Omaguaca' =>                           'Omaguaca', 'Qom (Toba)' => 'Qom (Toba)', 'Quechua' => 'Quechua',                           'Querandí' => 'Querandí', 'Rankülche (Ranquel)' => 'Rankülche (Ranquel)                           ', 'Sanavirón' => 'Sanavirón', 'Selknam (Ona)' => 'Selknam (Ona)',                           'Tapiete' => 'Tapiete', 'Tehuelche (Aoniken)' => 'Tehuelche (Aoniken)',                           'Tilián' => 'Tilián', 'Tonocoté' => 'Tonocoté', 'Tupí-guraní' =>                           'Tupí-guraní', 'Vilela' => 'Vilela', 'Wichí' => 'Wichí', 'Otro/s' =>                           'Otro/s');
        echo $this->Form->input('indigena', array('options' => $indigenas, 'empty' => ''));
		$estadosCiviles = array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Viudo' => 'Viudo',                                'Divorciado' => 'Divorciado', 'Concubinato' => 'Concubinato',                                'Unión civil' => 'Unión civil');
        echo $this->Form->input('estado_civil', array('options' => $estadosCiviles, 'empty' => ''));
?>
<h3><?php echo __('Datos de contacto');?></h3>
<?php		
		echo $this->Form->input('telefono_nro');
		echo $this->Form->input('email');
		echo $this->Form->input('calle_nombre');
		echo $this->Form->input('calle_nro');
		echo $this->Form->input('barrio');
		$ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' =>                          'Ushuaia');
        echo $this->Form->input('ciudad', array('options' => $ciudades, 'empty' => ''));
				
?>