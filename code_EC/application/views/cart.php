<?php

  $subtotal = 0;
  $allquantity = 0;
  foreach ($ucart as $cart):
    $itotal = $cart['price'] * $cart['quantity'];

  echo'<div class="itemcontainer">';
    echo'<div class="check-mark"><p>✅</p></div>';
    echo'<div class="check-item"><img src="'. base_url().'assets/'.$cart['img'].'" class="check-img"></div>';
    echo'<div class="check-name"><p>'.$cart['name'].'</p></div>';
    echo'<div class="check-info">';
      echo'<div class="check-info1"><p>Item Quantity : '.$cart['quantity'].' Price: Rs '.$cart['price'].'</p></div>';
      echo'<div class="check-info1"><p>Item total : Rs '.$itotal.' </p></div>';
    echo'</div>';
    echo'<div class="check-change">';
      echo'<div class="check-btn">';
        echo'<button class="btn btn-warning">change</button>';

        echo'<a href="'.base_url().'index.php/misao/delete?diid='.$cart['id'].'"><input class="btn btn-default ff" type="button" value="delete"></a>';

      echo'</div>';
    echo'</div>';
  echo'</div>';
  $subtotal += $itotal;
  $allquantity += $cart['quantity'];

  $itotal = 0;


  endforeach;


  echo'<div class="orenocontainer">';
    echo'<div class="container bg-success">';
    // echo'<div class="h3"><h3 text-align:right;>Subtotal('.$count3.'items):Rs'.$total.'</h3></div>';
    echo'<div class="h3"><h4 text-align:right;>Subtotal('.$allquantity.'items):Rs '.$subtotal.'</h4></div>';
  echo'<div class="btn2"><a class="btn btn-success" href="http://localhost:8888/code_EC/index.php/misao/buy" ><p>Proceed to cheakout</p></a></div>';
 echo'</div>';
 echo'</div>';

  echo'<div class="recommend">';
  echo'<div class="recommend2"><p>Recommend for you</p></div>';
  echo'<div class="recommend3">';
  echo'<table align="left" style="border-spacing:10;">';
  echo'<tr>';

    $count = 0;
    foreach ($catitem as $cart):

      if($count == 4 ){
         break;
    }
      echo'<td><div class="rec-1">';
      echo'<img src="'. base_url().'assets/'.$cart['file_path'].'" style="width:160px; height:150px; padding-left:20px;"></td>';
      echo'<td valign="top"><div class="rec-4" style="margin-left:10px;"><p>'.$cart['name'].'</br>Rs.'.$cart['price'].'</p></div></div></td>';
      echo'<td><div class="rec-3"><p>#'.$cart['category'].'</p></div></td>';
      $count++;
      endforeach;

      echo'</tr>';
      echo'</table>';
      echo'</div>';
    echo'</div>';
echo'</div>';

  ?>
