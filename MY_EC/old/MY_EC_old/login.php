<?php
//SESSION_start();
/////////////////////////////////////////////////////////////////
////////////////こっからログインのコード/////////////////////////
/////////////////////////////////////////////////////////////////
  include 'db/ec_db.php';
            $name=$_POST['name'];
           $password=$_POST['pass'];

          //  echo $name;
          //  echo $password;

           $obj = new curd();
           $check2 =  $obj->login($name,$password);
           $result_count =mysqli_num_rows($check2);
          //  $res = mysqli_fetch_row($check2);
          //  echo $res['1'];


         if($check2){
           if($result_count > 0){
           $res = mysqli_fetch_row($check2);
            $_SESSION['uname'] = $res[1];
            if($_SESSION['uname'] == $name)
            {
              //   $_SESSION['uname'];
              echo "yesitsdone";
            }
            else
              {
                echo "noo";
              }
            }
        }

?>
