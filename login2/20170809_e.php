<?php SESSION_start(); ?>
<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

  $server = "localhost";
  $user = "root";
  $pass = "root";
  $conn = mysqli_connect($server,$user,$pass);
  $sdb = mysqli_select_db($conn,'myapp');


if(isset($_GET['submit'])){
  //
  $email=$_GET['email'];
  $password=$_GET['pass'];
  //
  $qry       ="select * from userlogin3 where email ='".$email."' and pass = '".$password."'";
  $result    =mysqli_query($conn,$qry);
  $result_count =mysqli_num_rows($result);
if($result){
  if($result_count > 0){
    header("location: abc.php");
    exit;
    // $res = mysqli_fetch_row($result);
    // $_SESSION["misao"] = $res[1];

    // echo'okkkkk';
  }else{
    echo'Wrong User name And Password Please Try Again';
  }
}
else {
  echo "stri";
}
}
else{
  echo"no";
}


?>
