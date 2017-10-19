<?php

$server = "localhost";
$user = "root";
$pass = "root";

$conn = mysqli_connect($server,$user,$pass);
$sdb = mysqli_select_db($conn,'myapp');
if(isset($_GET['show'])){

  echo '<table border="2" style="background-color:orange;color:blue;width:100%;">';
    echo'<tr>';
        echo'<th>id</th>';
        echo'<th>Name</th>';
        echo'<th>Phone</th>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>0</td>';
        echo'<td>RRRRRRR</td>';
        echo'<td>0000000</td>';
    echo'</tr>';

$qry = "select * from userlogin2";

$result = mysqli_query($conn,$qry);

if($result){


while($row = mysqli_fetch_row($result)){

  echo'<tr>';
      echo'<td>'.$row[0].'</td>';
      echo'<td>'.$row[1].'</td>';
      echo'<td>'.$row[2].'</td>';
  echo'</tr>';

  print_r($row);
}

  echo'</table>';


}else{

  echo "miss";
}


}else{

$name = $_GET['name'];
$phone = $_GET['phone'];


$qry = "insert into userlogin2 values ('','".$name."','".$phone."')";

$result = mysqli_query($conn,$qry);

if($result){

echo ok;

}else{

echo no;

}
}

?>
