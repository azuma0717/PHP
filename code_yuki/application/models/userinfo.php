<?php

  class Userinfo extends CI_MODEL
  {

    public function yuki($name,$phone,$password,$email)
    {
      $this->load->database();
      $this->db->query("insert into userinfo values('','".$name."','".$phone."','".$password."','".$email."')");


    }
}

?>
