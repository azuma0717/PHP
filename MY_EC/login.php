<?php
SESSION_start();
/////////////////////////////////////////////////////////////////
////////////////こっからログインのコード/////////////////////////
/////////////////////////////////////////////////////////////////
  include 'db/ec_db.php';

    if(isset($_SESSION['uname'])){
      echo"already";
    }else{

     $name=$_POST['name'];
     $password=$_POST['pass'];

    // echo $name;
    // echo $password;

     $obj = new curd();
     $check2 =  $obj->login($name,$password);
     $result_count =mysqli_num_rows($check2);
    //echo $res['1'];

      if($check2){
          if($result_count == 1){
             $res = mysqli_fetch_row($check2);
             $_SESSION['uid'] = $res[0];
             $_SESSION['uname'] = $res[1];
             $_SESSION['uphone'] = $res[3];
             $_SESSION['uemail'] = $res[4];
             $_SESSION['udob'] = $res[5];



               if($_SESSION['uname'] == $name){
                   echo "yesitsdone";
              }
               else{
                   echo "noo";
              }
          }
      }
    }
?>
