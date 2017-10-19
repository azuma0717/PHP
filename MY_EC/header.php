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

     $('.signup').click(function(){
     $('#signup-modal').fadeIn();
     });

     $('.close-modal').click(function(){
     $('#signup-modal').fadeOut();
    });

    // $('#dates').datepicker().on('changeDate', function(ev){$('.datepicker').hide();
    // });

    $('#submit-btn').click(function(){

    var name = $('#a').val();
    var pass = $('#b').val();

    $.ajax({
      type:'POST',
      url:'login.php',
      data:{name:name,pass:pass},
      datatype:'text',
      success:function(response)
      {
          // alert(response);
          if(response == "yesitsdone")
          {
          //alert(response);
            window.location.href = 'home.php';
          }
          else
            {
              alert("wrong user login info please try again");
              return false;
            }
      //alert(response);
      }
    });
   });

   $('#logout').click(function(){

   $.ajax({
     type:'POST',
     url:'logout.php',
     datatype:'text',
     success:function(response)
     {
      alert("see you next time!");
      window.location.href = 'home.php';
     }
   });
  });

  $('#submit-btn2').click(function(){

  var name = $('#c').val();
  var pass1 = $('#d').val();
  var phone = $('#e').val();
  var email = $('#f').val();
  var dob = $('#g').val();
  var gender1 = $('#gender1').val();
  var gender2 = $('#gender2').val();

  $.ajax({
    type:'POST',
    url:'signup.php',
    data:{name:name,pass1:pass1,phone:phone,email:email,dob:dob,gender1:gender1,gender2:gender2},
    datatype:'text',
    success:function(response)
    {
        //alert(response);
        if(response == "ok"){
           alert("Welcome to EC site");
           window.location.href = 'home.php';
        }
        else{
            alert("wrong info please try again");
            return false;
        }
    //alert(response);
    }
  });
 });

 $('#cart').click(function(){

 // var name = $('#c').val();


 $.ajax({
   type:'POST',
   url:'login.php',
   datatype:'text',
   success:function(response)
   {
       if(response == "already"){
          window.location.href = 'cart.php';
       }
       else{
           alert("please login first");
           $('#login-modal').fadeIn();
       }
   }
 });
})

$('#next_step1').click(function(){

  var uname = $('#uname').val();
  var uphone = $('#uphone').val();
  var udob = $('#udob').val();
  var uemail = $('#uemail').val();

  $.ajax({
    type:'POST',
    url:'delivery.php',
    data:{uname:uname,uphone:uphone,udob:udob,uemail:uemail},
    datatype:'text',
    success:function(response)
    {
     $('.center').html(response);
    // alert(response);
    }
  });

});

$(document).on('click','#next_step2',function(){

  var home = $('#home').val();
  var card = $('#card').val();

  $.ajax({
    type:'POST',
    url:'gift.php',
    data:{home:home,card:card},
    datatype:'text',
    success:function(response)
    {
     $('.step2').html(response);
    // alert(response);
    }
  });
  // alert("gegeg");

});

$(document).on('click','#next_step3',function(){

  var gift = $('#Gift').val();

  $.ajax({
    type:'POST',
    url:'gift-check.php',
    data:{gift:gift},
    datatype:'text',
    success:function(response)
    {
      window.location.href = 'buy-check.php';
    // alert(response);
    }
  });
  // alert("gegeg");

});


$('#addtocart').click(function(){

  $.ajax({
    type:'POST',
    url:'addtocart.php',
    datatype:'text',
    success:function(response)
    {
        if(response == "notyet"){
          alert("please login first");
          $('#login-modal').fadeIn();
        }
        else{
        alert(response);
        }
    }
  });
});

$('.ff').click(function(){
var id = $(this).attr('id');

  $.ajax({
    type:'POST',
    url:'delete.php',
    data:{id:id},
    datatype:'text',
    success:function(response)
    {
     $('#'+id).html(response);
    // alert(response);
    }
  });
});

$(document).on('click','#next_step5',function(){

      window.location.href = 'buy_thanks.php';

});


});
   </script>
 </head>
 <body>
   <div class="all">

<?php
    echo'<div class="icon">';
       echo'<div class="home"><div class="home3"><img src="img/home.png" class="home2"><a href="http://localhost:8888/MY_EC/home.php"><p>HOME</p></a></div></div>';
       echo'<div class="item"><div class="item3"><img src="img/item.png" class="item2">';
         echo'<div class="dropdown">';
           echo'<div class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>ITEM</p></div>';
           echo'<ul class="dropdown-menu">';
             echo'<li><a href="http://localhost:8888/MY_EC/category.php?foods=foods">Foods</a></li>';
             echo'<li><a href="http://localhost:8888/MY_EC/category.php?clothes=clothes#">Clothes</a></li>';
             echo'<li><a href="http://localhost:8888/MY_EC/category.php?accessories=accessories#">Accessories</a></li>';
             echo'<li><a href="http://localhost:8888/MY_EC/category.php?sundries=sundries#">Sundries</a></li>';
             echo'<li><a href="http://localhost:8888/MY_EC/category.php?cosmetics=cosmetics#">Cosmetics</a></li>';
             echo'<li><a href="http://localhost:8888/MY_EC/category.php?other=other#">Other</a></li>';
           echo'</ul>';
         echo'</div></div></div>';
       echo'<div class="misao"><img src="img/misao.png" class="misao2"></div>';
         if (!isset($_SESSION['uname']))
         {
             echo'<div class="login" id="login"><div class="login3"><img src="img/login.png" class="login2"><p>LOGIN</p></div></div>';
             echo'<div class="info signup"><div class="register3"><img src="img/register.png" class="info2"><p>REGISTER</p></div></div>';
         }
         else
           {
             echo'<div class="hello"><div class="hello3"><p><b>Hello!</b></br>';
             echo $_SESSION['uname'];
             echo'</p></br></div></div>';
             echo'<div class="logout" id="logout"><div class="logout3"><img src="img/logout.png" class="logout2"><p>LOG OUT</p></div></div>';
           }

       echo'<div class="cart" id="cart"><div class="cart3"><img src="img/cart.png" class="cart2"><p>CART</p></div></div>';
    echo'</div>';

/////////////////////////////////
    include 'db/ec_db.php';//////←Conect DB
/////////////////////////////////
?>
<!--自作ログインモーダル  -->
<!--クラスのほとんどが、サインアップと同じなため、CSSを変更するとサインアップにも影響あり  -->
       <div class="login-modal-wrapper" id="login-modal">
           <div class="modalll">
               <div class="close-modal"><i class="fa fa-2x fa-times">&times;</i></div>
                 <div id="login-form">
                     <div class="login-box"><p>LOGIN</p></div>
                     <div class="username"><p>username</br></p></div>
                     <div class="input-form"><input class="form-control2" id="a" name="name" type="text" placeholder="ユーザーネーム"></div>
                     <div class="password"><p>password</br></p></div>
                     <div class="input-form"><input class="form-control2" id="b" name="pass" type="password" placeholder="パスワード"></div>
                     <input type="button" id="submit-btn" value="submit"/>
                     <div class="or">or</div>
                     <div id="submit-btn-fb">facebook</div>
                     <hr><div>not member?</div></hr>
                     <div id="submit-btn-create" class="signup">create your account</div>
                  </div>
             </div>
       </div>

<!--自作サインアップモーダル  -->
<!--クラスのほとんどが、ログインと同じなため、CSSを変更するとログインにも影響あり  -->

       <div class="signup-modal-wrapper" id="signup-modal">
           <div class="modalll">
               <div class="close-modal"><i class="fa fa-2x fa-times">&times;</i></div>
                 <div id="login-form"></div>
                     <div class="login-box"><p>SIGN UP</p></div>
                     <div class="username2"><p>username</br></p></div>
                     <div class="input-form"><input class="form-control2" id="c" type="text" name="name" placeholder="username"/></div>
                     <table>
                       <tr>
                         <td><div class="repassword"><p>password</br></p></div>
                         <div class="passform"><input class="form-control2" type="password" id="d" name="pass1" placeholder="password"></div></td>
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
                           <input type="radio" id="gender1" class="h" name="gender" value="777">
                           <label for="gender1">Male</label>

                           <input type="radio" id="gender2" class="h" name="gender" value="female">
                           <label for="gender2">Female</label>
                        </td>
                       </tr>
                     </table>
                     <input id="submit-btn2" type="button"  value="submit">
                     <div class="or2">or</div>
                     <div id="submit-btn-fb2">facebook</div>
             </div>
       </div>
