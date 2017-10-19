<?php

$a = array(4,3,1,);
$d = 0;

for($b = 0; $b<3; $b++){

  for($c = $b+1; $c<3; $c++){

   if($a[$b] > $a[$c]){

      $d     =  $a[$b];
     $a[$b]  =  $a[$c];
     $a[$c]  =  $d;
   }

  }
echo $a[$b] ."</br>";

  }


?>
