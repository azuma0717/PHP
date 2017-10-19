<?php SESSION_start();

class curd{
// //////サインアップ part/////////////////////////////////////////////
  function signup($a,$b,$c,$d,$e,$f){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'insert into signupin values("","'.$a.'","'.$b.'","'.$c.'","'.$d.'","'.$e.'","'.$f.'")';
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////ログイン part/////////////////////////////////////////////
  function login($a,$b){
      $conn = mysqli_connect('localhost','root','root','misao');
      $query  = "select * from signupin where name ='".$a."' and pass1 = '".$b."'";
      $result = mysqli_query($conn,$query);
      return $result;
    }
// //////All part/////////////////////////////////////////////
  function all(){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query       = "select * from product";
    // $qry       = "select * from product where category = '# Food'";
    $result    = mysqli_query($conn,$query);
    return $result;
  }
// //////food part/////////////////////////////////////////////
  function food(){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = "select * from product where category = '# Food'";
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////clothes part/////////////////////////////////////////////
function clothes(){
  $conn = mysqli_connect('localhost','root','root','misao');
  $query = "select * from product where category = '# Clothes'";
  $result = mysqli_query($conn,$query);
  return $result;
  }
// //////accessories part/////////////////////////////////////////////
function accessories(){
  $conn = mysqli_connect('localhost','root','root','misao');
  $query = "select * from product where category = '# Accesasories'";
  $result = mysqli_query($conn,$query);
  return $result;
  }
// //////sundries part/////////////////////////////////////////////
function sundries(){
  $conn = mysqli_connect('localhost','root','root','misao');
  $query = "select * from product where category = '# Sundries'";
  $result = mysqli_query($conn,$query);
  return $result;
  }
// //////cosmetics part/////////////////////////////////////////////
function cosmetics(){
  $conn = mysqli_connect('localhost','root','root','misao');
  $query = "select * from product where category = '# Cosmetics'";
  $result = mysqli_query($conn,$query);
  return $result;
  }
// //////other part/////////////////////////////////////////////
function other(){
  $conn = mysqli_connect('localhost','root','root','misao');
  $query = "select * from product where category = '# Others'";
  $result = mysqli_query($conn,$query);
  return $result;
  }
// //////other part/////////////////////////////////////////////
function id($a){
  $conn = mysqli_connect('localhost','root','root','misao');
  $query = "select * from product where id = '".$a."'";
  $result = mysqli_query($conn,$query);
  return $result;
  }
// //////other part/////////////////////////////////////////////
function category($a){
  $conn = mysqli_connect('localhost','root','root','misao');
  $query = "select * from product where category = '".$a."'";
  $result = mysqli_query($conn,$query);
  return $result;
  }

//////other part/////////////////////////////////////////////
function checkout($a,$b,$c,$d,$e){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'insert into checkout values("","'.$a.'","'.$b.'","'.$c.'","'.$d.'","'.$e.'","","","")';
    $result = mysqli_query($conn,$query);
    return $result;
    }

//////other part/////////////////////////////////////////////
function checkout2($a){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'select * from checkout where uid="'.$a.'"';
    // $query = 'select * from checkout where uid='max'';
    $result = mysqli_query($conn,$query);
    return $result;
    }

//////other part/////////////////////////////////////////////
  function checkout3($a,$b,$c){
    $conn = mysqli_connect('localhost','root','root','misao');
    // $query = 'update checkout SET delivery='.$a.',payment='.$b.' where id='.$c.'';
    $query = 'update checkout SET delivery="'.$a.'", payment="'.$b.'"  WHERE id ="'.$c.'"';
    $result = mysqli_query($conn,$query);
    return $result;
    }

//////other part/////////////////////////////////////////////
  function checkout4($a,$b){
    $conn = mysqli_connect('localhost','root','root','misao');
    // $query = 'update checkout SET delivery='.$a.',payment='.$b.' where id='.$c.'';
    $query = 'update checkout SET gift="'.$a.'"  WHERE id ="'.$b.'"';
    $result = mysqli_query($conn,$query);
    return $result;
    }

//////other part/////////////////////////////////////////////
  function checkout5($a){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = "select * from checkout where id ='".$a."'";
    $result = mysqli_query($conn,$query);
    return $result;
    }

//////other part/////////////////////////////////////////////
  function addtocart($a,$b,$c,$d,$e,$f){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'insert into cart values("","'.$a.'","'.$b.'","'.$c.'","'.$d.'","'.$e.'","'.$f.'")';
    $result = mysqli_query($conn,$query);
    return $result;
    }

//////other part/////////////////////////////////////////////
  function selectcart($a){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = "select * from cart where uid ='".$a."'";
    $result = mysqli_query($conn,$query);
    return $result;
        }

//////other part/////////////////////////////////////////////
    function delete($a){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = "delete from cart where id ='".$a."'";
    $result = mysqli_query($conn,$query);
    return $result;
    }

}
 ?>
