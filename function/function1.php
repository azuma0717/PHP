<?php

// function には4つの種類がある
// 1 without return type without argument just say Sanjay.←いまこれ
// 2 without return type with argument　←Sanjayにお金を渡して、何も帰ってこないパターン。（勝手に飯食っておわり）
// 3 with    return type without argument
// 4 with    return type with argument

// argument is parameter.


  function add (){
    $a = 6;
    $b = 8;
    $c = $a + $b;
    echo $c;
    echo"</br>";
  }

  function sub (){
    $a = 6;
    $b = 8;
    $c = $a - $b;
    echo $c;
    echo"</br>";
  }

  function mul (){
    $a = 6;
    $b = 8;
    $c = $a * $b;
    echo $c;
    echo"</br>";
  }

  function div (){
    $a = 6;
    $b = 8;
    $c = $a / $b;
    echo $c;
    echo"</br>";
  }

  function rim (){
    $a = 6;
    $b = 8;
    $c = $a % $b;
    echo $c;
    echo"</br>";
  }

     add();
     mul();
     div();
     sub();
     add();
     rim ();
     mul ();
     sub ();
     add ();
     mul ();

?>
