<?php

$num=$_GET['num'];

$a = array(9,6,12,18,21,49,63,75,90,99,95);
$check =0;

for($b = 0; $b<11; $b++){

   if($num == $a[$b]){

   echo $a[$b] ."</br>";
   $check++;

 }

}
  if($check == 0){

  echo "Not Found !!";

}



?>
