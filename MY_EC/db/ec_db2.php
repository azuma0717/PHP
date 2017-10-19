<?php
// //////select part/////////////////////////////////////////////
  function all(){
    $conn = mysqli_connect('localhost','root','root','misao');
    $query       = "select * from product";
    // $qry       = "select * from product where category = '# Food'";
    $result    = mysqli_query($conn,$query);
    return $result;
  }
?>
