<?php SESSION_start();

  include 'db/ec_db.php';

  $checkid=$_SESSION['checkid'];
  $home=$_POST['home'];
  $card=$_POST['card'];

  $obj = new curd();
  $check =  $obj->checkout3($home,$card,$checkid);

  // if($check){
  //   echo"ok";
  // }else{
  //   echo"no";
  // }


echo'<div class="step3">';
 echo'<form>';

 echo'<table>';
   echo'<tr>';
         echo'<td>';
         echo'<div class="title"><label for="InputEmail"><p>Gift</p></label></div>';
         echo'</td>';
    echo'<td>';
       echo'<input type="radio" id="Gift" name="Gift" value="Gift">';
       echo'<label for="Gift">Gift wrapping</label>';

       echo'<input type="radio" id="No" name="No" value="No">';
       echo'<label for="No">No wrapping</label>';
    echo'</td>';
   echo'</tr>';


 echo'</table>';
   echo'<div class="nextbtn">';
      echo'<div class="dis_table"><input type="button" class="btn green dis_tc" name="next_step3" id="next_step3" value="Next"></div>';
     echo'</div>';


 echo'</form>';
echo'</div>';

  ?>
