<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="users form large-9 medium-8 columns content">
   <?= $this->Form->create($users) ?>
   <fieldset>
       <legend><?= __('Edit User') ?></legend>
       <?php
           echo $this->Form->control('username');
           echo $this->Form->control('email');
           echo $this->Form->control('password');
       ?>
   </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
   <?= $this->Form->end() ?>
</div>