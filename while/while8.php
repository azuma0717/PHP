<?php

 $a = 1;

 while($a <= 5){

  $b = 1;

     while($b < $a){
        echo "*";
        $b++;
      }

  $c = 6-$a;
  $d = 1;
    while ($c >= 1 ) {

      echo $d;
      $c--;
      $d++;

    }

  $e = $d-2;

  while ($e >= 1) {
      echo $e;
      $e--;
  }

    echo "</br>";
 $a++;
}

?>
