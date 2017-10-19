<?php

$d=1;

for($a=5; $a>=1; $a--){

  for($b=$a; $b<5; $b++){

    echo "*";

  }

  for($c=1; $c<=$a; $c++){

   echo $c;

  }

  for($d=($a-1); $d>=1; $d--){


    echo $d;
  }

  echo"</br>";
}
?>
