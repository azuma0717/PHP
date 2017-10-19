

<div class="col-lg-5 col-lg-offset-2">
  <h4>buy page</h4>
  <form>
    <div class="form-group">
      <label for="username">Username:</label>
      <input class="form-control" name="username" id="username" type="text"  value="<?php echo $this->session->userdata('uname')?> ">
    </div>

    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input class="form-control" name="phone" id="phone" type="text" value="<?php echo $this->session->userdata('uphone')?> ">
    </div>

    <div class="form-group">
      <label for="phone">Address:</label>
      <input class="form-control" name="address" id="address" type="text" value="<?php echo $this->session->userdata('udob')?> ">
    </div>

    <div class="form-group">
      <label for="phone">Email:</label>
      <input class="form-control" name="email" id="email" type="text" value="<?php echo $this->session->userdata('uemail')?> ">
    </div>

    <div>
      <button class="btn btn-primary">Register</button>
    </div>
</div>





<?php
  // echo'<div class="center">';
  //   echo'<div class="step1">';
  //  echo'<form>';
  // 	echo'<div class="form">';
  // 		echo'<div class="title"><label for="InputEmail"><p>User Name</p></label></div>';
  // 		echo'<input type="email" id="uname" value="'.$this->session->userdata('uname').'">';
  // 	echo'</div>';
  // 	echo'<div class="form">';
  // 		echo'<div class="title"><label for="InputPassword"><p>Phone Number</p></label></div>';
  // 		echo'<input type="text" id="uphone" value="'.$this->session->userdata('uphone').'">';
  // 	echo'</div>';
  //   echo'<div class="form">';
  //     echo'<div class="title"><label for="InputPassword"><p>Address</p></label></div>';
  //     echo'<input type="text" id="udob" value="'.$this->session->userdata('udob').'">';
  //   echo'</div>';
  //   echo'<div class="form">';
  //     echo'<div class="title"><label for="InputPassword"><p>Mail Address</p></label></div>';
  //     echo'<input type="text" id="uemail" value="'.$this->session->userdata('uemail').'">';
  //   echo'</div>';
  //
  //   echo'<div class="nextbtn">';
  //   echo'<div class="dis_table"><input type="button" class="btn green dis_tc" name="next_step1" id="next_step1" value="Next"></div>';
  //  echo'</div>';
  // echo'</form>';
  // echo'</div>';
  // echo'</div>';
  // echo'</div>';

  ?>
