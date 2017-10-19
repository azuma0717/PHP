<?php SESSION_start();

  include 'db/ec_db.php';

  $uid=$_SESSION['uid'];
  $uname=$_POST['uname'];
  $uphone=$_POST['uphone'];
  $udob=$_POST['udob'];
  $uemail=$_POST['uemail'];


  $obj = new curd();
  $check =  $obj->checkout($uid,$uname,$uphone,$udob,$uemail);
  $check2 =  $obj->checkout2($uid);
  $res = mysqli_fetch_row($check2);
  $_SESSION['checkid'] = $res[0];

  echo'<div class="step2">';
   echo'<form>';

   echo'<table>';
     echo'<tr>';
           echo'<td>';
           echo'<div class="title"><label for="InputEmail"><p>Delivery</p></label></div>';
           echo'</td>';
      echo'<td>';
         echo'<input type="radio" id="home" name="home" value="home">';
         echo'<label for="home">home</label>';

         echo'<input type="radio" id="office" name="office" value="office">';
         echo'<label for="office">office</label>';

         echo'<input type="radio" id="Convinience Store" name="Convinience Store" value="Convinience Store">';
         echo'<label for="Convinience Store">Convinience Store</label>';
      echo'</td>';
     echo'</tr>';

     echo'<tr>';
           echo'<td>';
           echo'<div class="title"><label for="InputEmail"><p>Peyment</p></label></div>';
           echo'</td>';
      echo'<td>';
         echo'<input type="radio" id="card" name="card" value="card">';
         echo'<label for="card">card</label>';

         echo'<input type="radio" id="Cash on delivery" name="Cash on delivery" value="Cash on delivery">';
         echo'<label for="Cash on delivery">Cash onCash on delivery delivery</label>';

         echo'<input type="radio" id="Bank transfer" name="Bank transfer" value="Bank transfer">';
         echo'<label for="Bank transfer">Bank transfer</label>';

         echo'<input type="radio" id="Convinience Store" name="Convinience Store" value="Convinience Store">';
         echo'<label for="Convinience Store">Convinience Store</label>';

      echo'</td>';

     echo'</tr>';

   echo'</table>';
     echo'<div class="nextbtn">';
        echo'<div class="dis_table"><input type="button" class="btn green dis_tc" name="next_step2" id="next_step2" value="Next"></div>';
       echo'</div>';


   echo'</form>';
  echo'</div>';

  ?>
