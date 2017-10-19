<?php

$a= $_POST['a'];
$b= $_POST['b'];
$c= $_POST['c'];
$d= $_POST['d'];

echo $a;
echo $b;
echo $c;
echo $d;

$conn = mysqli_connect('localhost','root','root','myapp');
$query = 'insert into ajaxtest values("","'.$a.'","'.$b.'","'.$c.'","'.$d.'")';
$result = mysqli_query($conn,$query);

// if($result){
//   echo"ok";
// }else{
//   echo"no";
// }


?>
