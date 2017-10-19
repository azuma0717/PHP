<?php
// function is group of statement
// class is group of functions
// raj is the group of classes

  class cal{
      function add(){
        $a = 8;
        $b = 3;
        $c = $a + $b;
        echo"$c"."</br>";
      }

      function sub(){
        $a = 8;
        $b = 3;
        $c = $a - $b;
        echo"$c"."</br>";
      }

      function mul(){
        $a = 8;
        $b = 3;
        $c = $a * $b;
        echo"$c"."</br>";
      }

      function div(){
        $a = 8;
        $b = 3;
        $c = $a / $b;
        echo"$c"."</br>";
      }

      function rim(){
        $a = 8;
        $b = 3;
        $c = $a % $b;
        echo"$c"."</br>";
      }
  }

// classの中にあるfunctionを呼び出すときは、
// 「new class名()」で変数に打ち込み、その後、「->」をつかってfunctionを呼び出す。
// 「class」の中を使うので、二段階右折が必要。

      $obj =  new cal();
      $obj -> add();
      $obj -> sub();
      $obj -> mul();
      $obj -> div();
      $obj -> rim();

?>
