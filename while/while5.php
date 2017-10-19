<?php

 $a = 1;

 while($a < 10){

  if($a <6){

  $b = 1;

     while($b <=$a){
        echo $b;
        $b++;
      }
        echo "</br>";

}else {

  $c = 1;

     while($c <= (10-$a) ){
        echo $c;
        $c++;
      }
      echo "</br>";
      }

 $a++;
}

?>
