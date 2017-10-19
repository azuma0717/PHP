
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
    <li class="heading"><?=__('Actions') ?></li>
    <li><?= $this->Html->link(__('List Users'),['action' =>'index']) ?></li>
  </ul>
</nav>

<div class="users form large-9 medium-8 columns conten">
  <?= $this->Form->create() ?>
  <fieldest>
    <legend><?=__('Add User') ?></legend>
    <?php
      echo $this->Form->control('name');
      echo $this->Form->control('phone');
      echo $this->Form->control('city');
      echo $this->Form->control('password');
     ?>
  </fieldet>
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
