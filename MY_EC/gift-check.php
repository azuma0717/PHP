<?php SESSION_start();

  include 'db/ec_db.php';

  $checkid=$_SESSION['checkid'];
  $gift=$_POST['gift'];

  $obj = new curd();
  $check =  $obj->checkout4($gift,$checkid);

  // if($check){
  //   echo"ok";
  // }else{
  //   echo"no";
  // }

?>
