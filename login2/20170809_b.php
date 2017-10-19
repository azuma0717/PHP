<html>
  <head>

  </head>
  <body>

<div class="login">

<!--action="#"で同じページ内でリフレッシュする。  -->
  <form action="#" method="GET">
      <table>
        <tr>
            <td><div class="name"><p>Name</p></div></td>
            <td><input type="text" name = "name"></td>
        </tr>
        <tr>
            <td><div class="country"><p>Country</br></p></td></div>
            <td><input type="text" name="country"></td>
        </tr>
        <tr>
            <td><div class="phone"><p>Phone</br></p></td></div>
            <td><input type="number" name="phone"></td>
        </tr>
        <tr>
            <td><div class="email"><p>Email</br></p></td></div>
            <td><input type="text" name="mail"></td>
        </tr>
        <tr>
            <td><div class="pass"><p>Password</br></p></td></div>
            <td><input type="text" name="pass"></td>
        </tr>
        <tr>
            <td><input type="submit" class="ok" value="ok" name="ok"></td>
        </tr>
      </table>
  </form>

</div>

</body>
</html>


<?php

$server = "localhost";
$user = "root";
$pass = "root";
$conn = mysqli_connect($server,$user,$pass);
$sdb = mysqli_select_db($conn,'myapp');


if(isset($_GET['ok'])){

  $name = $_GET['name'];
  $country = $_GET['country'];
  $phone = $_GET['phone'];
  $pass = $_GET['pass'];
  $mail = $_GET['mail'];

if(!empty($name) && !empty($country) && !empty($phone) && !empty($pass) && !empty($mail)){
  $qry = "insert into userlogin3 values ('','".$name."','".$country."','".$phone."','".$mail."','".$pass."')";
  $result = mysqli_query($conn,$qry);

  if($result){

echo'OK</br>';
echo '<a href="http://localhost:8888/login2/20170809_a.php">home</a>';

}else {

echo'NO';
}
}else {
  echo "error</br>";
  echo '<a href="http://localhost:8888/login2/20170809_b.php">return</a>';
}
}

?>
