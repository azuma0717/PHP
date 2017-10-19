<?php SESSION_start();
  include 'header.php';

/////////////////////////////////////////////////////////////////////
////////////allクリックしたら表示される/////////////////////////////
/////////////////////////////////////////////////////////////////////
    if(isset($_GET['all'])){
      $obj = new curd();
      $check =  $obj->all();

      $count = 1;
      echo'<div class="category2"><h2>#all</h2></div>';
      echo'<hr>';
      echo'<div class="main-item">';


      while($row = mysqli_fetch_row($check)){

        if($count == 1 || ($count -1) % 6 == 0  ){
          echo'<div class="shohin1">';
        }
              echo'<div class="image-box">';
              echo '<a href="page.php?id='.$row['0'].'">';
              echo'<img src="'.$row['4'].'"class="a"/>';
              echo '</a>';
              echo'<div class="text-box">';
              echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
              echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
              echo'</div>';
           echo'</div>';

          if($count % 6 == 0){
          echo'</div>';
          }
            $count++;
        }
        echo'</div>';
        echo'</div>';
    }
/////////////////////////////////////////////////////////////////////
////////////Foodクリックしたら表示される/////////////////////////////
/////////////////////////////////////////////////////////////////////
  elseif(isset($_GET['foods'])){
    $obj = new curd();
    $check =  $obj->food();

    $count = 1;
    echo'<div class="category2"><h2>#Foods</h2></div>';
    echo'<hr>';
    echo'<div class="main-item">';

    while($row = mysqli_fetch_row($check)){

      if($count == 1 || ($count -1) % 6 == 0  ){
        echo'<div class="shohin1">';
      }
            echo'<div class="image-box">';
            echo '<a href="page.php?id='.$row['0'].'">';
            echo'<img src="'.$row['4'].'"class="a"/>';
            echo '</a>';
            echo'<div class="text-box">';
            echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
            echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
            echo'</div>';
         echo'</div>';

        if($count % 6 == 0){
        echo'</div>';
        }
          $count++;
      }
      echo'</div>';
      echo'</div>';
  }
/////////////////////////////////////////////////////////////////////
////////////clothesクリックしたら表示される//////////////////////////
/////////////////////////////////////////////////////////////////////
  elseif(isset($_GET['clothes'])){
    $obj = new curd();
    $check =  $obj->clothes();

    $count = 1;
    echo'<div class="category2"><h2>#Clothes</h2></div>';
    echo'<hr>';
    echo'<div class="main-item">';

    while($row = mysqli_fetch_row($check)){

      if($count == 1 || ($count -1) % 6 == 0  ){
        echo'<div class="shohin1">';
      }
            echo'<div class="image-box">';
            echo '<a href="page.php?id='.$row['0'].'">';
            echo'<img src="'.$row['4'].'"class="a"/>';
            echo '</a>';
            echo'<div class="text-box">';
            echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
            echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
            echo'</div>';
         echo'</div>';

        if($count % 6 == 0){
        echo'</div>';
        }
          $count++;
      }
      echo'</div>';
      echo'</div>';
  }

/////////////////////////////////////////////////////////////////////
////////////accessoriesクリックしたら表示される//////////////////////
/////////////////////////////////////////////////////////////////////
  elseif(isset($_GET['accessories'])){
    $obj = new curd();
    $check =  $obj->accessories();

    $count = 1;
    echo'<div class="category2"><h2>#Accessories</h2></div>';
    echo'<hr>';
    echo'<div class="main-item">';

    while($row = mysqli_fetch_row($check)){

      if($count == 1 || ($count -1) % 6 == 0  ){
        echo'<div class="shohin1">';
      }
            echo'<div class="image-box">';
            echo '<a href="page.php?id='.$row['0'].'">';
            echo'<img src="'.$row['4'].'"class="a"/>';
            echo '</a>';
            echo'<div class="text-box">';
            echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
            echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
            echo'</div>';
         echo'</div>';

        if($count % 6 == 0){
        echo'</div>';
        }
          $count++;
      }
      echo'</div>';
      echo'</div>';
  }

/////////////////////////////////////////////////////////////////////
////////////sundriesクリックしたら表示される/////////////////////////
/////////////////////////////////////////////////////////////////////
  elseif(isset($_GET['sundries'])){
    $obj = new curd();
    $check =  $obj->sundries();

    $count = 1;
    echo'<div class="category2"><h2>#Sundries</h2></div>';
    echo'<hr>';
    echo'<div class="main-item">';

    while($row = mysqli_fetch_row($check)){

      if($count == 1 || ($count -1) % 6 == 0  ){
        echo'<div class="shohin1">';
      }
            echo'<div class="image-box">';
            echo '<a href="page.php?id='.$row['0'].'">';
            echo'<img src="'.$row['4'].'"class="a"/>';
            echo '</a>';
            echo'<div class="text-box">';
            echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
            echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
            echo'</div>';
            echo'</div>';

          if($count % 6 == 0){
          echo'</div>';
          }
            $count++;
        }
        echo'</div>';
        echo'</div>';
    }

/////////////////////////////////////////////////////////////////////
////////////cosmeticsクリックしたら表示される/////////////////////////
/////////////////////////////////////////////////////////////////////
  elseif(isset($_GET['cosmetics'])){
    $obj = new curd();
    $check =  $obj->cosmetics();

    $count = 1;
    echo'<div class="category2"><h2>#Cosmetics</h2></div>';
    echo'<hr>';
    echo'<div class="main-item">';

    while($row = mysqli_fetch_row($check)){

      if($count == 1 || ($count -1) % 6 == 0  ){
          echo'<div class="shohin1">';
      }
          echo'<div class="image-box">';
          echo '<a href="page.php?id='.$row['0'].'">';
          echo'<img src="'.$row['4'].'"class="a"/>';
          echo '</a>';
          echo'<div class="text-box">';
          echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
          echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
          echo'</div>';
          echo'</div>';

          if($count % 6 == 0){
              echo'</div>';
          }
            $count++;
          }
          echo'</div>';
          echo'</div>';
   }

/////////////////////////////////////////////////////////////////////
////////////otherクリックしたら表示される/////////////////////////
/////////////////////////////////////////////////////////////////////

  elseif(isset($_GET['other'])){
    $obj = new curd();
    $check =  $obj->other();

    $count = 1;
    echo'<div class="category2"><h2>#Other</h2></div>';
    echo'<hr>';
    echo'<div class="main-item">';

      while($row = mysqli_fetch_row($check)){

        if($count == 1 || ($count -1) % 6 == 0  ){
           echo'<div class="shohin1">';
        }
           echo'<div class="image-box">';
           echo '<a href="page.php?id='.$row['0'].'">';
           echo'<img src="'.$row['4'].'"class="a"/>';
           echo '</a>';
           echo'<div class="text-box">';
           echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
           echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
           echo'</div>';
           echo'</div>';

           if($count % 6 == 0){
              echo'</div>';
           }
           $count++;
           }
           echo'</div>';
           echo'</div>';
  }
  else{
    $obj = new curd();
    $check =  $obj->all();

    $count = 1;
    echo'<div class="main-item">';

      while($row = mysqli_fetch_row($check)){

        if($count == 1 || ($count -1) % 6 == 0  ){
           echo'<div class="shohin1">';
      }
          echo'<div class="image-box">';
          echo '<a href="page.php?id='.$row['0'].'">';
          echo'<img src="'.$row['4'].'"class="a"/>';
          echo '</a>';
          echo'<div class="text-box">';
          echo'<div class="name"><p>'.$row['1'].'</br>'.$row['2'].'</p></div>';
          echo'<div class="category"><p><span style="border: 1px solid">'.$row['3'].'</span></p></div>';
          echo'</div>';
          echo'</div>';

          if($count % 6 == 0){
             echo'</div>';
          }
          $count++;
          }
           echo'</div>';
           echo'</div>';
  }
?>
  <!--アイテムカテゴリのメニューを表示  -->
  <!--ボタンを押して、DBからそれぞれのアイテムを表示させるように実装する  -->

     <table align="center" border="0">
       <form action="#" method="GET">
           <input type="submit" class="input foods" name="foods" value="foods">
           <input type="submit" class="input clothes" name="clothes" value='clothes'>
           <input type="submit" class="input accessories" name="accessories" value="accessories">
           <input type="submit" class="input sundries" name="sundries" value="sundries">
           <input type="submit" class="input cosmetics" name="cosmetics" value="cosmetics">
           <input type="submit" class="input other" name="other" value="other">
       </form>
     </table>

  <!--ajaxを使えば、このメニューでもボタンが使えるらしい -->
        <!-- <div class="main-menu"> -->
        <!-- <div class="aaa"><p>ALL</p></div>
        <div class="foods"><p>Foods</p></div>
        <div class="clothes"><p>Clothes</p></div>
        <div class="accessories"><p>Accessories</p></div>
        <div class="sundries"><p>Sundries</p></div>
        <div class="cosmetics"><p>Cosmetics</p></div>
        <div class="other"><p>Other</p></div> -->
      <!-- </div> -->

 <?php include 'footer.php';?>
