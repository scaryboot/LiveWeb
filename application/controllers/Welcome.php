<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data = $this->mymodel->GetMahasiswa();
		$this->load->view('tabel',array('data'=>$data));
	}
	public function insert(){
		$res= $this->mymodel->InsertData('mahasiswa',array(
			"nim"=>"07388",
			"nama"=>"Intan Damayanti",
			"alamat"=>"kendal, purin"));

		if($res>=1){
			echo "<h2>Insert data sukses</h2>";
		}
		else{
			echo "<h2>Insert data gagal</h2>";
		}
	}
	public function update(){
		$res= $this->mymodel->UpdateData('mahasiswa',array("alamat"=>"semarang, mugas"),array('nim'=>"07382"));

		if($res>=1){
			echo "<h2>Update data sukses</h2>";
		}
		else{
			echo "<h2>Update data gagal</h2>";
		}
	}
	public function delete(){
		$res= $this->mymodel->DeleteData('mahasiswa',array('nim'=>"07382"));
		if($res>=1){
			echo "<h2>Delete data sukses</h2>";
		}
		else{
			echo "<h2>Delete data gagal</h2>";
		}
	}
	public function panggil(){
		$data=$this->db->get('mahasiswa');
		echo "jumlah data = ".$data->num_rows()."<br/>";
		foreach ($data->result_array() as $row)
		{
		   echo "NIM : ".$row["nim"]."<br/>";
		   echo "Nama : ".$row["nama"]."<br/>";
		   echo "Alamat : ".$row["alamat"]."<br/>";
		   echo "<hr>";
		}
	}
}
