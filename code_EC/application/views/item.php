<?php

//  echo'<pre>';
//  print_r($catitem);
// // print_r($oneitem['0']['file_path']);
//  echo'</pre>';

    echo'<form action="addtocart" method="post">';
    echo'<div class="item-intro">';
      echo'<div class="pic"><img src="'. base_url().'assets/'.$oneitem['0']['file_path'].'" class="pic-intro"></div>';
      echo'<div class="item-detail">';
      echo'<div class="item-kind"><div class="bbb"><p>#'.$oneitem['0']['category'].'</p></div></div>';
      echo'<div class="item-kind2"><p>'.$oneitem['0']['name'].'</p>';
      echo'<div class="item-kind3"><p>Rs.'.$oneitem['0']['price'].'<p><hr>';
      echo'<div class="item-kind4">';
        echo'<table align="left">';
        echo'<tr>';
          echo'<td><span style="font-size:12px;">Quantity:</span></td>';
          echo'<td><select name="quantity" class="sqtity" yuki="'.$oneitem['0']['id'].'" pp="'.$oneitem['0']['price'].'">';
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
          echo'<td>Sub total:<span style="font-size:16px;" id="sb'.$oneitem['0']['id'].'" class="bb"> proccesing</span>Rs</td>';
        echo'</tr>';
      echo'</table>';
    echo'</div>';
    echo'</div>';
    // echo'<div class="item-kind5" id="addtocart"><p>Add to cart</p></div></div>';
    echo'<input type="hidden" name="iid" value="'.$oneitem['0']['id'].'">';
    echo'<input type="hidden" name="iname" value="'.$oneitem['0']['name'].'">';
    echo'<input type="hidden" name="price" value="'.$oneitem['0']['price'].'">';
    echo'<input type="hidden" name="category" value="'.$oneitem['0']['category'].'">';
    echo'<input type="hidden" name="file" value="'.$oneitem['0']['file_path'].'">';

    echo'<div id="addtocart"><input class="item-kind5" style="color:#fff; font-size:16px;" type="submit" value="add to cart"></div></div>';
    echo'</div>';
  echo'</div>';
  echo'</form>';



//////////////////////////////////////////////////////////////////////////////

    echo'<div class="recommend">';
      echo'<div class="recommend2"><p>Recommend for you</p></div>';
      echo'<div class="recommend3">';
      echo'<table align="left" style="border-spacing:10;">';
      echo'<tr>';

      $count = 0;
      foreach ($catitem as $item):

        if($count == 4 ){
           break;
      }
        echo'<td><div class="rec-1">';
        echo'<a href="'.base_url().'index.php/misao/item?id='.$item['id'].'&cat='.$item['category'].'">';
        echo'<img src="'. base_url().'assets/'.$item['file_path'].'" style="width:160px; height:150px; padding-left:20px;"></a></td>';
        echo'<td valign="top"><div class="rec-4" style="margin-left:10px;"><p>'.$item['name'].'</br>Rs.'.$item['price'].'</p></div></div></td>';
        echo'<td><div class="rec-3"><p>#'.$item['category'].'</p></div></td>';
        $count++;
        endforeach;

      echo'</tr>';
      echo'</table>';
      echo'</div>';
    echo'</div>';
echo'</div>';

?>
