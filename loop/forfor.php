<?php

$d=1;

for($a=1; $a<=5; $a++){

   for($b=5; $b>$a; $b--){

  echo "*";
   }
   for($c=1; $c<=$a; $c++){

  echo "$c";
   }

   for($d=1; $d<$a; $d++){

  echo $a-$d;
   }


  echo"</br>";

}
?>
