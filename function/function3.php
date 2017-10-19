<?php
    // function には4つの種類がある
    // 1 without return type without argument just say Sanjay.
    // 2 without return type with argument ←いまこれ！！←Sanjayにお金を渡して、何も帰ってこないパターン。（勝手に飯食っておわり）
    // 3 with    return type without argument
    // 4 with    return type with argument

    // argument is parameter.
    //
  function add (){
    $c = 8 + 6;
    // ここの「echo」が勝手にめしを食っちゃうところ。
    return $c;
  }

  function sub (){
    $c = 8 - 6;
    return $c;
  }

  function mul (){
    $c = 8 * 6;
    return $c;
  }

  function div (){
    $c = 8 / 6;
    return $c;
  }

  function rim (){
    $c = 8 % 6;
    return $c;
  }

// Sanjayにお金を渡してるとこ！
     echo $misao = add()."</br>";
     echo $misao = mul()."</br>";
     echo $misao = div()."</br>";
     echo $misao = sub()."</br>";
     echo $misao = add()."</br>";
     echo $misao = rim ()."</br>";
     echo $misao = mul ()."</br>";
     echo $misao = sub ()."</br>";
     echo $misao = add ()."</br>";
     echo $misao = mul ()."</br>";

?>
