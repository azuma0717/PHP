<?php

$d=1;

for($a=1; $a<=5; $a++){

  for($c=1; $c<$a; $c++){

 echo "*";
  }

   for($b=5; $b>=$a; $b--){

  echo $d;
       $d++;
   }

       $d=1;

  echo"</br>";
}
?>
