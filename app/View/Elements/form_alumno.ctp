<?php echo $this->Html->script(array('datepicker', 'tooltip')); ?>
<div class="row">
   <div class="col-md-4 col-sm-6 col-xs-12">
	  <?php 
          echo $this->Form->input('creado', array('label' => 'Creado*', 'type' => 'text', 'between' => '<br>', 'empty' => '','class' => 'datepicker form-control', 'Placeholder' => 'Indique la fecha de creación del registro...'));
          echo $this->Form->input('nombres', array('label' => 'Nombres*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese todos los nombres', 'placeholder' => 'Ingrese todos los Nombres...'));
          echo $this->Form->input('apellidos', array('label'=>'Apellidos*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese todos los apellidos', 'placeholder' => 'Ingrese todos los apellidos...'));
          echo $this->Form->input('foto', array('type' => 'file', 'label' => 'Foto', 'id' => 'foto', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
          echo $this->Form->input('foto_dir', array('type' => 'hidden'));        	
          $documentosTipos = array('DNI' => 'DNI', 'CI' => 'CI', 'LC' => 'LC', 'LE' => 'LE', 'Cédula Mercosur' => 'Cédula Mercosur',
                                   'Pasaporte extranjero' => 'Pasaporte extranjero', 'Cédula de identidad extranjera' => 'Cédula de identidad extranjera',
                                   'Otro documento extranjero' => 'Otro documento extranjero', 'No posee' => 'No posee', 'En trámite' => 'En trámite');
          echo $this->Form->input('documento_tipo', array('label' => 'Tipo de Documento*', 'empty' => 'Ingrese un tipo...', 'options' => $documentosTipos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción...'));
          echo $this->Form->input('documento_nro', array('label'=>'Número de Documento*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique el número sin puntos, ni guiones, ni espacios', 'placeholder' => 'Ingrese un nº de documento...'));
          echo $this->Form->input('cuil_cuit', array('label'=>'CUIL / CUIT', 'between' => '<br>', 'class' => 'form-control', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique el número sin puntos, ni guiones, ni espacios', 'placeholder' => 'Ingrese un nº de CUIL/CUIT...'));
        echo '</div><div class="col-md-4 col-sm-6 col-xs-12">';
		  echo $this->Form->input('fecha_nac', array('label' => 'Fecha de Nacimiento*', 'between' => '<br>', 'type' => 'text', 'class' => 'datepicker form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique la fecha con el formato AAAA-MM-DD', 'placeholder' => 'Ingrese una fecha...'));
		  echo $this->Form->input('lugar_nac', array('label' => 'Lugar de Nacimiento*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique el localidad donde nació', 'placeholder' => 'Ingrese una localidad...'));
		  echo $this->Form->input('nacionalidad',array('label' => 'Nacionalidad*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique su nacionalidad', 'placeholder' => 'Ingrese su nacionalidad...'));
		  $indigenas = array('Atacama' => 'Atacama', 'Ava Guaraní' => 'Ava Guaraní', 'Aymara' => 'Aymara',
							 'Comechingón' => 'Comechingón', 'Chaná' => 'Chaná', 'Chané' => 'Chané',
							 'Charrúa' => 'Charrúa', 'Chorote' => 'Chorote', 'Chulupí (Nivacklé)' => 'Chulupí (Nivacklé)',
							 'Diaguita' => 'Diaguita', 'Diaguita-Calchaquí' => 'Diaguita-Calchaquí', 'Guaraní' => 'Guaraní',
							 'Huarpe' => 'Huarpe', 'Kolla (Colla)' => 'Kolla (Colla)', 'Lule' => 'Lule',
							 'Mapuche (Mapuce)' => 'Mapuche (Mapuce)', 'Mapuche-Tehuelche' => 'Mapuche-Tehuelche',
							 'Mbyá Guaraní' => 'Mbyá Guaraní', 'Moqoit (Mocoví)' => 'Moqoit (Mocoví)', 'Ocloya' => 'Ocloya',
							 'Omaguaca' => 'Omaguaca', 'Qom (Toba)' => 'Qom (Toba)', 'Quechua' => 'Quechua',
							 'Querandí' => 'Querandí', 'Rankülche (Ranquel)' => 'Rankülche (Ranquel)', 'Sanavirón' => 'Sanavirón',
							 'Selknam (Ona)' => 'Selknam (Ona)', 'Tapiete' => 'Tapiete', 'Tehuelche (Aoniken)' => 'Tehuelche (Aoniken)',
							 'Tilián' => 'Tilián', 'Tonocoté' => 'Tonocoté', 'Tupí-guraní' => 'Tupí-guraní', 'Vilela' => 'Vilela',
							 'Wichí' => 'Wichí', 'Otro/s' => 'Otro/s');
          echo $this->Form->input('indigena', array('label' => 'Pueblo originario', 'empty' => 'Ingrese una comunidad...', 'options' => $indigenas, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Si pertenece a algún pueblo originario seleccione una opción de la lista'));
          $estadosCiviles = array('Soltero' => 'Soltero', 'Casado' => 'Casado', 'Viudo' => 'Viudo', 'Divorciado' => 'Divorciado',
		                          'Concubinato' => 'Concubinato', 'Unión civil' => 'Unión civil');
		  echo $this->Form->input('estado_civil', array('label' => 'Estado civil*', 'empty' => 'Ingrese un estado...', 'options' => $estadosCiviles, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción de la lista'));
		  echo $this->Form->input('ocupacion', array('label'=>'Ocupación*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Indique a qué se dedica', 'placeholder' => 'Ingrese una ocupación...'));
		  echo $this->Form->input('telefono_nro', array('label' => 'Numero de Telefono*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un teléfono de contacto', 'placeholder' => 'Ingrese un nº de teléfono...'));
      ?>
   </div>
   <div class="col-md-4 col-sm-6 col-xs-12"><!--<div class="subtitulo">Datos de contacto</div> -->
		<?php		
            echo $this->Form->input('email', array('label' => 'Email','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un email de contacto', 'placeholder' => 'Ingrese un email...'));
            echo $this->Form->input('calle_nombre', array('label' => 'Nombre de la calle*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el nombre de la calle del domicilio real', 'placeholder' => 'Ingrese el nombre de la calle...'));
            echo $this->Form->input('calle_nro', array('label' => 'Número de la calle*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el número de la calle del domicilio real', 'placeholder' => 'Ingrese el número de la calle...'));
                  $barrios = array('Río Pipo' => 'Río Pipo', 'Los Alakalufes' => 'Los Alakalufes', 'Bella Vista' => 'Bella Vista', 
                               'Latinoamericano' => 'Latinoamericano', 'Los Andes' => 'Los Andes', 'Los Fueguinos' => 'Los Fueguinos',
                               'General Manuel Belgrano' => 'General Manuel Belgrano', 'Monte Gallinero' => 'Monte Gallinero',
                               'Bahia Golondrina' => 'Bahia Golondrina', 'Turba I' => 'Turba I', 'El Libertador' => 'El Libertador',
                               'Felipe Varela' => 'Felipe Varela', '12 de Octubre' => '12 de Octubre', 'Andino' => 'Andino', 'Le Martial' => 'Le Martial',
                               'Planta Potabilizadora' => 'Planta Potabilizadora', 'Pista de Esquí' => 'Pista de Esquí', 'Onaisin' => 'Onaisin',
                               'Sección K' => 'Sección K', 'ENTEL' => 'ENTEL', 'Los Pinos' => 'Los Pinos', 'Alte. Solier' => 'Alte. Solier',
                               'Alte. Storni' => 'Alte. Storni', 'Primer Argentino' => 'Primer Argentino', 'Gaucho Rivero' => 'Gaucho Rivero',
                               'Centenario' => 'Centenario', 'San Salvador' => 'San Salvador', 	'El Fuelle' => 'El Fuelle', 
                               'Don Bosco' => 'Don Bosco', 'La Misión' => 'La Misión', '5 de Octubre' => '5 de Octubre', 'Tolkar' => 'Tolkar',
                               'Costa Polideportivo' => 'Costa Polideportivo', 'Alte. Brown' => 'Alte. Brown', 'José Hernández' => 'José Hernández',
                               'Piedrabuena' => 'Piedrabuena', 'Las Lengas' => 'Las Lengas', 'Los Yaganes' => 'Los Yaganes', '2 de Abril' => '2 de Abril',
                               '"Chacho" Peñaloza' => '"Chacho" Peñaloza', 'Martín Güemes' => 'Martín Güemes', 'Los Canelos' => 'Los Canelos',
                               'Provincias Unidas' => 'Provincias Unidas', 'Kaupen' => 'Kaupen', 'La Cumbre' => 'La Cumbre', 'Akawaia' => 'Akawaia',
                               'Itulara' => 'Itulara', '245 Viviendas' => '245 Viviendas', 'Nueva Provincia' => 'Nueva Provincia',
                               'Thomas Bridges' => 'Thomas Bridges', 'Centro' => 'Centro', 'Costa Centro' => 'Costa Centro',
                               'Los Calafates' => 'Los Calafates', 'Los Alerces' => 'Los Alerces', 'Obras Sanitarias' => 'Obras Sanitarias',
                               'Mirador del Beagle' => 'Mirador del Beagle', 'Las Terrazas' => 'Las Terrazas', 'Juan Domingo Perón' => 'Juan Domingo Perón',
                               'Towora' => 'Towora', 'Crucero A.R.A. Gral. Belgrano' => 'Crucero A.R.A. Gral. Belgrano', 'Ecológico' => 'Ecológico',
                               'La Colina' => 'La Colina', 'Bosque del Faldeo' => 'Bosque del Faldeo', 'Parque' => 'Parque', 'Kaiken' => 'Kaiken',
                               'La Oca' => 'La Oca', 'Los Morros' => 'Los Morros', 'Parque Industrial Medio' => 'Parque Industrial Medio', 'Bahía' => 'Bahía',
                               'San Vicente de Paul' => 'San Vicente de Paul', 'La Cantera' => 'La Cantera', 'Valle de Andorra' => 'Valle de Andorra',
                               'Parque Industrial Bajo' => 'Parque Industrial Bajo', 'El Mirador' => 'El Mirador', 'Altos Ruta 3 (El Mirador Alto)' => 'Altos Ruta 3 (El Mirador Alto)',
                               'Mirador del Pipo' => 'Mirador del Pipo', 'Malvinas Argentinas' => 'Malvinas Argentinas', 'Albatros' => 'Albatros',
                               'Soberanía Nacional' => 'Soberanía Nacional', 'Canal de Beagle' => 'Canal de Beagle', 'Club del Campo' => 'Club del Campo',
                               'Casas del Sur' => 'Casas del Sur');
            echo $this->Form->input('barrio', array('label' => 'Barrio*', 'empty' => 'Ingrese un barrio...', 'options' => $barrios, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción.'));
            $asentamientos = array('10 de Febrero' => '10 de Febrero', 'El Escondido' => 'El Escondido', 'La Bolsita' => 'La Bolsita', '11 de Noviembre' => '11 de Noviembre',
                                   'El Mirador' => 'El Mirador', 'El Mirador de Ushuaia' => 'El Mirador de Ushuaia', 'El Obrero' => 'El Obrero', 'Dos Banderas' => 'Dos Banderas',
                                   'Las Raíces' => 'Las Raíces', 'La cima' => 'La cima', 'El Colombo' => 'El Colombo', 'Espacio Verde B° Bella Vista' => 'Espacio Verde B° Bella Vista',
                                   'Espacio Verde B° Latinoamericano' => 'Espacio Verde B° Latinoamericano', 'Los Leñadores' => 'Los Leñadores', 'Las Reinas' => 'Las Reinas',
                                   'Itati' => 'Itati');
            echo $this->Form->input('asentamiento', array('label' => 'Asentamiento', 'empty' => 'Ingrese un asentamiento...',  'options' => $asentamientos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción.'));
            $ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' =>'Ushuaia');
            echo $this->Form->input('ciudad', array('label' => 'Ciudad*', 'empty' => 'Ingrese una ciudad...', 'options' => $ciudades, 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione la ciudad del domicilio real', 'placeholder' => 'Ingrese una ciudad...'));
            $pendientes = array('1' => 'SI', '2' => 'NO');
            echo $this->Form->input('pendiente', array('label' => 'Pendiente*', 'empty' => 'Ingrese una opción...', 'options' => $pendientes, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese sí la inscripción queda pendiente'));
        ?>
   </div>
</div>