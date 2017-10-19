<html>
  <head>

  </head>
  <body>

<!--action="#"で同じページ内でリフレッシュする。  -->
  <form action="#" method="GET">
      <table>
        <tr>
            <td><div><p>Num1</p></div></td>
            <td><input type="number" name = "num1"></td>
        </tr>
        <tr>
            <td><div><p>Num2</br></p></div></td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="submit"></td>
        </tr>
      </table>
  </form>

  </body>
</html>

<?php
    // function には4つの種類がある
    // 1 without return type without argument just say Sanjay.
    // 2 without return type with argument
    // 3 with    return type without argument
    // 4 with    return type with argument←いまこれ！！←Sanjayにお金を渡して、何か買ってくるパターン。

    // argument is parameter.

  if(isset($_GET['submit'])){
    $a = $_GET['num1'];
    $b = $_GET['num2'];

    //
  function add ($x,$y){
    $c = $x + $y;
    return $c;
    // ここの「echo」が勝手にめしを食っちゃうところ。

  }

  function sub ($x,$y){
    $c = $x - $y;
    return $c;

  }

  function mul ($x,$y){
    $c = $x * $y;
    return $c;

  }

  function div ($x,$y){
    $c = $x / $y;
    return $c;

  }

  function rim ($x,$y){
    $c = $x % $y;
    return $c;

  }

// Sanjayにお金を渡してるとこ！

     echo $misao = add($a,$b)."</br>";
     echo $misao = mul($a,$b)."</br>";
     echo $misao = div($a,$b)."</br>";
     echo $misao = sub($a,$b)."</br>";
     echo $misao = add($a,$b)."</br>";
     echo $misao = rim ($a,$b)."</br>";
     echo $misao = mul ($a,$b)."</br>";
     echo $misao = sub ($a,$b)."</br>";
     echo $misao = add ($a,$b)."</br>";
     echo $misao = mul ($a,$b)."</br>";


// リターンで戻ってきたものに対しては、変数にぶち込むのがベター。↑
// ↓はあんまりよくない。関数に直接エコをかけてるため。
    //  echo add($a,$b)."</br>";
    //  echo mul($a,$b)."</br>";
    //  echo div($a,$b)."</br>";
    //  echo sub($a,$b)."</br>";
    //  echo add($a,$b)."</br>";
    //  echo rim ($a,$b)."</br>";
    //  echo mul ($a,$b)."</br>";
    //  echo sub ($a,$b)."</br>";
    //  echo add ($a,$b)."</br>";
    //  echo mul ($a,$b)."</br>";

}
?>
