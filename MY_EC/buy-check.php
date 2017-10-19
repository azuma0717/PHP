<?php SESSION_start();
  include 'header.php';

  $checkid=$_SESSION['checkid'];

  $obj = new curd();
  $check =  $obj->checkout5($checkid);
  $res = mysqli_fetch_row($check);
  $uid=$_SESSION['uid'];
  $check =  $obj->selectcart($uid);
  $count = 1;

  echo'<div class="center">';
    echo'<table>';
        echo'<tr>';
        echo'<th></th>';
        echo'<th>Item</th>';
        echo'<th>Price</th>';
        echo'<th>Quontity</th>';
      echo'</tr>';
      echo'<hr
        height: 1px;
        border: none;
        border-top: 1px #000000 solid;
        >';
  while ($row = mysqli_fetch_row($check)) {
   echo'<tr>';
     echo'<td><img src="'.$row['6'].'" class="check-img2"></td>';
     echo'<td>'.$row['3'].'</td>';
     echo'<td>Rs'.$row['4'].'</td>';
     echo'<td>1</td>';
  echo'</tr>';
  $count++;
  $total += $row['4'];
}
  $count3 = $count-1;
echo'</table>';
echo '<h4 text-align:right;>Subtotal('.$count3.'items):Rs'.$total.'</h4>';
echo'<hr
  height: 1px;
  border: none;
  border-top: 1px #000000 solid;
  >';

   echo'<div class="table2">';
    echo'<table>';
      echo'<tr>';
        echo'<td>Name</td>';
        echo'<td><p>';
        echo $res[2];
        echo'</p></td>';
      echo'</tr>';

      echo'<tr>';
        echo'<td>Phone</td>';
        echo'<td><p>';
        echo $res[3];
        echo'</p></td>';
      echo'</tr>';

      echo'<tr>';
        echo'<td>Address</td>';
        echo'<td><p>';
        echo $res[4];
        echo'</p></td>';
      echo'</tr>';

      echo'<tr>';
        echo'<td>Mail</td>';
        echo'<td><p>';
        echo $res[5];
        echo'</p></td>';
      echo'</tr>';

      echo'<tr>';
        echo'<td>Delivery</td>';
        echo'<td><p>';
        echo $res[6];
        echo'</p></td>';
      echo'</tr>';

      echo'<tr>';
        echo'<td>Payment</td>';
        echo'<td><p>';
        echo $res[7];
        echo'</p></td>';
      echo'</tr>';

      echo'<tr>';
        echo'<td>Gift</td>';
        echo'<td><p>';
        echo $res[8];
        echo'</p></td>';
      echo'</tr>';

    echo'</table>';
    echo'</div>';


    echo'<div class="nextbtn">';
    echo'<div class="dis_table"><input type="button" class="btn green dis_tc" name="next_step5" id="next_step5" value="Next"></div>';
   echo'</div>';
  echo'</div>';

  include 'footer.php';
  ?>
