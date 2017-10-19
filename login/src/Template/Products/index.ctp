<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username',['errors'=>true,'required'=>false]);
            echo $this->Form->control('email',['errors'=>true,'required'=>false]);
            echo $this->Form->control('password',['errors'=>true,'required'=>false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
