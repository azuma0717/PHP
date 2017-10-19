<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$opt=$_GET['opt'];

if($opt == "add"){
echo $num1+$num2 ."</br>";
}

if($opt == "sub"){
echo $num1-$num2 ."</br>";
}

if($opt == "multi"){
echo $num1*$num2 ."</br>";
}

if($opt == "div"){
echo $num1/$num2 ."</br>";
}

if($opt == "remain"){
echo $num1%$num2 ."</br>";
}

?>
