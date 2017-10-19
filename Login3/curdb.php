<?php

$user=$_GET['username'];
$pass=$_GET['password'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$city=$_GET['city'];

$servername = "localhost";
$username = "root";
$password = "root";
$db = "myapp";

$conn = mysqli_connect($servername,$username,$password);

$sdb = mysqli_select_db($conn,$db);

 $qry ="insert into userlogin values('','".$user."','".$phone."','".$email."','".$city."','".$pass."')";

$result = mysqli_query($conn,$qry);

if($result){

  echo "ok";
}
else{

  echo"NO";
}

?>
