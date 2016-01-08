<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data=$this->mymodel->Getkonten();
		$this->load->view("index",array('data'=>$data));
	}
	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}
	public function Loginadmin(){
		if(isset($_POST['submit'])){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$passwordx =md5($password);
			$hasil=$this->mymodel->login($username,$passwordx);
			echo $hasil;
		}
		else{
		$this->load->view('login');
	}
	}
}
?>