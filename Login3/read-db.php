<?php

$servername = "localhost";
$username = "root";
$password = "root";
// $db = "myapp";

$conn = mysqli_connect($servername,$username,$password);

$sdb = mysqli_select_db($conn,"myapp");

$qry ="select * from userlogin";

$result = mysqli_query($conn,$qry);

while ($info = mysqli_fetch_array($result)) {

  echo  $info['uid'];
  echo  $info['uname'];
  echo  $info['uphone'];
  echo  $info['uemail'];
  echo  $info['ucity'];
  echo "</br>";
}

if($result){

  echo "yes";
}
else{

  echo"NO";
}

?>
