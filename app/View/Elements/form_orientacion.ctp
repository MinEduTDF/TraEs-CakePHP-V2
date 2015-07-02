<?php
		$nombres = array('Todas_3' => 'Todas_3', 'Todas_15' => 'Todas_15', 'Todas_302' => 'Todas_302',
		                 'Auxiliar en Seguridad e Higiene en el Trabajo' => 'Auxiliar en Seguridad e Higiene en el Trabajo',
                    	 'Auxiliar en Telecomunicaciones' => 'Auxiliar en Telecomunicaciones',
						 'Auxiliar en Administración de Empresas' => 'Auxiliar en Administración de Empresas',
						 'Auxiliar en Desarrollo de Comunidades' => 'Auxiliar en Desarrollo de Comunidades', 
						 'Auxiliar en Enfermería' => 'Auxiliar en Enfermería');
        echo $this->Form->input('nombre', array('options' => $nombres, 'empty' => ''));
		echo $this->Form->input('descripcion');
		echo $this->Form->input('centro_id');
?>