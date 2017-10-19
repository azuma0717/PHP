<?php

$num=$_GET['num'];
1
$a = array(3,9,9,9,11);
$d = 0;
$check =0;

for($b = 0; $b<5; $b++){

   if($num == $a[$b] && $a[$b] != $a[$b+1]){

     for($c = $b; $c<4; $c++){

              $d = $a[$c];
          $a[$c] = $a[$c+1];
          $a[$c+1] = $d;
     }

     $check ++;
     $a[$c] = "*";

 }

}

  if($check == 0){

  echo "Not Found !!";

}else{

  for($e=0; $e<5; $e++)

  echo $a[$e] ."</br>";
}



?>
