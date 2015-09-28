<div class="TituloSec"><?php echo __('Editar Usuario'); ?></div>
<div id="ContenidoSec">
<div class="users form">
<?php echo $this->Form->create('User');?>

	         <div class="unit">
               <?php echo $this->element('form_user_edit'); ?><p>
             </div>
             <div class="text-center">
        	   <?php //echo $this->Form->submit('Añadir usuario', array('class' => 'form-submit', 'title' => 'Click para añadir'));
                     echo $this->Form->input('id', array('type' => 'hidden'));
			         echo $this->Form->end(array('label' => 'GUARDAR', 'class' => 'btn btn-success'));?>
          	  </div>
		</div>
	</div>

<!-- app/View/Users/edit.ctp -->
<!--<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Editar usuario'); ?></legend>
        <?php 
		echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));
		echo $this->Form->input('username', array('label' => 'Nombre usuario', 'readonly' => 'readonly', 'label' => 'Los usuarios no pueden cambiarse!'));
		echo $this->Form->input('email');
        echo $this->Form->input('password_update', array( 'label' => 'Nueva contraseña', 'maxLength' => 255, 'type'=>'password', 'required' => 0));
		echo $this->Form->input('password_confirm_update', array('label' => 'Repetir contraseña', 'maxLength' => 255, 'title' => 'Repite la contraseña', 'type'=>'password', 'required' => 0));
		
		echo $this->Form->input('role', array(
            'options' => array( 'usuario' => 'usuario', 'admin' => 'admin')
        ));
		
		echo $this->Form->submit('Editar usuario', array('class' => 'form-submit',  'title' => 'Click para modificar') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>-->
<!--<?php 
echo $this->Html->link( "Volver a página principal", array('action'=>'index') ); 
?>-->
<br/>
<!--<?php 
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
?>-->