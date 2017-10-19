<?php

for($a=9; $a>=1; $a--){

  if($a>=5){

  for($b=1; $b<($a-4); $b++){

    echo "*";

  }

  for($c=1; $c<(11-$a); $c++){

   echo $c;

  }

  for($d=$c; $d>2; $d--){

   echo $d-2;

  }

}else{

  for($e=$a; $e<5; $e++){

    echo "*";
  }
  for($f=1; $f<=$a; $f++){

   echo $f;
  }

  for($g=($a-1); $g>=1; $g--){

    echo $g;
  }

}
  echo"</br>";
}
?>
