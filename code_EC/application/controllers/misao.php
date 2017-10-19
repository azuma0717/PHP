<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Misao extends CI_Controller {


	public function index()
	{
		// $this->load->viewは、インクルードを表している。
		$this->load->view('header');
		$this->load->view('main-pic');
		// ↓つなげるDBの情報をここでインクルードする。
		$this->load->model('product');
		// ↓data['allitem'] は好きな名前のアレイ。にファンクションを呼び出して格納する。
		$data['allitem'] = $this->product->show_allitems();
		// ↓main-menuファイルに、DBデータを使えるように変数＄dataを指定。
		$this->load->view('main-menu',$data);
		$this->load->view('footer');
	}

	public function item()
	 {
	   $iid = $this->input->get('id');
		 $cat = $this->input->get('cat');
		$this->load->model('product');
		$data['catitem'] = $this->product->show_catitem($cat);
		// echo'<pre>';
		// print_r($data['catitem']);
		// echo'</pre>';
		$data['oneitem'] = $this->product->show_oneitem($iid);
		$this->load->view('header');
		$this->load->view('item',$data);
		$this->load->view('footer');
	}

	public function addtocart()
	{
		$this->input->post();
		// Array ( [quantity] => 1 [iid] => 1 [iname] => bacelet [price] => 600 [category] => Accesasories [file] => img/1.jpg )
		 $a = $_POST['iid'];
		 $b = $_POST['iname'];
		 $c = $_POST['price'];
		 $d = $_POST['quantity'];
		 $e = $_POST['category'];
		 $f = $_POST['file'];
		 $x = $this->session->userdata('uid');

		$this->load->model('product');
		$data['addtocart'] = $this->product->add($a,$b,$c,$d,$e,$f,$x);
		$this->load->helper('url');
	  $url = base_url().'index.php/misao/index';
		redirect($url);
	}

	public function signup()
	{
		$this->input->post();
		$a = $_POST['name'];
		$b = $_POST['pass'];
		$c = $_POST['phone'];
		$d = $_POST['email'];
		$e = $_POST['dob'];
		$f = $_POST['gender'];

		if(isset($_POST['signup'])){
			// $this->form_validation->set_rules('name','Name','required');
			//
			// 	if($this->form_validation->run()==TRUE){
			// 		echo "form validated";
			// 	}
		}
		$this->load->model('user_models');
		$data['signup'] = $this->user_models->signup($a,$b,$c,$d,$e,$f);
		// $this->session->set_flashdata("success","success your register");
		$this->load->helper('url');
		$url = base_url().'index.php/misao/index';
		redirect($url);
	}


public function login()
{
	$this->input->post();
	$a = $_POST['name'];
	$b = $_POST['pass'];


	if(isset($_POST['login'])){
		// $this->form_validation->set_rules('name','Name','required');
		//
		// 	if($this->form_validation->run()==TRUE){
		// 		echo "form validated";
		// 	}
	}
	$this->load->model('user_models');
	$data = $this->user_models->login($a,$b);
	$result = $data->result_array();
	// print_r($result);
	// $this->session->set_flashdata("success","success your register");

	if($data->num_rows() == 1){	//ユーザーが存在した場合の処理
		  $this->session->set_userdata('uid',$result[0]['id']);
			$this->session->set_userdata('uname',$result[0]['name']);
			$this->session->set_userdata('uphone',$result[0]['phone']);
			$this->session->set_userdata('udob',$result[0]['birthday']);
			$this->session->set_userdata('uemail',$result[0]['email']);
		 $this->load->helper('url');
	 	$url = base_url().'index.php/misao/index';
	 	redirect($url);
	}

}

public function logout()
{
	$this->session->sess_destroy();
	$this->load->helper('url');
	$url = base_url().'index.php/misao/index';
	redirect($url);
}

public function cart()
{
    $a = $this->session->userdata('uid');
	 $this->load->model('product');
	 $data['ucart'] = $this->product->ucart($a);
	 $data['catitem'] = $this->product->show_allitems();

		$this->load->view('header');
		$this->load->view('cart',$data);
		$this->load->view('footer');
}
public function delete()
{
	  $diid = $this->input->get('diid');
		$this->load->model('product');
		$data['delete'] = $this->product->delete($diid);

		$this->load->helper('url');
	 	$url = base_url().'index.php/misao/cart';
	 	redirect($url);
}

public function buy()
{
$this->load->view('header');
$this->load->view('buy');
$this->load->view('footer');
}
}
