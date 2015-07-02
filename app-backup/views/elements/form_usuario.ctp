</br><strong><?php echo $session->flash('auth'); ?></strong></br>

<?php echo $this->Form->create('User', array('action' => 'login'));?>
    <fieldset>
        <legend>Iniciar sesion</legend>

    <?php echo $this->Form->input('username', array('label'=>'Nombre de Usuario')); ?>
    <?php echo $this->Form->input('password', array('label'=>'Contraseña')); ?>

    </fieldset>
<?php echo $this->Form->end(__('Acceder', true));?>