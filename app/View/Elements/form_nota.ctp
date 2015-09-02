  <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">

<?php
		echo $this->Form->input('alumno_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('ciclo_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('materia_id', array('between' => '<br>', 'class' => 'form-control'));
?>		
 </br><div class="subtitulo">Primer período</div>
<?php 		
		echo $this->Form->input('nota_uno_primer_periodo', array('label' => 'Nota 1', 'between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_uno_primer_periodo', array('label' => 'Fecha Nota 1','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nota_dos_primer_periodo', array('label' => 'Nota 2','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_dos_primer_periodo', array('label' => 'Fecha Nota 2','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('nota_tres_primer_periodo', array('label' => 'Nota 3','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_tres_primer_periodo', array('label' => 'Fecha Nota 3','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('promedio_primer_periodo', array('label' => 'PROMEDIO','between' => '<br>', 'class' => 'form-control'));
?>		
 </br><div class="subtitulo">Segundo período</div>
<?php
		echo $this->Form->input('nota_uno_segundo_periodo', array('label' => 'Nota 1','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_uno_segundo_periodo', array('label' => 'Fecha Nota 1','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nota_dos_segundo_periodo', array('label' => 'Nota 2','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_dos_segundo_periodo', array('label' => 'Fecha Nota 2','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('nota_tres_segundo_periodo', array('label' => 'Nota 3','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_tres_segundo_periodo', array('label' => 'Fecha Nota 3','between' => '<br>', 'class' => 'form-control'));
    	echo $this->Form->input('promedio_segundo_periodo', array('label' => 'PROMEDIO','between' => '<br>', 'class' => 'form-control'));
?>	
 </br><div class="subtitulo">Tercer período</div>
<?php
        echo $this->Form->input('nota_uno_tercer_periodo', array('label' => 'Nota 1','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_uno_tercer_periodo', array('label' => 'Fecha Nota 1','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nota_dos_tercer_periodo', array('label' => 'Nota 2','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_dos_tercer_periodo', array('label' => 'Fecha Nota 2','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('nota_tres_tercer_periodo', array('label' => 'Nota 3','between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_tres_tercer_periodo', array('label' => 'Fecha Nota 3','between' => '<br>', 'class' => 'form-control'));
    	echo $this->Form->input('promedio_tercer_periodo', array('label' => 'PROMEDIO','between' => '<br>', 'class' => 'form-control'));
?>		

</div><div class="col-md-6 col-sm-6 col-xs-12">

 </br><div class="subtitulo">Cierre</div>

<?php
		echo $this->Form->input('promedio_a_termino', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_promedio_a_termino', array('label' => 'Fecha Promedio a término','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nota_en_diciembre', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_en_diciembre', array('label' => 'Fecha nota en diciembre','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('nota_en_marzo', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_nota_en_marzo', array('label' => 'Fecha nota en marzo','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('promedio_final', array('between' => '<br>', 'class' => 'form-control'));
        echo $this->Form->input('fecha_promedio_final', array('label' => 'Fecha promedio final','between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('observaciones', array('between' => '<br>', 'class' => 'form-control'));
?>

</div></div>