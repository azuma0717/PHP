<?php

$a= $_POST['a'];


$conn = mysqli_connect('localhost','root','root','myapp');
$query = "update ajaxtest set a='".$a."' where a='999'";
$result = mysqli_query($conn,$query);


echo"this is Ajax";



// if($result){
//   echo"ok";
// }else{
//   echo"no";
// }


?>
