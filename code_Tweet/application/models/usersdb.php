<?php

// データベースに繋げるファイル。
// クラス名とファイル名を同じにしておく。
// クラス名の頭は大文字。
// extendsはこのまま。
  class Usersdb extends CI_MODEL
  {
      public function can_log_in(){	//can_log_inメソッドを作っていく

          $this->db->where("email", $this->input->post("email"));	//POSTされたemailデータとDB情報を照合する
          $this->db->where("password", md5($this->input->post("password")));	//POSTされたパスワードデータとDB情報を照合する
          $query = $this->db->get("users");
          // $query2 = $this->db->query('SELECT * FROM users INNER JOIN tweet ON users.id = tweet.uid');
          $result = $query->result_array();

          if($query->num_rows() == 1){	//ユーザーが存在した場合の処理
            $this->session->set_userdata('uid',$result[0]['id']);
            $this->session->set_userdata('name',$result[0]['name']);
            $this->session->set_userdata('img',$result[0]['img']);
            return $result;
          }else{					//ユーザーが存在しなかった場合の処理
            return false;
          }
    }

      public function add_temp_users($key){
          		//add_temp_usersモデルの実行時に、以下のデータを取得して、$dataと紐づける
          		$data=array(
          			"email"=>$this->input->post("email"),
          			"password"=>md5($this->input->post("password")),
          			"key"=>$key
          		);
          		//$dataをDB内のtemp_usersに挿入↓後に、$queryと紐づける
          		$query=$this->db->insert("temp_users", $data);
          		if($query){		//データ取得が成功したらTrue、失敗したらFalseを返す
          			return true;
          		}else{
          			return false;
          		}
          	}

      public function is_valid_key($key){
          		$this->db->where("key", $key);	// $keyと等しいレコードを指定
          		$query = $this->db->get("temp_users");		//temp_userテーブルから情報を取得
          		if($query->num_rows() == 1){
          			return true;
          		}else return false;
          	}
            
      public function add_user($key){
          		$this->db->where("key", $key);		//keyのテーブルを選択
          		$temp_user = $this->db->get("temp_users");		//temp_usersテーブルからすべての値を取得
          		if($temp_user){
          			$row = $temp_user->row();
          			//$rowでは、temp_usersの行を返します。
          			//しかし、このままでは1行目のみが返されるので、さらに以下を実行。
          			$data = array(	//$rowで取得した値のうち、必要な情報のみを取得する
          				"email"=>$row->email,
          				"password"=>$row->password
          			);
          			$did_add_user = $this->db->insert("users", $data);
          		}
          		if($did_add_user){		//did_add_userが成功したら以下を実行
          			$this->db->where("key", $key);
          			$this->db->delete("temp_users");
          			return $data["email"]; 	//emailの値を返す
          		}return false;
          	}

  }

?>
