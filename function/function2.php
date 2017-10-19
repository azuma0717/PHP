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
    // 2 without return type with argument ←いまこれ！！←Sanjayにお金を渡して、何も帰ってこないパターン。（勝手に飯食っておわり）
    // 3 with    return type without argument
    // 4 with    return type with argument

    // argument is parameter.

  if(isset($_GET['submit'])){
    $a = $_GET['num1'];
    $b = $_GET['num2'];

    //
  function add ($x,$y){
    $c = $x + $y;
    echo $c;
    // ここの「echo」が勝手にめしを食っちゃうところ。
    echo"</br>";
  }

  function sub ($x,$y){
    $c = $x - $y;
    echo $c;
    echo"</br>";
  }

  function mul ($x,$y){
    $c = $x * $y;
    echo $c;
    echo"</br>";
  }

  function div ($x,$y){
    $c = $x / $y;
    echo $c;
    echo"</br>";
  }

  function rim ($x,$y){
    $c = $x % $y;
    echo $c;
    echo"</br>";
  }

// Sanjayにお金を渡してるとこ！
     add($a,$b);
     mul($a,$b);
     div($a,$b);
     sub($a,$b);
     add($a,$b);
     rim ($a,$b);
     mul ($a,$b);
     sub ($a,$b);
     add ($a,$b);
     mul ($a,$b);

}
?>
