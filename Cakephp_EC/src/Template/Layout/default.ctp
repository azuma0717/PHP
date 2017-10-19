<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
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
    <!--まずは、jsライブラリファイルを置く。その後にJqeryファイルを置く。  -->
        <?= $this->Html->script('jquery-3.2.1.js') ?>
        <?= $this->Html->script('bootstrap.js') ?>
        <?= $this->Html->script("//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js") ?>

        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?= $this->Html->css('stylesheet.css') ?>
        <?= $this->Html->css('bootstrap.css') ?>
        <?= $this->Html->css("//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css") ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <script>
        $(document).ready(function(){
          $('.sqtity').change(function(){
            var cid = $(this).attr('yuki');
            var pp= $(this).attr('pp');
            var quentity = $(this).val();
            var sb = pp * quentity
            var total=0;

            //alert(sb);
            $('#sb'+cid).text(sb);
            var summ = 0;
            $(".bb").each(function() {
              summ = summ + parseInt($(this).text());
              // parseInt()で取得した値は、数値になる。
               //summ = a;
              //alert(sum);
            });
            //alert(summ);
            $('#ttl').text('Total: $'+summ);
            summ = 0;
          });

          // $('.upd').click(function(){
          //
          //   var qua = $('.sqtity').val();
          //
          //   alert(qua);
          //
          //   });

      });
          </script>

<!-- <script>
        $(function() {
            $('#ajaxbutton').click (function () {
                $(this).text("押された");
                alert("押された");
                $.ajax({
                    url: "http://localhost:8888/Cakephp_EC/users/test",
                    type: "post",
                    dataType: "html"
                }).done(function (response) {
                    $("#tag").html(response);
                    alert("success");
                }).fail(function () {
                    alert("failed");
                });
            });
        });
</script> -->


    </head>

  <body>

<?php  $session = $this->request->session();
      // echo'<pre>';
      // print_r($session->read());
      // echo'</pre>';

?>

<!--============================= Navigation============================= -->
<div class="navbar-wrapper">
          <div class="navbar navbar-static-top aa">
              <div class="navbar-header">
                <!-- <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        	      <span class="icon-bar"></span>
        	      <span class="icon-bar"></span>
        	      <span class="icon-bar"></span>
        	      </a> -->
                <a class="navbar-brand text-muted" style="font-size:30px; color:black; margin-top:-5px;" href="http://localhost:8888/Cakephp_EC/users/"><?php echo $this->Html->image("misao.jpg", array('url' => '','width' =>'110px'));?></a>
              </div>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav text-muted">
                  <li class="active"><a href="http://localhost:8888/Cakephp_EC/users/" class="text-muted" style="font-size:14px; color:black; font-weight: bold;">Home</a></li>
                  <li><a href="#" target="ext" class="text-muted" style="font-size:14px; color:black;font-weight: bold;">Products</a></li>
                  <li><a href="#contact" class="text-muted" style="font-size:14px; color:black; font-weight: bold;">Brands</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle text-muted" data-toggle="dropdown" style="font-size:14px; color:black; font-weight: bold;">Category <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">food</a></li>
                      <li><a href="#">clothes</a></li>
                      <li><a href="#">accessories</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                  <li><input type="email" class="form-control" style="height:35px;width:600px;margin-top:8px;" id="email" placeholder="food? clothes? what you want.."></li>
                  <li><button class="btn btn-default" style="margin-top:8px;">Search</button></li>
                  <?php

                  if($session->read('id')!=NULL){
                      echo'<li><a href="http://localhost:8888/Cakephp_EC/users/login" class="text-muted" style="font-size:14px; color:black; font-weight: bold;">Hello! '; echo $session->read('username'); echo'</a></li>';
                      echo'<li><a href="http://localhost:8888/Cakephp_EC/users/logout" class="text-muted" style="font-size:14px; color:black; font-weight: bold;">Logout</a></li>';

                  }else{
                    echo'<li><a href="http://localhost:8888/Cakephp_EC/users/login" class="text-muted" style="font-size:14px; color:black; font-weight: bold;">Login</a></li>';
                  }


                  ?>
                  <!-- <li><a href="http://localhost:8888/Cakephp_EC/users/login" class="text-muted" style="font-size:14px; color:black; font-weight: bold;">Login</a></li> -->
                  <li><a href="http://localhost:8888/Cakephp_EC/users/cart" class="text-muted" style="font-size:14px; color:black; font-weight: bold;">Cart</a></li>
              </div>
          </div><!-- /container -->
        </div><!-- /navbar wrapper -->



        <?= $this->Flash->render() ?>
        <!-- <div class="container clearfix" style="margin-top:20px;"> -->
            <?= $this->fetch('content') ?>
        </div>
        <!-- <footer style="width:100%; height:15%; background-color:lightgray;"> -->
          <!-- <div style="margin-left:13%; padding-top:1.5%;">Misao Demo Shopping Cart </br>www.misaodemoshoppingcart.com</br>© 2017 misao-it.com</br></div> -->
        <!-- </footer> -->
</body>
</html>
