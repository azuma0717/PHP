<?php SESSION_start();
  include 'header.php';

  $obj = new curd();
  $check =  $obj->all();
  $row = mysqli_fetch_row($check);
  $check2 =  $obj->category($row['3']);
  //////カートに入っている商品を表示する。セッション使ってuidだけセレクトする
  $uid=$_SESSION['uid'];
  $check3 =  $obj->selectcart($uid);
  $count = 1;
  $count2 = 1;

  while ($row3 = mysqli_fetch_row($check3)) {

  echo'<div class="itemcontainer" id="'.$row3['0'].'">';
    echo'<div class="check-mark"><p>✅</p></div>';
    echo'<div class="check-item"><img src="'.$row3['6'].'" class="check-img"></div>';
    echo'<div class="check-name"><p>'.$row3['3'].'</p></div>';
    echo'<div class="check-info">';
      echo'<div class="check-info1"><p>Item Quantity : 1 Price: Rs '.$row3['4'].'</p></div>';
      echo'<div class="check-info1"><p>Item total : Rs '.$row3['4'].'</p></div>';
    echo'</div>';
    echo'<div class="check-change">';
      echo'<div class="check-btn">';
        echo'<button class="btn btn-warning">change</button>';
        echo'<button class="btn btn-default ff"   id="'.$row3['0'].'">delete</button>';
      echo'</div>';
    echo'</div>';
  echo'</div>';
  $_SESSION['cartid'] =$row3[0];
  $count++;
  $total += $row3['4'];
  }

  $count3 = $count-1;

  echo'<div class="orenocontainer">';
    echo'<div class="container bg-success">';
    echo'<div class="h3"><h3 text-align:right;>Subtotal('.$count3.'items):Rs'.$total.'</h3></div>';
  echo'<div class="btn2"><a class="btn btn-success" href="buy.php" ><p>Proceed to cheakout</p></a></div>';
 echo'</div>';
 echo'</div>';

  echo'<div class="recommend">';
  echo'<div class="recommend2"><p>Recommend for you</p></div>';
  echo'<div class="recommend3">';
  echo'<table align="left" style="border-spacing:10;">';
  echo'<tr>';


  while ($row2 = mysqli_fetch_row($check2)) {

    if($count2 == 4 ){
       break;
  }
    echo'<td><div class="rec-1">';
    echo'<a href="page.php?id='.$row2['0'].'">';
    echo'<img src="'.$row2['4'].'" class="rec-2"></a></td>';
    echo'<td valign="top"><div class="rec-4"><p>'.$row2['1'].'</br>'.$row2['2'].'</p></div></div></td>';
    echo'<td><div class="rec-3"><p>'.$row2['3'].'</p></div></td>';
    $count2++;
    }

  echo'</tr>';
  echo'</table>';
  echo'</div>';
  echo'</div>';
  echo'</div>';


  include 'footer.php';
  ?>
