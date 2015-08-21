
<strong><?php echo $this->Session->flash('auth'); ?></strong></br>
<br><br><br>
	<div id="login" class="animated bounceInDown">
		<div class="titulo">S.I.G.E.D.U</div><br>
	<div class="animated fadeIn"><span  class="img_login glyphicon glyphicon-user"></span></div>
		<?php echo $this->Form->create('User', array('action'=> 'login'));?>

		 	<div id="resultado"></div>	

		              <div class="form-inline">
		                <?php echo $this->Form->input('username', 
		            			    array('label'=>'', 'between' => '<br>', 'placeholder' => 'Nombre de usuario','class' => 'form-control')); ?>
		              </div><br>

		              <div class="form-inline">
		                <?php echo $this->Form->input('password', 
		             			   array('label'=>'', 'between' => '<br>', 'placeholder' => 'Contraseña','class' => 'form-control')); ?>
		              </div><br>

		<?php echo $this->Form->end(array('label' => 'INGRESAR', 'style'=>'width:70%;', 'class' => 'btn btn-success'));?>
 </div>