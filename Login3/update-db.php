<?php

$servername = "localhost";
$username = "root";
$password = "root";
// $db = "myapp";

$conn = mysqli_connect($servername,$username,$password);

$sdb = mysqli_select_db($conn,"myapp");

$qry ="delete from userupdate where id = '2'";

$result = mysqli_query($conn,$qry);


if($result){

  echo "yes";
}
else{

  echo"NO";
}

?>
