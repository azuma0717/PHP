
<!--//////////////////////////////////////////////////////////  -->
<!-- ・入力フォームを作成して、DBにインサートするプログラム
・そこからセレクト、参照、削除、アップデートも可能
・include,db接続、class
・newData.phpと接続している -->
<!--//////////////////////////////////////////////////////////  -->

<html>
  <head>

  </head>
  <body>

<!--action="#"で同じページ内でリフレッシュする。  -->
  <form action="#" method="POST">
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
            <td><div class="pass"><p>Password</br></p></td></div>
            <td><input type="text" name="pass"></td>
        </tr>
        <tr>
            <td><div class="city"><p>City</br></p></td></div>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td><div class="gender"><p>Gender</br></p></td></div>
            <td><input type="radio" name="gender" value="man">Man</td>
            <td><input type="radio" name="gender" value="woman">Woman</td>
        </tr>
        <tr>
            <td><div class="email"><p>Email</br></p></td></div>
            <td><input type="text" name="email"></td>
        </tr>

        <tr>
            <td><input type="submit" value="insert" name="ins"></td>
            <td><input type="submit" value="select" name="sel"></td>
            <td><input type="submit" value="show" name="sho"></td>
            <td><input type="submit" value="delete" name="del"></td>
            <td><input type="submit" value="update" name="upd"></td>
        </tr>
      </table>
  </form>

</div>

</body>
</html>

<!--HTMLはここまでで、下からPHPを書く。結果は同じ画面に表示される  -->

<?php

  // include 'newData.php';
  // ↓の書き方で対応可能。
  include dirname(__FILE__) . '/test/newData.php';

// //////insert part/////////////////////////////////////////////
  if(isset($_POST['ins'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $obj = new curd();
    $check =  $obj->insert($name,$phone,$pass,$city,$gender,$email);

    if($check){
      echo"ok";
    }else{
      echo"NG";
    }
  }

// //////select part/////////////////////////////////////////////
  if(isset($_POST['sel'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $obj = new curd();

    $check =  $obj->select($name,$phone,$pass,$city,$gender,$email);
    if($check){
      echo '<table border="2" style="background-color:orange;color:blue;width:100%;">';
        echo'<tr>';
            echo'<th>Name</th>';
            echo'<th>Phone</th>';
            echo'<th>pass</th>';
            echo'<th>city</th>';
            echo'<th>gender</th>';
            echo'<th>email</th>';
        echo'</tr>';

      while($row = mysqli_fetch_row($check)){
        echo'<tr>';
            echo'<td>'.$row[1].'</td>';
            echo'<td>'.$row[2].'</td>';
            echo'<td>'.$row[3].'</td>';
            echo'<td>'.$row[4].'</td>';
            echo'<td>'.$row[5].'</td>';
            echo'<td>'.$row[6].'</td>';
          echo'</tr>';
        }
          echo'</table>';

      }else{
          echo"NG";
            }
  }
// //////show part/////////////////////////////////////////////
  if(isset($_POST['sho'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $obj = new curd();

    $check =  $obj->show($name,$phone,$pass,$city,$gender,$email);

    if($check){
      echo '<table border="2" style="background-color:orange;color:blue;width:100%;">';
        echo'<tr>';
            echo'<th>Name</th>';
            echo'<th>Phone</th>';
            echo'<th>pass</th>';
            echo'<th>city</th>';
            echo'<th>gender</th>';
            echo'<th>email</th>';
        echo'</tr>';

      while($row = mysqli_fetch_row($check)){
        echo'<tr>';
            echo'<td>'.$row[1].'</td>';
            echo'<td>'.$row[2].'</td>';
            echo'<td>'.$row[3].'</td>';
            echo'<td>'.$row[4].'</td>';
            echo'<td>'.$row[5].'</td>';
            echo'<td>'.$row[6].'</td>';
          echo'</tr>';
        }
          echo'</table>';

      }else{
          echo"NG";
            }
  }
// //////delete part/////////////////////////////////////////////
  if(isset($_POST['del'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $obj = new curd();

    $check =  $obj->delete($name,$phone,$pass,$city,$gender,$email);

    if($check){
      echo"ok";
    }else{
      echo"NG";
    }
  }
// //////update part/////////////////////////////////////////////
  if(isset($_POST['upd'])){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $obj = new curd();

    $check =  $obj->update($name,$phone,$pass,$city,$gender,$email);

    if($check){
      echo"ok";
    }else{
      echo"NG";
    }
  }
?>
