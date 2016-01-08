<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index(){
		$data = $this->mymodel->GetTabel();
		$this->load->view('tabel',array('data'=>$data));
	}
	public function add_data(){
		$this->load->view('form_Add');
	}
	public function do_insert(){
		$kode_konten=$_POST['kode_konten'];
		$judul_konten=$_POST['judul_konten'];
		$harga_konten=$_POST['harga_konten'];
		$isi=$_POST['isi'];
		$kode_kategori=$_POST['kode_kategori'];
		$data_insert=array(
			'kode_konten'=>$user_id,
			'judul_konten'=>$judul_konten,
			'harga_konten'=>$harga_konten,
			'isi'=>$isi,
			'kode_kategori'=>$kode_kategori,
			);
		$res=$this->mymodel->InsertData('konten',$data_insert);
		if($res>=1){
			$this->session->set_flashdata('pesan','Tambah Data Sukses');
			redirect('crud/index');
		}
		else{
			echo "insert gagal";
		}
	}
	public function edit_Data($kode_konten){
		$mhs=$this->mymodel->GetTabel("where kode_konten = '$kode_konten'");
		$data=array(
			"kode_konten"=>$mhs[0]['kode_konten'],
			"judul_konten"=>$mhs[0]['judul_konten'],
			"harga_konten"=>$mhs[0]['harga_konten'],
			"isi"=>$mhs[0]['isi'],
			"kode_kategori"=>$mhs[0]['kode_kategori'],
			""
			);
		$this->load->view('form_edit',$data);
	}

	public function do_delete($kode_konten){
		$where=array('kode_konten'=>$kode_konten);
			$res=$this->mymodel->DeleteData('konten',$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Delete Data Sukses');
				redirect('crud/index');
			}
		}
	public function do_update(){
		$kode_konten=$_POST['kode_konten'];
		$judul_konten=$_POST['judul_konten'];
		$harga_konten=$_POST['harga_konten'];
		$isi=$_POST['isi'];
		$kode_kategori=$_POST['kode_kategori'];
		$data_update=array(
			'kode_kategori'=>$kode_kategori,
			'judul_konten'=>$judul_konten,
			'harga_konten'=>$harga_konten,
			'isi'=>$isi,
			);
		$where=array('kode_konten'=>$kode_konten);
		$res=$this->mymodel->UpdateData('konten',$data_update,$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Update Data Sukses');
			redirect('crud/index');
		}
	}
}
?>
