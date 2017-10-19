<?php

for($a=1; $a<=9; $a++){

  if($a<=5){

   for($b=5; $b>$a; $b--){

  echo "*";
   }
   for($c=1; $c<=$a; $c++){

  echo $c;
   }

 }else{

   for($d=4; $d>=(10-$a); $d--){

  echo "*";
   }

   for($e=1; $e<=(10-$a); $e++){

  echo "$e";
   }


}

  echo"</br>";

}
?>
