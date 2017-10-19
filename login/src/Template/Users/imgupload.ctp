<h2>Admin Add Product</h2>

<br />

<div class="row">
    <div class="col-sm-5">

       <?php echo $this->Form->create($user,['enctype'=>'multipart/form-data']); ?>

        <br />
        <?php echo $this->Form->input('imgname', array('type'=>'file')); ?>

        <?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>

       <br />
        <br />

   </div>
</div>

<?php echo $this->Html->image('cake.power.gif'); ?>
<!-- <?php echo $this->Html->image('cake.power.gif'); ?> -->

<a href="<?php echo $this->Url->build(['controller'=>'Users','action'=>'add']); ?>">Create an account</a>
<a href="<?php echo $this->Url->build('/aadd'); ?>">Regi</a>
<?php echo $this->Html->link('REGISTRATION',['controller'=>'users','action'=>'add']); ?>
