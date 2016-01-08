<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data=$this->mymodel->Getkonten();
		$this->load->view("index",array('data'=>$data));
	}
	public function Loginadmin(){
		$this->load->view('login');
	}

}
?>