<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raj extends CI_Controller {


	public function index()
	{
		$this->load->view('first');
	}

	public function home()
	{
		$this->load->view('first');
	}

	public function add()
	{
		// echo "yuki";
		$name =$this->input->post('name');
		$phone =$this->input->post('phone');
		$password =$this->input->post('password');
		$email =$this->input->post('email');
		$this->load->model('userinfo');
		$this->userinfo->yuki($name,$phone,$password,$email);
		//echo $name.$phone.$password.$email;
	}
}
