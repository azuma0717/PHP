<html>
  <head>

  </head>
  <body>

  <form action="#" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
            <td><div class="name"><p>Name</p></div></td>
            <td><input type="text" name = "name"></td>
        </tr>
        <tr>
            <td><div class="pass"><p>Password</br></p></td></div>
            <td><input type="text" name="pass"></td>
        </tr>
        <tr>
            <td><div class="phone"><p>Phone</p></div></td>
            <td><input type="text" name = "phone"></td>
        </tr>
        <tr>
            <td><div class="city"><p>City</br></p></td></div>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td><div class="file"><p>FIle</br></p></td></div>
            <td><input type="file" name="file"></td>
        </tr>

        <tr>
          <td><input type="submit" value="submit" name="submit"></td>
          <td><input type="submit" value="show" name="show"></td>
        </tr>
        </form>
      </table>

</div>

</body>
</html>

<?php

  $server = "localhost";
  $user = "root";
  $pass = "root";
  $conn = mysqli_connect($server,$user,$pass);
  $sdb = mysqli_select_db($conn,'myapp');


  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['pass'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $fileinfo=$_FILES['file'];

    $filename = $fileinfo['name'];
    $filetemp = $fileinfo['tmp_name'];
    $ploc     = "img/".$filename;
    move_uploaded_file($filetemp,$ploc);

  if(!empty($name) && !empty($password) && !empty($phone) && !empty($city)){

    $qry       ="insert into fileupload2 values ('','".$name."','".$password."','".$phone."','".$city."','".$ploc."')";
    $result    =mysqli_query($conn,$qry);

  if($result){
      echo'OK';
    // [name] => monkeys.jpg
    // [type] => image/jpeg
    // [tmp_name] => /Applications/MAMP/tmp/php/php9kqTAf
    // [error] => 0
    // [size] => 382644
    //  echo '<pre>';
    // print_r($fileinfo);

    }else{
      echo'NG';
    }

  }else{
    echo "error";
  }
}
  if(isset($_POST['show'])){

    $qry       = "select * from fileupload2";
    $result    = mysqli_query($conn,$qry);

  if($result){
    while($row = mysqli_fetch_row($result)){
      echo '<div style="float:left;">';
        echo '<div style="float:left;">';
        echo '<img src="'.$row[5].'" style="width:400px;height:300px;">';
        echo '</div>';
        echo '<div style="float:left;">';
          echo '<h1>'.$row[1].'</h1>';
          echo '<p>'.$row[2].'</p>';
          echo '<p>'.$row[3].'</p>';
          echo '<p>'.$row[4].'</p>';
        echo '</div>';
      echo '</div>';



    }


    }else{
      echo'NG';

  }
}

?>
