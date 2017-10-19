<?php

$num=$_GET['num'];

$a = array(9,6,12,18,21,49,63,75,90,99,95);
$b = 0;

while($b<11){

   if($num == $a[$b]){

  echo $a[$b] ."</br>";
  break;
  }

  $b++;
}
  if($b == 11){

  echo "Not Found !!";

}

?>
