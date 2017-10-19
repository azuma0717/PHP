<?php

for($a=1; $a<=9; $a++){

  if($a<=5){

   for($b=1; $b<=$a; $b++){

  echo $b;
   }
 }else{

   for($c=1; $c<=(10-$a); $c++){

  echo "$c";
   }

}

  echo"</br>";

}
?>
