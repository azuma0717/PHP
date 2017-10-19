<?php

$a=$_GET['yosh'];

for($b = $a; $b<=7; $b++){
 switch ($b) {
   case '1':echo "Monday";
   break;
   case '2':echo "Tuesday";
   break;
   case '3':echo "Wednesday";
   break;
   case '4':echo "Thursday";
   break;
   case '5':echo "Friday";
   break;
   case '6':echo "Satrday";
   break;
   case '7':echo "Sunday"."</br>";
   break;

///////////////////////////////////
// ブレイクをかまさないと、その下のcaseまで
// 全て流れてしまう。
  //  case '1':echo "Monday";
  //  case '2':echo "Tuesday";
  //  case '3':echo "Wednesday";
  //  case '4':echo "Thursday";
  //  case '5':echo "Friday";
  //  case '6':echo "Satrday";
  //  case '7':echo "Sunday"."</br>";
///////////////////////////////////
}
}

?>
