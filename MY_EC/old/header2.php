<?php SESSION_start();?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/stylesheet3.css"><!--自作CSSスタイルシート-->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css'><!--スライダーのCSSファイル。bootstrap.cssよりも先に読み込まないと、bootstrapが影響を受ける-->
    <link rel="stylesheet" type="text/css" href="css/slider_style.css"><!--スライダーのCSSファイル -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"><!--bootstrapのCSS-->
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script><!--このjsファイルはheaderで読み込ませると、競合しない -->

    <script>
    $(document).ready(function(){

      $('#login').click(function(){
      $('#login-modal').fadeIn();
      });

      $('.close-modal').click(function(){
      $('#login-modal').fadeOut();
     });

     $('#signup').click(function(){
     $('#signup-modal').fadeIn();
     });

     $('.close-modal').click(function(){
     $('#signup-modal').fadeOut();
    });

    $('#dates').datepicker().on('changeDate', function(ev){$('.datepicker').hide();});
    });

    function popup(){
      $('.modal').modal();
    }
   </script>

  </head>
  <body>
    <div class="all">

     <div class="icon">
       <!--ログイン後の画面  -->
       <div class="home"><div class="home3"><img src="img/home.png" class="home2"><a href="javascript:void;" onClick="popup()"><p>HOME</p></a></div></div>
       <div class="item"><div class="item3"><img src="img/item.png" class="item2"><p>ITEM</p></div></div>
       <div class="misao"><img src="img/misao.png" class="misao2"></div>
       <div class="hello"><div class="hello3"><p><b>Hello!</b></br><?php echo $_SESSION["misao"] ; ?></p></br></div></div>
       <div class="logout"><div class="logout3"><img src="img/logout.png" class="logout2"><p>LOG OUT</p></div></div>
       <div class="cart"><div class="cart3"><img src="img/cart.png" class="cart2"><p>CART</p></div></div>
     </div>
        <!--ログイン前の画面  -->
        <!-- <div class="home"><div class="home3"><img src="img/home.png" class="home2"><a href="javascript:void;" onClick="popup()"><p>HOME</p></a></div></div>
        <div class="item"><div class="item3"><img src="img/item.png" class="item2"><p>ITEM</p></div></div>
        <div class="misao"><img src="img/misao.png" class="misao2"></div>
        <div class="login" id="login"><div class="login3"><img src="img/login.png" class="login2"><p>LOGIN</p></div></div>
        <div class="info" id="signup"><div class="register3"><img src="img/register.png" class="info2"><p>REGISTER</p></div></div>
        <div class="cart"><div class="cart3"><img src="img/cart.png" class="cart2"><p>CART</p></div></div>
     </div> -->

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
<!--bootstrapのモーダル表示  -->
<!--「onClick="popup()"」を<a>タグ仕込むことで、クリックするとこのモーダルが表示される  -->

     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog" onClick="popup()">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title" id="myModalLabel">Fill Up For Edit </h4>
           </div>
           <div class="modal-body" id="myModalBody">

             <div class="row">
               <div class="form-group">

                 <div class="col-md-12">

                   <input type="text"  id="old_mobile_no" class="form-control" placeholder="Enter Old Mobile No">
                 </div>
                 <div class="col-md-12">

                   <input type="text"  id="edit_mobile_no" class="form-control" placeholder="Enter Mobile No">
                 </div>

                 <div class="col-md-12">

                   <input type="email" id="edit_email_id" class="form-control" placeholder="Enter Email ID" >
                 </div>
               </div>
             </div>

           </div>
           <div class="modal-footer" id="myModalFooter">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
