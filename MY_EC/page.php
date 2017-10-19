<?php SESSION_start();
  include 'header.php';

  $num = $_GET['id'];
  $obj = new curd();
  $check =  $obj->id($num);
  $row = mysqli_fetch_row($check);
  $check2 =  $obj->category($row['3']);
  $_SESSION['num'] = $num;
  $_SESSION['a'] = $row['1'];
  $_SESSION['b'] = $row['2'];
  $_SESSION['c'] = $row['3'];
  $_SESSION['d'] = $row['4'];
  $count = 1;

  // if(!isset($_SESSION['uname'])){
  //   echo"notyet";
  // }

  // print_r(mysqli_fetch_row($check =  $obj->id($num)));
  // Array ( [0] => 11 [1] => Dress [2] => Rs 6000 [3] => # Clothes [4] => img/11.jpg )

    echo'<div class="item-intro">';
      echo'<div class="pic"><img src="'.$row['4'].'" class="pic-intro"></div>';
      echo'<div class="item-detail">';
      echo'<div class="item-kind"><div class="bbb"><p>'.$row['3'].'</p></div></div>';
      echo'<div class="item-kind2"><p>'.$row['1'].'</p>';
      echo'<div class="item-kind3"><p>'.$row['2'].'<p><hr>';
      echo'<div class="item-kind4">';
        echo'<table align="left">';
        echo'<tr>';
          echo'<td><span style="font-size:12px;">Quantity:</span></td>';
          echo'<td><select name="quantity">';
            echo'<option value="1">1</option>';
            echo'<option value="2">2</option>';
            echo'<option value="3">3</option>';
            echo'<option value="4">4</option>';
            echo'<option value="5">5</option>';
            echo'<option value="6">6</option>';
            echo'<option value="7">7</option>';
            echo'<option value="8">8</option>';
            echo'<option value="9">9</option>';
            echo'<option value="10">10</option>';
          echo'</select></td>';
          echo'<td><span style="margin-right: 9em;"></span></td>';
          echo'<td><spna style="font-size:12px;">Sub total: proccesing</td>';
        echo'</tr>';
      echo'</table>';
    echo'</div>';
    echo'</div>';
    echo'<div class="item-kind5" id="addtocart"><p>Add to cart</p></div></div>';
    echo'</div>';
  echo'</div>';

//////////////////////////////////////////////////////////////////////////////

    echo'<div class="recommend">';
      echo'<div class="recommend2"><p>Recommend for you</p></div>';
      echo'<div class="recommend3">';
      echo'<table align="left" style="border-spacing:10;">';
      echo'<tr>';


      while ($row2 = mysqli_fetch_row($check2)) {

        if($count == 4 ){
           break;
      }
        echo'<td><div class="rec-1">';
        echo'<a href="page.php?id='.$row2['0'].'">';
        echo'<img src="'.$row2['4'].'" class="rec-2"></a></td>';
        echo'<td valign="top"><div class="rec-4"><p>'.$row2['1'].'</br>'.$row2['2'].'</p></div></div></td>';
        echo'<td><div class="rec-3"><p>'.$row2['3'].'</p></div></td>';
        $count++;
        }

      echo'</tr>';
      echo'</table>';
      echo'</div>';
    echo'</div>';
echo'</div>';


  include 'footer.php';
?>
