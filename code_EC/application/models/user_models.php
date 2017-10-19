<?php

// データベースに繋げるファイル。
// クラス名とファイル名を同じにしておく。
// クラス名の頭は大文字。
// extendsはこのまま。
  class User_models extends CI_MODEL
  {
    public function signup($a,$b,$c,$d,$e,$f)
    {
      // DBにつなぎますよ。
      $this->load->database();
      // このクエリたたきますよ。テーブルは、productだよ。
      $q = $this->db->query("INSERT INTO userinfo VALUES ('','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."')");

      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      // $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      // return $q;
    }
    public function login($a,$b)
    {
      // DBにつなぎますよ。
      $this->load->database();
      // このクエリたたきますよ。テーブルは、productだよ。
      $q = $this->db->query("SELECT * FROM userinfo WHERE name='".$a."' and password='".$b."'");

      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      // $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      return $q;
    }

  }

?>
