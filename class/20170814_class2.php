<?php
// function is group of statement
// class is group of functions
// raj is the group of classes
// extends multilevel
// インヘリテンス＝継承

// クラスの宣言
  class a{
    //クラス内の変数「プロパティ(propety)」
    //「private」じゃなければ、継承してプロパティは使い放題
    protected $a = 8;
    public    $b = 3;

    //クラス内の関数「メソッド(method)」
      function add(){

    // ファンクション内で「$a」などの変数を宣言してもいいが、
    // ファンクションの外からクラスで宣言したプロパティを使いたい場合は、
    // $thisを使う。アローを使って、＄はつけない。
        $c = $this -> a + $this -> b;
        echo"$c"."</br>";
      }
  }
    // extendsをつかうことで、継承が可能。メソッドもプロパティも使える。
  class b extends a{
      function sub(){
        $c = $this -> a - $this -> b;
        echo"$c"."</br>";
      }
  }
  class c extends b{
      function mul(){
        $c = $this -> a * $this -> b;
        echo"$c"."</br>";
      }
  }
  class d extends c{
      function div(){
        $c = $this -> a / $this -> b;
        echo"$c"."</br>";
      }
  }
  class e extends d{
      function rim(){
        $c = $this -> a % $this -> b;
        echo"$c"."</br>";
      }
  }

  // $this->「擬似変数」
  // class 内から、自class 内の変数や関数を呼ぶ時に使います。

// classの中にあるfunctionを呼び出すときは、
// 「new class名()」で変数に打ち込み、その後、「->」をつかってfunctionを呼び出す。
// 「class」の中を使うので、二段階右折が必要。
// インスタンス(オブジェクト型の値)を作成するという。

      $obj1 =  new a();
      $obj1 -> add();
      $obj2 =  new b();
      $obj2 -> sub();
      $obj3 =  new c();
      $obj3 -> mul();
      $obj4 =  new d();
      $obj4 -> div();
      $obj5 =  new e();
      $obj5 -> rim();

?>
