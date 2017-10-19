<div style="width:80%; margin-left:10%;">
<h1 style="font-weight: bold;">Sign up</h1>
<?= $this->Form->create() ?>
<div style="width:20%;margin-top:3%;"><?= $this->Form->control('username') ?></div>
<div style="width:20%;"><?= $this->Form->control('email') ?></div>
<div style="width:20%;"><?= $this->Form->control('password') ?></div>
<div style="margin-top:2%;"><?= $this->Form->button('signup') ?></div>
<?= $this->Form->end() ?>


</div>
