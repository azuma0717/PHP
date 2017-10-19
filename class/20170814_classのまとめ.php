<?php

///////////////////////////////////////////////
// 参考：http://www.atmarkit.co.jp/ait/articles/1508/05/news021.html
// ・クラスの定義
// ・メソッド
// ・プロパティ
// ・「public」「protected」「private」の違い
// ・「$this」の使い方
// ・クラス外からの呼び出し
// ・継承元と継承先
// ・オーバーライド
// ・コンストラクターとデストラクター
///////////////////////////////////////////////

// クラス定義
// class hoge {
//   // メソッドの宣言
//   public function setValue($i){
//     // 引数の値をプロパティに保存する
//     $this->_value = $i;
//   }
//   // プロパティの宣言
//   private $_value;
// }
// //
// // クラス「hoge」を呼び出して、「obj」に「setValue」を使って10を格納
// $obj = new hoge();
// $obj->setValue(10);
//  echo '<pre>';
// var_dump($obj);
// //
// // クラス「hoge」を呼び出して、「obj2」に「setValue」を使って20を格納
// $obj2 = new hoge();
// $obj2->setValue(20);

///////////////////
// 「obj」「obj2」それぞれで「hoge」クラスを呼び出して、
// メソッド（function）を使っている。
// クラスは設計図のようなイメージで、
// 何回使っても上書きされるということはない。
// そのため二回呼び出しをしても、それぞれ「10」「20」を入れた値
// の結果が返ってきている
///////////////////


  // var_dump($obj);
  // var_dump($obj2);
  //  echo '</pre>';


/////////////////////////////////////

// class hoge {
//   //メソッドの定義。「public」クラス外でも使える。ここを「public」以外にして
//   //クラス外から呼び出そうとするとエラーになる。
//   // $thisを使って、同じクラス内の変数を頂戴している。
//   public function f() {
//     $this->_pro_val = 20;
//     $this->_pri_val = 30;
//   }
// //
// public $_pub_val;
// // 同じクラス内であれば、変数に数字など入れることは可能。
// protected $_pro_val;
// private $_pri_val;
// }
// //クラスの呼び出し。
// $obj = new hoge();
// //_pub_valはpublicなので、クラス外からも呼び出し可能。
// $obj->_pub_val = 10;
// $obj->f();
// echo '<pre>';
// var_dump($obj);
// echo '</pre>';
//
// class hoge2 {
//   public function __construct() {
//     echo "run constructor\n";
//   }
// }
// //クラスが呼ばれた瞬間、コンストラクターが走る
// $obj = new hoge2();
//////////////////////////////////////
// クラス内で定義されたプロパティ（変数）は、
// 「public」「protected」「private」で属性が付いていて、
// 「public」は、クラス外からでも呼び出し可能。
// 「protected」は、継承されたクラスなら呼び出し可能。
// 「private」は、そのクラス内のみ呼び出し可能。
// 特に属性が付いていない場合は、「public」として呼び出し可能。
//
// 同じクラスのプロパティをファンクション内で使用する場合は、
// 「$this」を使って呼び出して使う。
//
// クラス内の「public」のメソッドで「private」のプロパティを呼び出し、
// クラス外からそのメソッドを呼び出した場合、きっちり、「private」の
// 内容も反映されているよ！
//////////////////////////////////////




//////////////////////////////////////
// こっから継承の話。
//
// class hoge {
//     public function A() {
//         echo "call A\n";
//     }
// //
//     private $i_ = 1;
// }
// //「extends」継承しまっせの合図。
// class foo extends hoge {
//     public function B() {
//         echo "call B\n";
//     }
// //
//     private $j_ = 999;
// }
// echo '<pre>';
// // class hogeを使う→普通に使える。
// $hoge_obj = new hoge();
// $hoge_obj->A();
// var_dump($hoge_obj);
//
// // class fooを使う
// $foo_obj = new foo();
// $foo_obj->B();
// $foo_obj->A(); // class fooには直接的にはないメソッド（function A）のcall。継承してるので呼び出せる。
// var_dump($foo_obj);
// echo '</pre>';

/////////////////////////////////////////
// 継承していると、継承先のクラスから、
// 継承元のメソッドを呼び出すことができる。
/////////////////////////////////////////

// 継承元と継承先でのメソッド名被りの場合。
// class hoge {
//     public function A() {
//         echo "call hoge's A\n";
//     }
// //
//     private $i_ = 1;
// }
// //
// class foo extends hoge {
//   // ここでメソッド被り発生。
//     public function A() {
//         echo "call foo's A\n";
//     }
// //
//     public $i_ = 999;
// }
//
// // class fooを使う
// $foo_obj = new foo();
// $foo_obj->A();
// var_dump($foo_obj);

/////////////////////////////////////////
// 継承元と先で、メソッド名が同じ場合かつ、プロパティも
// 同じものを使っている場合は、継承先でオーバーライド（上書き）される。
// ただしプロパティがそれぞれ「private」の場合は、オーバーライドされず。
// それぞれのクラスでそれぞれのプロパティを持つことになるので、
// 今回の場合だとi=1とi=999をそれぞれ持つことになる。
// 基本的にこんなことはあり得ないが、バグにはならないので、
// 見かけたら注意。基本的には両方「public」
// 継承元が「public」で先が「private」の場合、
// 継承元がオーバーライドされ待ちになるが、先が独自のプロパティ状態
// になるため、エラーが発生する。
/////////////////////////////////////////

// class hoge {
//     private function h_pri_func() {
//         echo "call h_pri_func\n";
//     }
//     protected function h_pro_func() {
//         echo "call h_pro_func\n";
//     }
// }
// //
// class foo extends hoge {
//     private function f_pri_func() {
//         echo "call f_pri_func\n";
//     }
//     public function test() {
//         $this->f_pri_func(); //自分のクラスないのメソッド呼び出し。
//         //$this->h_pri_func(); // 継承元のメソッドだが、「private」のメソッドは継承されず、エラーになる
//         $this->h_pro_func(); //「protected」は継承可能。
//     }
// }
//
// //
// $foo_obj = new foo();
// //$foo_obj->h_pri_func(); // エラーになる
// //$foo_obj->h_pro_func(); // エラーになる
// //$foo_obj->f_pri_func(); // エラーになる
// $foo_obj->test();

//////////////////////////////////////
// 「public」「protected」「private」の話。
// 継承元、先での継承のされ方から、クラス外での
// 使われ方までよくまとまったプログラムなので、
// 困ったらこれを見ればよい。
//////////////////////////////////////

// class hoge {
//     public function __construct() {
//         echo "run hoge constructor\n";
//     }
//     public function __destruct() {
//         echo "run hoge destructor\n";
//     }
// }
// class foo extends hoge{
//     public function __construct() {
//         echo "run foo constructor\n";
//     }
//     public function __destruct() {
//         echo "run foo destructor\n";
//     }
// }
//
// //
// $obj = new foo();

//////////////////////////////////////
// コンストラクターとデストラクターの話。
// 継承先で同じメソッドを呼び出しているので、
// オーバーライドされている。
// そもそもコンストラクターとデストラクターの
// 使い道がよく分かっていない。。
//////////////////////////////////////

// class hoge {
//     public function __construct() {
//         echo "run hoge constructor\n";
//     }
//     public function __destruct() {
//         echo "run hoge destructor\n";
//     }
// }
// class foo extends hoge{
//     public function __construct() {
//         parent::__construct(); // 継承元クラスのコンストラクターを呼ぶ
//         echo "run foo constructor\n";
//     }
//     public function __destruct() {
//         echo "run foo destructor\n";
//         parent::__destruct(); // 継承元クラスのデストラクターを呼ぶ
//     }
// }
// //
// $obj = new foo();

////////////////////////////////////
// 「parent::」を使うことで、継承元のメソッドを呼び出すことができる
// もちろん、継承先でもメソッドは呼び出される。
// オーバーライドしてても継承元のメソッドが使えるよ。
///////////////////////////////////

?>
