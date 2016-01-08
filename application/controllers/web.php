<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index()
	{
		$data = array(
				"contents"=>$this->mymodel->Getkonten()->result_Array()
			);
		$comp = array(
			"slider"=>$this->html_slider(),
			"sidebar"=>$this->html_sidebar(),
			"content"=>$this->load->view("content",$data,true),
			"footer"=>$this->html_footer(),
			);
		$this->load->view("index",$comp);
	}
	public function categori($id){
		$cek=$this->mymodel->GetKategori("where kode_kategori='$id'");
		if($cek->num_rows()>0){
			$data = array(
				"contents"=>$this->mymodel->Getkonten("where kode_kategori='$id'")->result_Array()
			);
		$comp = array(
			"slider"=>$this->html_slider(),
			"sidebar"=>$this->html_sidebar(),
			"content"=>$this->load->view("content",$data,true),
			"footer"=>$this->html_footer(),
			);
		$this->load->view("index",$comp);
		}
		else{
			show_404();
		}
	}
	public function html_slider(){
		$data=array();
		return $this ->load->view("slider",$data,true);
		}
	public function html_sidebar(){
		$data=array(
				"kategoris"=>$this->mymodel->GetKategori()->result_Array(),
			);
		return $this ->load->view("sidebar",$data,true);
		}
	public function html_footer(){
		$data=array();
		return $this ->load->view("footer",$data,true);
		}
	public function Loginadmin(){
		if(isset($_POST['submit'])){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$hasil=$this->mymodel->login($username,$password);
			echo $hasil;
		}
		else{
		$this->load->view('login');
		}
	}
}
