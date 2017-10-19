<?php

// データベースに繋げるファイル。
// クラス名とファイル名を同じにしておく。
// クラス名の頭は大文字。
// extendsはこのまま。
  class Product extends CI_MODEL
  {
    public function show_allitems()
    {
      // DBにつなぎますよ。
      $this->load->database();
      // このクエリたたきますよ。テーブルは、productだよ。
      $q = $this->db->query("SELECT * FROM product");
      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      return $result;
    }

    public function show_oneitem($iid)
    {
      // DBにつなぎますよ。
      $this->load->database();
      // このクエリたたきますよ。テーブルは、productだよ。
      $q = $this->db->query("SELECT * FROM product where id = '".$iid."'");
      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      return $result;
    }

    public function show_catitem($cat)
    {
      // DBにつなぎますよ。
      $this->load->database();
      // このクエリたたきますよ。テーブルは、productだよ。
      $q = $this->db->query("SELECT * FROM product where category='".$cat."'");
      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      return $result;
    }

    public function add($a,$b,$c,$d,$e,$f,$x)
    {
      // DBにつなぎますよ。
      $this->load->database();
      // このクエリたたきますよ。テーブルは、productだよ。
      $q = $this->db->query("INSERT INTO cart VALUES ('','".$x."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."')");

      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      // $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      // return $q;
    }

    public function ucart($a)
    {
      $this->load->database();
      $q = $this->db->query("SELECT * FROM cart where uid='".$a."'");
      $result = $q->result_array();

      return $result;
    }

    public function delete($a)
    {
      $this->load->database();
      $q = $this->db->query("DELETE FROM cart where id='".$a."'");

    }

  }

?>
