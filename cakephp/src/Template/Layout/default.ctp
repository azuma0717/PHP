<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('yuki.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
       <nav class="navbar navbar-default">
          <div class="navbar-header">
              <a href="" class="navbar-brand"><?php echo $this->Html->image('misao.jpg',array('width'=>'100px'));?></a>
          </div>
      </nav>
      <nav class="navbar navbar-default mm">

         <ul class="nav navbar-nav">
             <li><?php echo $this->Html->link('HOME', array('controller' => 'rajies', 'action' => 'home')); ?></li>
             <li><?php echo $this->Html->link('ABOUT US', array('controller' => 'rajies', 'action' => 'aboutus')); ?></li>
             <li><?php echo $this->Html->link('CONTACT', array('controller' => 'rajies', 'action' => 'contact')); ?></li>
             <li><?php echo $this->Html->link('LOGIN', array('controller' => 'rajies', 'action' => 'login')); ?></li>
             <li><?php echo $this->Html->link('SIGNUP', array('controller' => 'rajies', 'action' => 'signup')); ?></li>
         </ul>
     </nav>

    <!-- content -->

        <!-- left -->
        <div class="col-md-3">
            <!-- パネルで囲む -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Menu
                </div>
                <!-- 敢えてbodyを作らないことで、メニューを詰める -->
                <!-- <div class="panel-body"> -->
                <ul class="nav nav-pills nav-stacked">
                    <li><a href=""><i class="glyphicon glyphicon-pencil"></i><?php echo $this->Html->image('abc.jpg',array('width'=>'220px'));?></li></a>
                    <li><a href=""><i class="glyphicon glyphicon-download"></i><?php echo $this->Html->image('lion.jpg',array('width'=>'220px'));?></li></a>
                    <li><a href=""><i class="glyphicon glyphicon-leaf"></i><?php echo $this->Html->image('ore.jpg',array('width'=>'220px'));?></li></a>
                </ul>
                <!-- </div> -->
            </div>
        </div>




<!--
 <div class="medium-12">
  <ul class="nav nav-tabs navbar-inverse nav-justified">
  	<li role="presentation"><a href="#">HOME</a></li>
  	<li role="presentation"><a href="#">ABOUT US</a></li>
  	<li role="presentation"><a href="#">CONTACT</a></li>
    <li role="presentation"><a href="#">LOG IN</a></li>
    <li role="presentation"><a href="#">SIGN UP</a></li>
  </ul>
</div> -->

    <?= $this->fetch('content'); ?>
    <footer>
    </footer>
</body>
</html>
