<?php
  // ただのフォー文で、配列をぶん回す。回数がわかっているときはいいが、基本的に配列の中の数はわからないので、
  // 普通「foreach」を使う。
  // $friend = array('yosh','raj','rei','yoshiki','rei','dai','shinji','mayu','kazuki','taiki');
  //
  // for($i = 0; $i<=9; $i++){
  //
  //   echo $friend[$i];
  //   echo "</br>";
  // }

// print_r($friend);
// arrayを使うときは、基本的にprint_fを使う

  $a = array('yosh','raj','rei','yoshiki','rei','dai','shinji','mayu','kazuki','taiki');
  $b = array('00000','11111','22222','33333','44444','55555','66666','77777','88888','99999');
  $c = array('yokohama','gurugaon','tokyo','kyushu','tokyo','wakayama','yokohama','ooita','nagoya','osaka');

  // それぞれの配列に対して、「foreach」文でぶん回す。
  // 配列の中が空っぽになるまで勝手に回してくれるので便利。
  // foreach($a as $name){
  //
  //   echo $name;
  //   echo "</br>";
  // }
  //
  //   echo"</br>";
  //
  // foreach($b as $tel){
  //
  //   echo $tel;
  //   echo "</br>";
  //   }
  //
  //   echo"</br>";
  //
  // foreach($c as $city){
  //
  //   echo $city;
  //   echo "</br>";
  //  }
  //
  //   echo"</br>";

  // 「foreach」一回かつ、変数を１個用意してインクリメントするパターン
  // この場合は、繰り返す数が全部同じ時に使うと良いですね。

  $y = 0;

  foreach($a as $name){

    echo $name ;
    echo "</br>";
    echo $b[$y];
    echo "</br>";
    echo $c[$y];
    echo "</br>";
    echo "</br>";
    $y++;


  }


?>
