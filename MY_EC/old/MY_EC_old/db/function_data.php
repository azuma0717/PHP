<?php
// //////insert part/////////////////////////////////////////////
  function insert($a,$b,$c,$d){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'insert into product values("","'.$a.'","'.$b.'","'.$c.'","'.$d.'")';
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////select part/////////////////////////////////////////////
  function select($a,$b,$c,$d){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = "select * from product where name = '".$a."' or phone = '".$b."'";
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////show part/////////////////////////////////////////////
  function show($a,$b,$c,$d){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'select * from product';
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////delete part/////////////////////////////////////////////
  function delete($a,$b,$c,$d){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'delete from product where name="'.$a.'"or price = "'.$b.'"or category = "'.$c.'" or file_path = "'.$d.'"';
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////update part/////////////////////////////////////////////
  function update($a,$b,$c,$d){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query = 'update product set name="'.$a.'"or price = "'.$b.'"or category = "'.$c.'" or file_path = "'.$d.'"';
    $result = mysqli_query($conn,$query);
    return $result;
  }

 ?>
