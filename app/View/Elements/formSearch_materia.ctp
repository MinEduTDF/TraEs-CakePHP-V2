<?php echo $this->Form->create('Materia',array('type'=>'get','action'=>'index'));?>
<div class="form-group">
	<?php
        $alias = array('MAT1_1' => 'MAT1_1', 'MAT1_2' => 'MAT1_2', 'MAT1_3' => 'MAT1_3', 'MAT1_4' => 'MAT1_4','LEN1_1' => 'LEN1_1', 'LEN1_2' => 'LEN1_2', 'LEN1_3' => 'LEN1_3', 'LEN1_4' => 'LEN1_4', 'HIS1_1' => 'HIS1_1', 'HIS1_2' => 'HIS1_2', 'HIS1_3' => 'HIS1_3','HIS1_4' => 'HIS1_4', 'MAT2_1' => 'MAT2_1', 'MAT2_2' => 'MAT2_2', 'MAT2_3' => 'MAT2_3', 'MAT2_4' => 'MAT2_4','LEN2_1' => 'LEN2_1', 'LEN2_2' => 'LEN2_2', 'LEN2_3' => 'LEN2_3', 'LEN2_4' => 'LEN2_4', 'HIS2_1' => 'HIS2_1', 'HIS2_2' => 'HIS2_2', 'HIS2_3' => 'HIS2_3','HIS2_4' => 'HIS2_4', 'MAT3_1' => 'MAT3_1', 'MAT3_2' => 'MAT3_2', 'MAT3_3' => 'MAT3_3', 'MAT3_4' => 'MAT3_4','LEN3_1' => 'LEN3_1', 'LEN3_2' => 'LEN3_2', 'LEN3_3' => 'LEN3_3', 'LEN3_4' => 'LEN3_4', 'HIS3_1' => 'HIS3_1', 'HIS3_2' => 'HIS3_2', 'HIS3_3' => 'HIS3_3','HIS3_4' => 'HIS3_4');
        echo $this->Form->input('alia', array('label' => false, 'empty' => '-- Seleccione un alias --', 'options' => $alias, 'class' => 'form-control'));
    ?><br>
    <?php
	    echo $this->Form->input('curso_id', array('label' => false, 'empty' => '-- Seleccione un curso --', 'class' => 'form-control'));
    ?><br>
    <?php    
		$tipos_dictado = array('Presencial' => 'Presencial', 'A Distancia - Semipresencial' => 'A Distancia - Semipresencial', 'A Distancia - Asistida' => 'A Distancia - Asistida', 'A Distancia - Abierta' => 'A Distancia - Abierta', 'A Distancia - Virtual' => 'A Distancia - Virtual');
        echo $this->Form->input('dictado', array('label' => false, 'empty' => '-- Seleccione un dictado --', 'options' => $tipos_dictado, 'class' => 'form-control'));
    ?>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>