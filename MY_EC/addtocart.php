<?php
SESSION_start();

  include 'db/ec_db.php';

    if(!isset($_SESSION['uname'])){
      echo"notyet";
    }else{

    $uid=$_SESSION['uid'];
    $num=$_SESSION['num'];
    $a=$_SESSION['a'];
    $b=$_SESSION['b'];
    $c=$_SESSION['c'];
    $d=$_SESSION['d'];


     $obj = new curd();
     $check =  $obj->addtocart($uid,$num,$a,$b,$c,$d);

      if($check){
        echo "add to cart!";
        }
        else{
        echo "noo";
        }
      }

?>
