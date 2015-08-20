  <div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">

<?php
		echo $this->Form->input('alumno_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('ciclo_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('materia_id', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('notaPrimeraCuatPrimero', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('notaSegundaCuatPrimero', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('promCuatPrimero', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('notaPrimeraCuatSegundo', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('notaSegundaCuatSegundo', array('between' => '<br>', 'class' => 'form-control'));

   echo '</div><div class="col-md-6 col-sm-6 col-xs-12">';

		echo $this->Form->input('promCuatSegundo', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('promTermino', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('notaDic', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('notaMar', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('promFinal', array('between' => '<br>', 'class' => 'form-control'));
		echo $this->Form->input('observaciones', array('between' => '<br>', 'class' => 'form-control'));
?>

</div></div>