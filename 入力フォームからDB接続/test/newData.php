<?php
// //////insert part/////////////////////////////////////////////
class curd{
  function insert($a,$b,$c,$d,$e,$f){
    $conn = mysqli_connect('localhost','root','root','myapp');
    $query = 'insert into function values("","'.$a.'","'.$b.'","'.$c.'","'.$d.'","'.$e.'","'.$f.'")';
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////select part/////////////////////////////////////////////
  function select($a,$b,$c,$d,$e,$f){
    $conn = mysqli_connect('localhost','root','root','myapp');
    $query = "select * from function where name = '".$a."' or phone = '".$b."'";
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////show part/////////////////////////////////////////////
  function show($a,$b,$c,$d,$e,$f){
    $conn = mysqli_connect('localhost','root','root','myapp');
    $query = 'select * from function';
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////delete part/////////////////////////////////////////////
  function delete($a,$b,$c,$d,$e,$f){
    $conn = mysqli_connect('localhost','root','root','myapp');
    $query = 'delete from function where name="'.$a.'"or phone = "'.$b.'"or city = "'.$d.'" or email = "'.$f.'"';
    $result = mysqli_query($conn,$query);
    return $result;
  }
// //////update part/////////////////////////////////////////////
  function update($a,$b,$c,$d,$e,$f){
    $conn = mysqli_connect('localhost','root','root','myapp');
    $query = 'update function set name="'.$a.'"';
    $result = mysqli_query($conn,$query);
    return $result;
  }
}
 ?>
