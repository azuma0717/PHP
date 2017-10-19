<?php SESSION_start();
  include 'header.php';



  echo'<div class="center">';
    echo'<div class="step1">';
   echo'<form>';
  	echo'<div class="form">';
  		echo'<div class="title"><label for="InputEmail"><p>User Name</p></label></div>';
  		echo'<input type="email" id="uname" value="'.$_SESSION['uname'].'">';
  	echo'</div>';
  	echo'<div class="form">';
  		echo'<div class="title"><label for="InputPassword"><p>Phone Number</p></label></div>';
  		echo'<input type="text" id="uphone" value="'.$_SESSION['uphone'].'">';
  	echo'</div>';
    echo'<div class="form">';
      echo'<div class="title"><label for="InputPassword"><p>Address</p></label></div>';
      echo'<input type="text" id="udob" value="'.$_SESSION['udob'].'">';
    echo'</div>';
    echo'<div class="form">';
      echo'<div class="title"><label for="InputPassword"><p>Mail Address</p></label></div>';
      echo'<input type="text" id="uemail" value="'.$_SESSION['uemail'].'">';
    echo'</div>';

    echo'<div class="nextbtn">';
    echo'<div class="dis_table"><input type="button" class="btn green dis_tc" name="next_step1" id="next_step1" value="Next"></div>';
   echo'</div>';
  echo'</form>';
  echo'</div>';
  echo'</div>';
  echo'</div>';

  include 'footer.php';
  ?>
