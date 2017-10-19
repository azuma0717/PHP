


<div class="users form large-9 medium-8 columns conten">
    <?php echo $this->Form->create(null,['enctype'=>'multipart/form-data']); ?>
  <fieldest>
    <legend><?=__('Insert User') ?></legend>
    <?php
      echo $this->Form->control('username');
      echo $this->Form->control('email');
      echo $this->Form->control('phone');
      echo $this->Form->control('password');
      echo $this->Form->input('imgpath', array('type'=>'file'));
     ?>
  </fieldet>
  <?= $this->Form->button(__('Submit')) ?>
    <?php echo $this->Form->end(); ?>
</div>
