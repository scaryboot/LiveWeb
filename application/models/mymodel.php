<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetTabel($where=""){
		$data=$this->db->query('select * from konten '.$where);
		return $data->result_array();
	}
	public function GetKategori($where=""){
		$data=$this->db->query('select * from kategori '.$where);
		return $data;
	}
	public function GetKonten($where=""){
		$data=$this->db->query('select * from konten '.$where);
		return $data;
	}
	public function InsertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}
	public function UpdateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}
	public function DeleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
	}
	public function login($username,$password){
		$chek=$this->db->get_where('tb_login',array('user_name'=>$username,'password'=>$password));
		if($chek->num_rows()>0){
			return redirect('crud/index');
		}
		else{
			return 0;
		}
	}
}
