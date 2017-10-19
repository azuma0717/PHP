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
    // ここの「echo」が勝手にめしを食っちゃうところ。
  }

  function sub ($x,$y){
    $c = $x - $y;
  }

  function mul ($x,$y){
    $c = $x * $y;
  }

  function div ($x,$y){
    $c = $x / $y;
  }

  function rim ($x,$y){
    $c = $x % $y;
  }

// Sanjayにお金を渡してるとこ！
     echo add($a,$b);
     echo mul($a,$b);
     echo div($a,$b);
     echo sub($a,$b);
     echo add($a,$b);
     echo rim ($a,$b);
     echo mul ($a,$b);
     echo sub ($a,$b);
     echo add ($a,$b);
     echo mul ($a,$b);

}
?>
