<html>
  <head>

  </head>
  <body>

    <?php

    $server = "localhost";
    $user = "root";
    $pass = "root";
    $name = $_GET['name'];
    $country = $_GET['country'];
    $phone = $_GET['phone'];
    $pass = $_GET['pass'];

    $conn = mysqli_connect($server,$user,$pass);
    $sdb = mysqli_select_db($conn,'myapp');

    if(isset($_GET['ok'])){

      $qry = "insert into userlogin3 values ('','".$name."','".$country."','".$phone."','".$pass."')";
      $result = mysqli_query($conn,$qry);

    echo'OK';

   }else {

    echo'NO';
   }

    ?>

</body>
</html>
