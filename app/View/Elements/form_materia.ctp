<?php
		echo $this->Form->input('curso_id');
		$nombres = array('Ninguna_3' => 'Ninguna_3','Ninguna_15' => 'Ninguna_15','Ninguna_302' =>                         'Ninguna_302', 'Matematica de primero' => 'Matematica de primero',                         'Matematica de segundo' => 'Matematica de segundo', 'Matematica de                         tercero' => 'Matematica de tercero', 'Lengua de primero' => 'Lengua de                         primero', 'Lengua de segundo' => 'Lengua de segundo', 'Lengua de tercero'                         => 'Lengua de tercero', 'Historia de primero' => 'Historia de primero',                         'Historia de segundo' => 'Historia de segundo','Historia de tercero' =>                         'Historia de tercero');
        echo $this->Form->input('nombre', array('options' => $nombres, 'empty' => ''));
		$alias = array('Ninguno_3' => 'Ninguno_3', 'Ninguno_15' => 'Ninguno_15', 'Ninguno_302' =>                       'Ninguno_302', 'MAT1A_3' => 'MAT1A_3', 'MAT1A_15' => 'MAT1A_15', 'MAT1A_302                       ' => 'MAT1A_302', 'MAT1A_364' => 'MAT1A_364', 'MAT_MOD1_364' =>                       'MAT_MOD1_364', 'LEN1A_3' => 'LEN1A_3', 'LEN1A_15' => 'LEN1A_15',  '                        LEN1A_302' => 'LEN1A_302', 'LEN1A_364' => 'LEN1A_364',
		               'HIS1A_3' => 'HIS1A_3', 'HIS1A_15' => 'HIS1A_15', 'HIS1A_302' => 'HIS1A_302                       ','HIS1A_364' => 'HIS1A_364',);
		echo $this->Form->input('alia', array('options' => $alias, 'empty' => ''));
        echo $this->Form->input('campo_formacion');
		$tipos_dictado = array('Presencial' => 'Presencial', 'A Distancia - Semipresencial' => 'A                                Distancia - Semipresencial', 'A Distancia - Asistida' => 'A                                Distancia - Asistida', 'A Distancia - Abierta' => 'A Distancia -                                Abierta', 'A Distancia - Virtual' => 'A Distancia - Virtual');
		echo $this->Form->input('dictado', array('options' => $tipos_dictado, 'empty' => ''));
        $tipos_obligatoriedad = array('Obligatoria' => 'Obligatoria', 'Elegible' => 'Elegible',                                      'Optativa' => 'Optativa', 'Obligatoria reemplazable por otra                                      ' => 'Obligatoria reemplazable por otra');
		echo $this->Form->input('obligatoriedad', array('options' => $tipos_obligatoriedad,                                 'empty' => ''));
        $tipos_carga_horaria = array('Hora Cátedra' => 'Hora Cátedra', 'Hora Reloj' => 'Hora Reloj                                    ');
		echo $this->Form->input('carga_horaria', array('options' => $tipos_carga_horaria, 'empty'                                => ''));
		echo $this->Form->input('carga_horaria_semanal');
        $tipos_duracion_en = array('Años' => 'Años', 'Cuatrimestres' => 'Cuatrimestres');
		echo $this->Form->input('duracion_en', array('options' => $tipos_duracion_en, 'empty' => '                               '));
		echo $this->Form->input('duracion');
		$tipos_escala_numerica = array('Si' => 'Si', 'No' => 'No');
		echo $this->Form->input('escala_numerica', array('options' => $tipos_escala_numerica,                                'empty' => ''));
		echo $this->Form->input('nota_minima');
		echo $this->Form->input('contenido');
		
?>