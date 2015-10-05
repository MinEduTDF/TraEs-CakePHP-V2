
<strong><?php echo $this->Session->flash('auth'); ?></strong></br>
<br><br><br>
	<div id="login" class="animated bounceInDown">
		<div class="titulo">SIGIEdu_TDF</div><br>
	<div class="animated fadeIn"><span  class="img_login glyphicon glyphicon-user"></span></div>
		<?php echo $this->Form->create('User', array('action'=> 'login'));?>

		 	<div id="resultado"></div>	

		              <div class="form-inline">
		                <?php echo $this->Form->input('username', 
		            			    array('label'=>'Nombre de usuario', 'between' => '<br>', 'placeholder' => 'Nombre de usuario','class' => 'form-control')); ?>
		              </div><br>

		              <div class="form-inline">
		                <?php echo $this->Form->input('password', 
		             			   array('label'=>'Contraseña', 'between' => '<br>', 'placeholder' => 'Contraseña','class' => 'form-control')); ?>
		              </div><br>

		<?php echo $this->Form->end(array('label' => 'INICIAR SESIÓN', 'style'=>'width:70%;', 'class' => 'btn btn-success btn-lg'));?>
 </div>