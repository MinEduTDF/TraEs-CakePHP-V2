<div class="row">
  <div class="col-lg-6">
    <?php echo $this->Form->create('User', array('type'=>'get','action'=>'index')); ?>
    <div class="input-group">
      <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Ingrese username...')); ?>
      <span class="input-group-btn">
        <?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div>