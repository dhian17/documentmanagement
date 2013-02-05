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
	
	function suksess(){
	
		$this->load->view('sukses');
	}
	
	function view(){
		$data['data_user']=$this->user_model->tampil_data();
		$data['isi']='view_detail_user';
		$this->load->view('template_admin',$data);
		
		//$this->load->view('Guest_view',$data);
	}
	
	function add()
	{
		$isi['isi']='add_user';
		$this->load->view('template_admin',$isi);
	}
	
	/*function add(){
		$data=array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'jabatan'=>$this->input->post('jabatan'),
			'departemen'=>$this->input->post('departemen'),
			'email'=>$this->input->post('email'),
			'mobile'=>$this->input->post('mobile'),
			'phone'=>$this->input->post('phone'),
			'fax'=>$this->input->post('fax'),
			'photo'=>$this->input->post('photo')
			
		);
		
		//memberikan nilai $data ke class guest_model.php
		$this->user_model->simpan_user($data);

		//membuat session untuk message
		$this->session->set_flashdata('message','<blink>Data berhasil disimpan</blink>');
		
		//jika berhasil panggil halaman view_guest 
		redirect('user/add');	
		
		//$this->load->view('Guest_view',$data);
	}*/
	
	
	function edit_user()
	{
		$id=$this->uri->segment(3);
		$this->load->model('user_model');
		$isi['user']=$this->user_model->ambil_user($id);
		$isi['isi']='view_edit_user';
		$this->load->view('template_admin',$isi);
	}

	function edit_submit_user()
	{
		$this->load->model('user_model');
		$id=$this->input->post('id',TRUE);
		$data=$this->input->post('user',TRUE);
		
		
		$this->user_model->simpan_update($id);
		redirect('user/view');
	}
	
	
	
	/*
	fungsi untuk menyimpan data 
	*/
	function upload(){
		//untuk menangkap nilai post
		$status = "";
   $msg = "";
   $file_element_name = 'userfile';
   
   if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['nama_lengkap']) || empty($_POST['jabatan']) || empty($_POST['departemen']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['phone']) || empty($_POST['fax']))
   {
      $status = "error";
      $msg = "isi yang kosong";
   }
   if ($status != "error")
   {
      $config['upload_path'] = 'files/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = 1024 * 8;
	  $config['encrypt_password'] = TRUE;
	 
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload($file_element_name))
      {
         $status = 'error';
         $msg = $this->upload->display_errors('', '');
      }
      else
      {
         $data = $this->upload->data();
         $id = $this->user_model->simpan_user($data['photo'], $_POST['username'], $_POST['password'], $_POST['nama_lengkap'], $_POST['jabatan'], $_POST['departemen'], $_POST['email'], $_POST['mobile'], $_POST['phone'], $_POST['fax']);
         if($id)
         {
            /*$status = "success";
            $msg = "File successfully uploaded";*/
			set_flash_message('Your document has been successfully uploaded.', 'ok');

                redirect('user/view');
         }
         else
         {
            unlink($data['full_path']);
            $status = "error";
            $msg = "Something went wrong when saving the file, please try again.";
         }
      }
      @unlink($_FILES[$file_element_name]);
   }
  // echo json_encode(array('status' => $status, 'msg' => $msg));
		
			/*$data=array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'jabatan'=>$this->input->post('jabatan'),
			'departemen'=>$this->input->post('departemen'),
			'email'=>$this->input->post('email'),
			'mobile'=>$this->input->post('mobile'),
			'phone'=>$this->input->post('phone'),
			'fax'=>$this->input->post('fax'),
			'photo'=>$this->input->post('photo'));
		
		//memberikan nilai $data ke class guest_model.php
		$this->user_model->simpan_user($data);*/

		//membuat session untuk message
		//$this->session->set_flashdata('message','<blink>Data berhasil disimpan</blink>');
		
		//jika berhasil panggil halaman view_guest 
		//redirect('user/add');	
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
 
		$name = 'cobaaa'; 
		$data = file_get_contents("uploads/Coba.doc"); // filenya
 
		force_download($name,$data);
 
	}
	
}