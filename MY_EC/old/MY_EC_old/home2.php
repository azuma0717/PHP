<?php SESSION_start();?>
<?php
  include 'header2.php';
  include 'main-pic.php';
  include 'main_menu.php';

///////////////////////////////////////////////////////////////
// ここからアイテムの画像などの情報をDB接続してとってくる//////
///////////////////////////////////////////////////////////////

  $server = "localhost";
  $user = "root";
  $pass = "root";
  $conn = mysqli_connect($server,$user,$pass);
  $sdb = mysqli_select_db($conn,'misao');

  $qry       = "select * from product";
  $result    = mysqli_query($conn,$qry);

  // if($result){
  //   echo "ok";
  // }else{
  //
  //   echo"NG";
  // }

  $count = 1;
  echo'<div class="main-item">';

  while($row = mysqli_fetch_row($result)){

    if($count == 1 || ($count -1) % 6 == 0  ){
      echo'<div class="shohin1">';
    }
          echo'<div class="image-box">';
          echo'<img src="'.$row['4'].'"class="a"/>';
          echo'<div class="text-box">';
          echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
          echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
          echo'</div>';
       echo'</div>';


      if($count % 6 == 0){
      echo'</div>';
      }
        $count++;
    }
    echo'</div>';
    echo'</div>';

?>


<?php
include 'footer.php';
?>
