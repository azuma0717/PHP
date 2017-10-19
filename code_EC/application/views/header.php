<html>
  <head>
    <script type='text/javascript' src="<?php echo base_url();?>assets/js/jquery-3.2.1.js"></script>
    <script type='text/javascript' src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/stylesheet3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">



    <script>
    $(document).ready(function(){

      $('#login').click(function(){
      $('#login-modal').fadeIn();
      });

      $('.close-modal').click(function(){
      $('#login-modal').fadeOut();
     });

     $('.signup').click(function(){
     $('#signup-modal').fadeIn();
     });

     $('.close-modal').click(function(){
     $('#signup-modal').fadeOut();
    });

      $('.sqtity').change(function(){
        var cid = $(this).attr('yuki');
        var pp= $(this).attr('pp');
        var quentity = $(this).val();
        var sb = pp * quentity
        var total=0;

        //alert(sb);
        $('#sb'+cid).text(sb);
        // var summ = 0;
        // $(".bb").each(function() {
        //   summ = summ + parseInt($(this).text());
        //   // parseInt()で取得した値は、数値になる。
        //    //summ = a;
        //   //alert(sum);
        // });
        // //alert(summ);
        // $('#ttl').text('Total: $'+summ);
        // summ = 0;
      });


});
   </script>
 </head>
 <body>

   <div class="all">
    <div class="icon">
       <div class="home"><div class="home3"><img src="<?php echo base_url();?>assets/img/home.png" class="home2"><a href="http://localhost:8888/code_EC/index.php/misao/"><p>HOME</p></a></div></div>
       <div class="item5"><div class="item3"><img src="<?php echo base_url();?>assets/img/item.png" class="item2">
         <div class="dropdown"><p>ITEM</p>
           <ul id="flip3" class="dropmenu">
           <li><p></p>
            <ul>
             <li><a href="http://localhost:8888/MY_EC/category.php?foods=foods">Foods</a></li>
             <li><a href="http://localhost:8888/MY_EC/category.php?clothes=clothes#">Clothes</a></li>
             <li><a href="http://localhost:8888/MY_EC/category.php?accessories=accessories#">Accessories</a></li>
             <li><a href="http://localhost:8888/MY_EC/category.php?sundries=sundries#">Sundries</a></li>
             <li><a href="http://localhost:8888/MY_EC/category.php?cosmetics=cosmetics#">Cosmetics</a></li>
             <li><a href="http://localhost:8888/MY_EC/category.php?other=other#">Other</a></li>
           </ul>
         </li>
          </ul>
         </div></div></div>
       <div class="misao"><img src="<?php echo base_url();?>assets/img/misao.png" class="misao2"></div>

       <?php if($this->session->userdata('uid')){
         ?>
          <div class="login" id="logout"><div class="login3"><img src="<?php echo base_url();?>assets/img/logout.png" class="login2"><a href="http://localhost:8888/code_EC/index.php/misao/logout"><p>LOGOUT</p></a></div></div>
       <?php
       }else{
         ?>
         <div class="login" id="login"><div class="login3"><img src="<?php echo base_url();?>assets/img/login.png" class="login2"><p>LOGIN</p></div></div>
     <?php   } ?>



             <div class="info signup"><div class="register3"><img src="<?php echo base_url();?>assets/img/register.png" class="info2"><p>REGISTER</p></div></div>

       <div class="cart" id="cart"><div class="cart3"><img src="<?php echo base_url();?>assets/img/cart.png" class="cart2"><a href="http://localhost:8888/code_EC/index.php/misao/cart"><p>CART</p></a></div></div>
    </div>
<!--自作ログインモーダル  -->
       <div class="login-modal-wrapper" id="login-modal">
           <div class="modalll">
             <form action="login" method="post">
               <div class="close-modal"><i class="fa fa-2x fa-times">&times;</i></div>
                 <div id="login-form">
                     <div class="login-box"><p>LOGIN</p></div>
                     <div class="username"><p>username</br></p></div>
                     <div class="input-form"><input class="form-control2" id="a" name="name" type="text" placeholder="ユーザーネーム"></div>
                     <div class="password"><p>password</br></p></div>
                     <div class="input-form"><input class="form-control2" id="b" name="pass" type="password" placeholder="パスワード"></div>
                     <input type="submit" id="submit-bt" value="login"/>
                     <div class="or">or</div>
                     <div id="submit-btn-fb">facebook</div>
                     <hr><div>not member?</div></hr>
                     <div id="submit-btn-create" class="signup">create your account</div>
              </form>
                  </div>
             </div>
       </div>

<!--自作サインアップモーダル  -->
       <div class="signup-modal-wrapper" id="signup-modal">
         <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
           <div class="modalll">
             <form action="signup" method="post">
               <div class="close-modal"><i class="fa fa-2x fa-times">&times;</i></div>
                 <div id="login-form"></div>
                     <div class="login-box"><p>SIGN UP</p></div>
                     <div class="username2"><p>username</br></p></div>
                     <div class="input-form"><input class="form-control2" id="c" type="text" name="name" placeholder="username"/></div>
                     <table>
                       <tr>
                         <td><div class="repassword"><p>password</br></p></div>
                         <div class="passform"><input class="form-control2" type="password" id="d" name="pass" placeholder="password"></div></td>
                         <td><div class="repassword"><p>phone</br></p></div>
                         <div class="passform"><input class="form-control2" type="password" id="e" name="phone" placeholder="repassword"></div></td>
                       </tr>
                     </table>
                       <div class="email"><p>Email</br></p></div>
                       <div class="input-form"><input class="form-control2" type="text" id="f" name="email" placeholder="email"></div>
                     <table>
                       <tr>
                         <td><div class="dob"><p>bithday</br></p><input class="dob" type="text" id="g" name="dob" placeholder="1989/07/17"></div></td>
                         <td>
                           <input type="radio" id="gender1" class="h" name="gender" value="male">
                           <label for="gender1">Male</label>

                           <input type="radio" id="gender2" class="h" name="gender" value="female">
                           <label for="gender2">Female</label>
                        </td>
                       </tr>
                     </table>
                     <input id="submit-btn2" type="submit"  name="signup" value="submit">
                     <div class="or2">or</div>
                     <div id="submit-btn-fb2">facebook</div>
              </form>
            </div>
       </div>
