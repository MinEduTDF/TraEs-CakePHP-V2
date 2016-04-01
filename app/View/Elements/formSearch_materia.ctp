<?php echo $this->Form->create('Materia',array('type'=>'get','action'=>'index', 'novalidate' => true));?>
<div class="form-group">
	<?php
		$alias = array(
             'MATEMÁTICA' => array(
               'MAT1_1' => 'MAT1_1', 'MAT1_2' => 'MAT1_2', 'MAT1_3' => 'MAT1_3', 'MAT1_4' => 'MAT1_4',
			   'MAT2_1' => 'MAT2_1', 'MAT2_2' => 'MAT2_2', 'MAT2_3' => 'MAT2_3', 'MAT2_4' => 'MAT2_4',
			   'MAT3_1' => 'MAT3_1', 'MAT3_2' => 'MAT3_2', 'MAT3_3' => 'MAT3_3', 'MAT3_4' => 'MAT3_4'
              ),
             'LENGUA' => array(
               'LEN1_1' => 'LEN1_1', 'LEN1_2' => 'LEN1_2', 'LEN1_3' => 'LEN1_3', 'LEN1_4' => 'LEN1_4',
			   'LEN2_1' => 'LEN2_1', 'LEN2_2' => 'LEN2_2', 'LEN2_3' => 'LEN2_3', 'LEN2_4' => 'LEN2_4', 
			   'LEN3_1' => 'LEN3_1', 'LEN3_2' => 'LEN3_2', 'LEN3_3' => 'LEN3_3', 'LEN3_4' => 'LEN3_4'
              ), 		
		     'HISTORIA' => array(
               'HIS1_1' => 'HIS1_1', 'HIS1_2' => 'HIS1_2', 'HIS1_3' => 'HIS1_3','HIS1_4' => 'HIS1_4',
			   'HIS2_1' => 'HIS2_1', 'HIS2_2' => 'HIS2_2', 'HIS2_3' => 'HIS2_3','HIS2_4' => 'HIS2_4',
			   'HIS3_1' => 'HIS3_1', 'HIS3_2' => 'HIS3_2', 'HIS3_3' => 'HIS3_3','HIS3_4' => 'HIS3_4'
              )
		);
		echo $this->Form->input('alia', array('label' => false, 'empty' => 'Ingrese un alia...', 'options' => $alias, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
    ?><br>
</div>
<div class="text-center">
   <?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-primary'));?>
</div>