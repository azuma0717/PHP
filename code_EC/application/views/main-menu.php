<?php

// echo'<pre>';
// print_r($allitem);
// echo'</pre>';

   echo'<table align="center" border="0">';
     echo'<form action="#" method="GET">';
         echo'<input type="submit" class="input aaa" name="all" value="all">';
         echo'<input type="submit" class="input foods" name="foods" value="foods">';
         echo'<input type="submit" class="input clothes" name="clothes" value="clothes">';
         echo'<input type="submit" class="input accessories" name="accessories" value="accessories">';
         echo'<input type="submit" class="input sundries" name="sundries" value="sundries">';
         echo'<input type="submit" class="input cosmetics" name="cosmetics" value="cosmetics">';
         echo'<input type="submit" class="input other" name="other" value="other">';
     echo'</form>';
   echo'</table>';

   $count = 1;
   echo'<div class="main-item">';
    echo'<div class="shohin1">';
    // $dataの中のallitemをここで展開する。
    foreach ($allitem as $item):

        echo'<div class="image-box">';
           echo '<a href="'.base_url().'index.php/misao/item?id='.$item['id'].'&cat='.$item['category'].'">';
           echo'<img src="'. base_url().'assets/'.$item['file_path'].'" class="a"/>';
           echo '</a>';
           echo'<div class="text-box">';
            echo'<div class="name"><p>'.$item['name'].'</br>Rs. '.$item['price'].'</p></div>';
            echo'<div class="category"><p><span style="border: 1px solid">'.$item['category'].'</span></p></div>';
           echo'</div>';
        echo'</div>';

       if($count % 6 == 0){
       echo'</div>';
        echo'<div class="shohin1">';
       }
         $count++;

    endforeach;
    echo'</div>';
    echo'</div>';
