<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tweet extends CI_Controller
{

			public function index()
			{
				$this->login();
			}

			public function main()
			{
				$this->load->model('tweetdb');
				$data['alltweet'] = $this->tweetdb->show();
				$data['userinfo'] = $this->tweetdb->usershow(2);

				$this->load->view('header');
				$this->load->view('main',$data);
			}

			public function login()
			{
				$this->load->view('login');
				// $this->input->post();
				// $a = $_POST['name'];
				// $b = $_POST['pass'];
				//
				//
				// if(isset($_POST['login'])){
				// 	// $this->form_validation->set_rules('name','Name','required');
				// 	//
				// 	// 	if($this->form_validation->run()==TRUE){
				// 	// 		echo "form validated";
				// 	// 	}
				// }
				// $this->load->model('user_models');
				// $data = $this->user_models->login($a,$b);
				// $result = $data->result_array();
				// // print_r($result);
				// // $this->session->set_flashdata("success","success your register");
				//
				// if($data->num_rows() == 1){	//ユーザーが存在した場合の処理
				// 	  $this->session->set_userdata('uid',$result[0]['id']);
				// 		$this->session->set_userdata('uname',$result[0]['name']);
				// 		$this->session->set_userdata('uphone',$result[0]['phone']);
				// 		$this->session->set_userdata('udob',$result[0]['birthday']);
				// 		$this->session->set_userdata('uemail',$result[0]['email']);
				// 	 $this->load->helper('url');
				//  	$url = base_url().'index.php/misao/index';
				//  	redirect($url);
				// }
			}
			public function login_validation()
			{
				$this->load->library("form_validation");	//フォームバリデーションライブラリを読み込む。
																									//利用頻度の高いライブラリ（HTMLヘルパー、URLヘルパー）はオートロード設定をするが、
																									//フォームバリデーションライブラリはログインバリデーションライブラリ内のみで読み込む。

				$this->form_validation->set_rules("email", "メール", "required|trim|callback_validate_credentials");	//Email入力欄のバリデーション設定
				$this->form_validation->set_rules("password", "パスワード", "required|md5|trim");	//パスワード入力欄のバリデーション設定。MD5で暗号化
				// ※trim：バリデーションが行われる前に、文字列の最初と最後の空白を自動的に削除します
				//※xss_cleanとは:クロスサイトスクリプティングを阻止します。
				if($this->form_validation->run()){	//バリデーションエラーがなかった場合の処理
						$data = array(
								"email" => $this->input->post("email"),
								"is_logged_in" => 1
							);
							$this->session->set_userdata($data);
							// $this->session->set_userdata('uid',$result[0]['id']);

						redirect("tweet/main");
						// echo $this->input->post("email");
				}else{							//バリデーションエラーがあった場合の処理
						redirect ("tweet/restricted");
				}
			}

			public function add_tweet()
			{
				$tweet = $this->input->post('a');
				$time = $this->input->post('b');
				$uid = $this->session->userdata('uid');
				$this->load->model('tweetdb');
				$this->tweetdb->add($tweet,$time,$uid);

				$this->load->helper('url');
			 $url = base_url().'index.php/tweet/index';
			 redirect($url);
			}

			public function restricted(){
				$this->load->view("restricted");
			}

			public function logout(){
				$this->session->sess_destroy();		//セッションデータの削除
				redirect ("tweet/login");		//ログインページにリダイレクトする
			}

			public function signup(){
	      $this->load->view("signup");
     }


		 public function signup_validation(){
	 		$this->load->library("form_validation");	//フォームバリデーションのライブラリを読み込む.|maches[password]
	 		$this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[users.email]");
	 		$this->form_validation->set_rules("password", "パスワード", "required|trim");
	 		$this->form_validation->set_rules("cpassword", "パスワードの確認", "required|trim");
	 		$this->form_validation->set_message("is_unique", "入力したメールアドレスはすでに登録されています");
	 		if($this->form_validation->run()){
	 			// echo "Success!!";
	 			//ランダムキーを生成する
	 			$key=md5(uniqid());
	 			//Emailライブラリを読み込む。メールタイプをHTMLに設定（デフォルトはテキストです）
				$configs = array(
					    'protocol'  =>  'smtp',
					    'smtp_host' =>  'ssl://smtp.gmail.com',
					    'smtp_user' =>  'azmindia0717@gmail.com',
					    'smtp_pass' =>  '#azuma0717',
					    'smtp_port' =>  '465',
							"mailtype"  =>  "html"
					);
	 			$this->load->library("email", $configs);
	 			$this->load->model("usersdb");
	 			$this->email->from("azmindia0717@gmail.com", "送信元");		//送信元の情報
				$this->email->to('azmindia0717@gmail.com');	//送信先の設定
				// 	$this->email->to($this->input->post("email"));	//送信先の設定
	 			$this->email->subject("仮の会員登録が完了しました。");	//タイトルの設定
	 			//メッセージの本文
	 			$message = "<p>会員登録ありがとうございます。</p>";
	 			// 各ユーザーにランダムキーをパーマリンクに含むURLを送信する
	 			$message .= "<p><a href=' ".base_url(). "index.php/tweet/resister_user/$key'>こちらをクリックして、会員登録を完了してください。</a></p>";
	 			$this->email->message($message);
	 			//add_temp_usersファンクションがTrueを返したら、メール送信を実行
	 			if($this->usersdb->add_temp_users($key)){
	 				if($this->email->send()){
	 				echo "Message has been sent.";
					echo $this->email->print_debugger();
	 				}else echo "Coulsn't send the message.";
					echo $this->email->print_debugger();
	 			}else echo "problem adding to database";
	 		}else{
	 			echo "You can't pass,,,";
	 			$this->load->view("signup");
	 		}
	 	}

	 	public function validate_credentials(){		//Email情報がPOSTされたときに呼び出されるコールバック機能
	 		$this->load->model("usersdb");
	 		if($this->usersdb->can_log_in()){	//ユーザーがログインできたあとに実行する処理
	 			return true;
	 		}else{					//ユーザーがログインできなかったときに実行する処理
	 			$this->form_validation->set_message("validate_credentials", "ユーザー名かパスワードが異なります。");
	 			return false;
	 		}
	 	}

		public function resister_user($key){
			//add_temp_usersモデルが書かれている、model_uses.phpをロードする
			$this->load->model("usersdb");
			if($this->usersdb->is_valid_key($key)){	//キーが正しい場合は、以下を実行
				// echo "valid key";
				if( $newemail = $this->usersdb->add_user($key)){	//add_usersがTrueを返したら以下を実行
					// echo "success";
					$data = array(
						"email" => $newemail,
						"is_logged_in" => 1
					);
					$this->session->set_userdata($data);
					redirect ("tweet/main");
				}else echo "fail to add user. please try again";
			}else echo "invalid key";
		}

}
