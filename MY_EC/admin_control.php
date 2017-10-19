<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/stylesheet3.css">
  </head>
  <body>
    <?php
      include('/Applications/MAMP/htdocs/MY_EC/database/function_data.php');
      include 'header.php';
    ?>

<!--action="#"で同じページ内でリフレッシュする。  -->
  <form action="#" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
            <td><div class="name"><p>Name</p></div></td>
            <td><input type="text" name = "name"></td>
        </tr>
        <tr>
            <td><div class="price"><p>Price</br></p></td></div>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td><div class="category"><p>Category</br></p></td></div>
            <td><input type="text" name="category"></td>
        </tr>
        <tr>
            <td><div class="file"><p>FIle</br></p></td></div>
            <td><input type="file" name="file"></td>
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

  include 'function_data.php';

// //////insert part/////////////////////////////////////////////
  if(isset($_POST['ins'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $fileinfo=$_FILES['file'];
    $filename = $fileinfo['name'];
    $filetemp = $fileinfo['tmp_name'];
    $ploc     = "img/".$filename;
    move_uploaded_file($filetemp,$ploc);

    $check =  insert($name,$price,$category,$ploc);

    if($check){
      echo"ok";

    }else{
      echo"NG";
    }
  }

// //////select part/////////////////////////////////////////////
  if(isset($_POST['sel'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $fileinfo=$_FILES['file'];
    $filename = $fileinfo['name'];
    $filetemp = $fileinfo['tmp_name'];
    $ploc     = "img/".$filename;
    move_uploaded_file($filetemp,$ploc);

    $check =  select($name,$price,$category,$ploc);
    if($check){
      echo '<table border="2" style="background-color:orange;color:blue;width:100%;">';
        echo'<tr>';
            echo'<th>Name</th>';
            echo'<th>Price</th>';
            echo'<th>Category</th>';
            echo'<th>File-path</th>';
        echo'</tr>';

      while($row = mysqli_fetch_row($check)){
        echo'<tr>';
            echo'<td>'.$row[1].'</td>';
            echo'<td>'.$row[2].'</td>';
            echo'<td>'.$row[3].'</td>';
            echo'<td>'.$row[4].'</td>';
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
    $price = $_POST['price'];
    $category = $_POST['category'];
    $fileinfo=$_FILES['file'];
    $filename = $fileinfo['name'];
    $filetemp = $fileinfo['tmp_name'];
    $ploc     = "img/".$filename;
    move_uploaded_file($filetemp,$ploc);

    $check =  show($name,$price,$category,$ploc);

    if($check){
      echo '<table border="2" style="background-color:orange;color:blue;width:100%;">';
        echo'<tr>';
        echo'<th>Name</th>';
        echo'<th>Price</th>';
        echo'<th>Category</th>';
        echo'<th>File-path</th>';
        echo'</tr>';

      while($row = mysqli_fetch_row($check)){
        echo'<tr>';
            echo'<td>'.$row[1].'</td>';
            echo'<td>'.$row[2].'</td>';
            echo'<td>'.$row[3].'</td>';
            echo'<td>'.$row[4].'</td>';
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
    $price = $_POST['price'];
    $category = $_POST['category'];
    $fileinfo=$_FILES['file'];
    $filename = $fileinfo['name'];
    $filetemp = $fileinfo['tmp_name'];
    $ploc     = "img/".$filename;
    move_uploaded_file($filetemp,$ploc);

    $check =  delete($name,$price,$category,$ploc);

    if($check){
      echo"ok";
    }else{
      echo"NG";
    }
  }
// //////update part/////////////////////////////////////////////
  if(isset($_POST['upd'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $fileinfo=$_FILES['file'];
    $filename = $fileinfo['name'];
    $filetemp = $fileinfo['tmp_name'];
    $ploc     = "img/".$filename;
    move_uploaded_file($filetemp,$ploc);

    $check =  update($name,$price,$category,$ploc);

    if($check){
      echo"ok";
    }else{
      echo"NG";
    }
  }


?>
