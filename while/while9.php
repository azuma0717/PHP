<?php

 $a = 1;

 while($a < 10){

   if($a < 6){

     $f = 1;

        while($f <= 5-$a){
           echo "*";
           $f++;
         }

     $g = 1;
       while ($g <= $a ) {

         echo $g;
         $g++;

       }

     $e = $g-2;

     while ($e >= 1) {
         echo $e;
         $e--;
     }

       echo "</br>";

}else{

  $b = 1;

     while($b <= ($a-5)){
        echo "*";
        $b++;
      }

  $c = 10-$a;
  $d = 1;
    while ($c >= 1 ) {

      echo $d;
      $d++;
      $c--;

    }

  $e = $d-2;

  while ($e >= 1) {
      echo $e;
      $e--;
  }

    echo "</br>";
  }

 $a++;
}

?>
