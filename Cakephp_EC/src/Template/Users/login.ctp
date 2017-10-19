<div style="width:80%; margin-left:10%;">
<h1 style="font-weight: bold;">Login</h1>
<?= $this->Form->create() ?>
<div style="width:20%;margin-top:3%;"><?= $this->Form->control('email') ?></div>
<div style="width:20%;"><?= $this->Form->control('password') ?></div>
<div style="margin-top:2%;"><?= $this->Form->button('Login') ?></div>
<?= $this->Form->end() ?>

  <!--<button id="ajaxbutton">ボタン</button>

<div id="tag">
ここにAjaxで実行したphpの結果が書き込まれる。
</div>
-->

<div style="margin-top:3%;"><a href="http://localhost:8888/Cakephp_EC/users/signup"  style="font-size:14px; font-weight: old;">create an account?</a></div>

</div>
