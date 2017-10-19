<?php
SESSION_start();
/////////////////////////////////////////////////////////////////
////////////////こっからログインのコード/////////////////////////
/////////////////////////////////////////////////////////////////
  include 'db/ec_db.php';

    $name = $_POST['name'];
    $pass1 = $_POST['pass1'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
     $gender1 = $_POST['gender1'];
     $gender2 = $_POST['gender2'];

///////////// ↓のファンクションはdb/ec_db.phpから呼び出す///////
    $obj = new curd();
    if(!isset($gender1)){
      echo"already";
    }else{
    $check =  $obj->signup($name,$pass1,$phone,$email,$dob,$gender2);
    }

    if($check){
      echo"ok";
    }else{
      echo"NG";
    }

?>
