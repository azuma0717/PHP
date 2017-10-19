<html>
  <head>

  </head>
  <body>

<div class="login">

<!--action="#"で同じページ内でリフレッシュする。  -->
  <form action="#" method="GET">
      <table>
        <tr>
            <td><div class="name"><p>Name</p></div></td>
            <td><input type="text" name = "name"></td>
        </tr>
        <tr>
            <td><div class="phone"><p>Phone</br></p></td></div>
            <td><input type="number" name="phone"></td>
        </tr>
        <tr>
            <td><input type="submit" class="submit" value="submit" name="submit"></td>
            <td><input type="submit" class="submit" value="show" name="show"></td>
        </tr>
      </table>
  </form>

</div>

</body>
</html>

<!--HTMLはここまでで、下からPHPを書く。結果は同じ画面に表示される  -->

<?php

$server = "localhost";
$user = "root";
$pass = "root";

$conn = mysqli_connect($server,$user,$pass);
$sdb = mysqli_select_db($conn,'myapp');

// ifの中でissetを使って、変数がセットされているかを確認する。結果はTかFで返ってくる
if(isset($_GET['show'])){

//<php>の中でHTML文を書きたかったら、echoを使ってシングルコーテーションにする。
  echo '<table border="2" style="background-color:orange;color:blue;width:100%;">';
    echo'<tr>';
        echo'<th>id</th>';
        echo'<th>Name</th>';
        echo'<th>Phone</th>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>0</td>';
        echo'<td>RRRRRRR</td>';
        echo'<td>0000000</td>';
    echo'</tr>';

//SQL文を発動
$qry = "select * from userlogin2";

$result = mysqli_query($conn,$qry);

if($result){

// 取得された行に対応する配列を返し、内部のデータポインタを前に進める。
while($row = mysqli_fetch_row($result)){

  echo'<tr>';
      echo'<td>'.$row[0].'</td>';
      echo'<td>'.$row[1].'</td>';
      echo'<td>'.$row[2].'</td>';
  echo'</tr>';

  // print_r($row);
}

  echo'</table>';


}else{

  echo "miss";
}
}

if(isset($_GET['submit'])){

$name = $_GET['name'];
$phone = $_GET['phone'];


$qry = "insert into userlogin2 values ('','".$name."','".$phone."')";

$result = mysqli_query($conn,$qry);

if($result){

echo ok;

}else{

echo no;

}

}


?>
