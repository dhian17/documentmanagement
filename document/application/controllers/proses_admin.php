<?php

class Proses_admin extends CI_Controller{
	
	/*ini adalah konstruktor. yag digunakan untuk memberikan nilai awal pada variabel
	atau untuk melakukan proses saat sebuah kelas di load. konstraktor tidak dapat mengembalikan nilai
	tapi dapat mengerjakan suatu proses
	*/
	function __construct() {
        parent::__construct();
		$this->load->model('Guest_model','',TRUE);
	}
	
	function input_guest(){
		$isi['isi']='input_guest';
		$this->load->view('template_admin',$isi);
	}
	/*
	fungsi index sebagai fungsi default yang akan selalu dipanggil 
	jika pada URL tidak didefinisikan segment fungsinya
	*/
	
	/*
	fungsi yang dipanggil untuk menampilkan halaman utama
	*/
	
	//untuk menampilkan isi
	function view_guest(){
		$data['data_guest']=$this->Guest_model->tampil_data();
		$data['isi']='view_guest';
		$this->load->view('template_admin',$data);
		
		//$this->load->view('Guest_view',$data);
	}
	
	//untuk menampilkan isi dan menambahkan link edit dan delete
	function edit_guest(){
		$data['data_guest']=$this->Guest_model->tampil_data();
		$data['isi']='edit_guest';
		$this->load->view('template_admin',$data);
	}
	
	/*
	fungsi untuk menyimpan data 
	*/
	function simpan_guest(){
		//untuk menangkap nilai post
		$data=array(
			'username'=>$this->input->post('username'),
			
			'password'=>md5($this->input->post('password'))
		);
		
		//memberikan nilai $data ke class guest_model.php
		$this->Guest_model->simpan_guest($data);

		//membuat session untuk message
		$this->session->set_flashdata('message','<blink>Data berhasil disimpan</blink>');
		
		//jika berhasil panggil halaman view_guest 
		redirect('proses_admin/view_guest');	
	}
	
	/*
	fungsi untuk menghapus data
	*/
	function hapus_guest($id_gb){
		$this->Guest_model->hapus_guest($id_gb);
		$this->session->set_flashdata('message','<blink>Data berhasil dihapus</blink>');
		redirect('proses_admin/edit_guest');
	}
	
	/*
	fungsi untuk mengedit data
	*/
	function tampil_edit($id_gb){
		$guest = $this->Guest_model->cari_data($id_gb);

		$data['gb']['id_gb'] 	= $guest->id_gb;		
		$data['gb']['username']		= $guest->username;	
			
		$data['gb']['password']	= $guest->password;	
		$data['isi']='tampil_edit';
		
		$this->load->view('template_admin',$data);
	}
	
	/*
	fungsi untuk mengupdate data
	*/
	function update_guest(){
		$id_gb=$this->input->post('id_gb');
		
		$data=array(
			'username'  =>$this->input->post('username'),
			
			'password' =>md5($this->input->post('password'))
		);
		
		$this->Guest_model->simpan_update($id_gb,$data);	
		$this->session->set_flashdata('message','<blink>Data berhasil diubah</blink>');
		redirect('proses_admin/edit_guest');
	}
}

?>