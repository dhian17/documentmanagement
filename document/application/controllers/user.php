<?php

class User extends CI_Controller {

	function User()
	{
	  parent::__construct();
      $this->load->model('user_model');
      $this->load->database();
      $this->load->helper('url');
	}
	function home(){
	$isi['isi']='tengah';
	$this->load->view('template_admin',$isi);	
	}
	
	function view(){
		$data['data_user']=$this->user_model->tampil_data();
		$data['isi']='view_user';
		$this->load->view('template_admin',$data);
		
		//$this->load->view('Guest_view',$data);
	}
	
	
	function edit_user(){
		$data['data_user']=$this->user_model->tampil_data();
		$data['isi']='edit_user';
		$this->load->view('template_admin',$data);
	}
	
	/*
	fungsi untuk menyimpan data 
	*/
	function simpan_guest(){
		//untuk menangkap nilai post
		$data=array(
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'pesan'=>$this->input->post('pesan')
		);
		
		//memberikan nilai $data ke class guest_model.php
		$this->Guest_model->simpan_guest($data);

		//membuat session untuk message
		$this->session->set_flashdata('message','<blink>Data berhasil disimpan</blink>');
		
		//jika berhasil panggil halaman view_guest 
		redirect('user/view_user');	
	}
	
	/*
	fungsi untuk menghapus data
	*/
	function hapus_user($id){
		$id=$this->uri->segment(3);
		$this->load->model('user_model');
		$this->user_model->hapus_user($id);
		$this->session->set_flashdata('message','<blink>Data berhasil dihapus</blink>');
		redirect('user/view');
	}
	
	//fungsi download
	public function download(){ 
 
		$this->load->helper('download');
 
		$name = 'ip.jpg'; 
		$data = file_get_contents("uploads/ip.jpg"); // filenya
 
		force_download($name,$data);
 
	}
	
}