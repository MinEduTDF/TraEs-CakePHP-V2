<?php
		//echo $this->Form->input('nombre');
		$nombres = array('AUX_ADM1_3' => 'AUX_ADM1_3','AUX_ADM2_3' => 'AUX_ADM2_3','AUX_ADM3_3' => 'AUX_ADM3_3_3',
           		         'AUX_ADM1_15' => 'AUX_ADM1_15','AUX_ADM2_15' => 'AUX_ADM2_15','AUX_ADM3_15' => 'AUX_ADM3_15',
						 'AUX_ADM1_302' => 'AUX_ADM1_302','AUX_ADM2_302' => 'AUX_ADM2_302','AUX_ADM3_302' => 'AUX_ADM3_302',
						 'REF_INF_3' => 'REF_INF_3','REF_INF_15' => 'REF_INF_15','REF_INF_302' => 'REF_INF_302',
						 'MAT1A_3' => 'MAT1A_3', 'MAT1A_15' => 'MAT1A_15', 'MAT1A_302' => 'MAT1A_302','MAT1A_364' => 'MAT1A_364',
                		 'HIS1A_15' => 'HIS1A_15');
        echo $this->Form->input('nombre', array('options' => $nombres, 'empty' => ''));
		//echo $this->Form->input('tipo');
		$tipos = array('Docente' => 'Docente', 'Bibliotecario' => 'Bibliotecario', 'Administrativo' => 'Administrativo',
                  	   'Informatico' => 'Informatico', 'Maestranza' => 'Maestranza');
        echo $this->Form->input('tipo', array('options' => $tipos, 'empty' => ''));
		echo $this->Form->input('resolucionNro');
		echo $this->Form->input('hsCatedra');
		//echo $this->Form->input('hsReloj');
		//echo $this->Form->input('area');
		$areas = array('Docente' => 'Docente',
		               'Direccion' => 'Direccion', 'Administracion' => 'Administracion', 'Pedagogia' => 'Pedagogia',
                	   'Bibliotecologia' => 'Bibliotecologia', 'Informatica' => 'Informatica',
					   'Mantenimiento' => 'Mantenimiento');
        echo $this->Form->input('area', array('options' => $areas, 'empty' => ''));
		//echo $this->Form->input('puesto');
		$puestos = array('Aula' => 'Aula',
		                 'Direccion' => 'Direccion', 'Secretaria' => 'Secretaria', 'Alumnos' => 'Alumnos', 
		                 'Gabinete' => 'Gabinete', 'Biblioteca' => 'Biblioteca', 'Informatica' => 'Informatica',
						 'Deposito de Maestranza' => 'Deposito de Maestranza');
        echo $this->Form->input('puesto', array('options' => $puestos, 'empty' => ''));
		echo $this->Form->input('descricpion');
		//echo $this->Form->input('fechaCreacion');
		echo $this->Form->input('fechaCreacion', array('type' => 'date', 'dateFormat' => 'DMY'));
		//echo $this->Form->input('fechaCierre');
		echo $this->Form->input('fechaCierre', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		//echo $this->Form->input('fechaAltaPersona');
		echo $this->Form->input('fechaAltaPersona', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		//echo $this->Form->input('fechaBajaPersona');
		echo $this->Form->input('fechaBajaPersona', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		//echo $this->Form->input('fechaCambioSituacionPersona');
		echo $this->Form->input('fechaCambioSituacionPersona', array('type' => 'date', 'dateFormat' => 'DMY', 'empty' => ''));
		/*echo $this->Form->input('estado');
		$estados = array('Cubierto' => 'Cubierto', 'Vacante' => 'Vacante');
        echo $this->Form->input('estado', array('options' => $estados, 'empty' => ''));*/
		echo $this->Form->input('estado_id', array('label'=>'Estado*','empty' => ''));
		echo $this->Form->input('centro_id', array('label'=>'Centro*','empty' => ''));
		echo $this->Form->input('curso_id', array('label'=>'Curso*','empty' => ''));
		echo $this->Form->input('materia_id', array('label'=>'Materia*','empty' => ''));
		echo $this->Form->input('Ciclo', array('label'=>'Ciclo*'));
		echo $this->Form->input('Docente', array('label'=>'Docente*'));
		echo $this->Form->input('Empleado', array('label'=>'Empleado*'));
		echo $this->Form->input('Horario', array('label'=>'Horario*'));
?>