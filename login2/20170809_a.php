<?php SESSION_start();?>
<html>
  <head>

  </head>
  <body>

<div class="login">

<!--action="#"で同じページ内でリフレッシュする。  -->
  <form action="#" method="GET">
      <table>
        <tr>
            <td><div class="email"><p>Email</p></div></td>
            <td><input type="text" name = "email"></td>
        </tr>
        <tr>
            <td><div class="pass"><p>Password</br></p></td></div>
            <td><input type="pass" name="pass"></td>
        </tr>

        <tr>
          <td><input type="submit" class="submit" value="submit" name="submit"></td>
          <td><input type="button"  value="create" onClick="location.href='http://localhost:8888/login2/20170809_b.php'"></td>

        </tr>
        </form>
      </table>


</div>

</body>
</html>

<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

  $server = "localhost";
  $user = "root";
  $pass = "root";
  $conn = mysqli_connect($server,$user,$pass);
  $sdb = mysqli_select_db($conn,'myapp');


if(isset($_GET['submit'])){
  $email=$_GET['email'];
  $password=$_GET['pass'];

if(!empty($email) && !empty($password)){

  $qry       ="select * from userlogin3 where email ='".$email."' and pass = '".$password."'";
  $result    =mysqli_query($conn,$qry);
  $result_count =mysqli_num_rows($result);

if($result){
  if($result_count > 0){
    $res = mysqli_fetch_row($result);
    $_SESSION["misao"] = $res[1];
    //header("location:abc.php");
    ?>

    <script>
      window.location = "20170809_d.php";
    </script>
    <?php

  }else{
    echo'Wrong User name And Password Please Try Again';
  }
}
}else{
  echo "error</br>";
  echo '<a href="http://localhost:8888/login2/20170809_a.php">return</a>';
}
}


?>
