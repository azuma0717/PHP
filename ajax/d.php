<?php

$a= $_POST['a'];
$b= $_POST['b'];
$c= $_POST['c'];
$d= $_POST['d'];

$conn = mysqli_connect('localhost','root','root','myapp');
$query = "select * from  ajaxtest where a='".$a."' || b='".$b."' || c='".$c."'|| d='".$d."'";
$result = mysqli_query($conn,$query);
if($result){

echo'<table>';
while($row = mysqli_fetch_row($result)){

  echo'<tr>';
      echo'<td>'.$row[0].'</td>';
      echo'<td>'.$row[1].'</td>';
      echo'<td>'.$row[2].'</td>';
      echo'<td>'.$row[3].'</td>';
      echo'<td>'.$row[4].'</td>';
  echo'</tr>';

}

  echo'</table>';

}

echo"this is Ajax";



// if($result){
//   echo"ok";
// }else{
//   echo"no";
// }


?>
