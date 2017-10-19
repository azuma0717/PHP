<?php

// データベースに繋げるファイル。
// クラス名とファイル名を同じにしておく。
// クラス名の頭は大文字。
// extendsはこのまま。
  class Tweetdb extends CI_MODEL
  {
    public function add($tweet,$time,$uid)
    {
      // DBにつなぎますよ。
      $this->load->database();

      // このクエリたたきますよ。テーブルは、tweetだよ。
      $q = $this->db->query("INSERT INTO tweet VALUES('','".$uid."','".$tweet."','0','".$time."')");

      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      // $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      //return $q;
    }

    public function show()
    {
      // DBにつなぎますよ。
      $this->load->database();
      // このクエリたたきますよ。テーブルは、productだよ。ORDER BY id DESC
      $q = $this->db->query("SELECT * FROM tweet INNER JOIN users ON tweet.uid = users.id ORDER BY date DESC");
      // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
      $result = $q->result_array();
      // このファンクション呼び出されたreturnを返すよ。
      return $result;
    }


        public function usershow($id)
        {
          // DBにつなぎますよ。
          $this->load->database();
          // このクエリたたきますよ。テーブルは、productだよ。
          $q = $this->db->query("SELECT * FROM users where id = '".$id."'");
          // 結果をアレイに格納するよ。アレイに格納しないと取り出せないよ。
          $result = $q->result_array();
          // このファンクション呼び出されたreturnを返すよ。
          return $result;
        }

  }

?>
