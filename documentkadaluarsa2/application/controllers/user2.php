<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class User2 extends CI_Controller {
	var $template = 'template_admin';
	var $imagePath = 'files';
	
	function User2()
	{
	  parent::__construct();
      $this->load->model('user_model');
      $this->load->database();
      $this->load->helper('url');
	}
	
    function index($page = null) {

      
        $data['content'] = 'index';
        $this->load->view($this->template, $data);
    }
	function view(){
		$data['data_user']=$this->user_model->tampil_data();
		$data['isi']='view_detail_user';
		$this->load->view($this->template, $data);
		
	}
	function view_each(){
		$id=$this->uri->segment(3);
		$this->load->model('user_model');
		$data['data_user']=$this->user_model->tampil_data2($id);
		$data['isi']='view_each_user';
		$this->load->view($this->template, $data);
		
	}
	function register($page = null)
	{
		$isi['isi']='add1';
		$this->load->view($this->template, $isi);
	}
	
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
		redirect('user2/view');
	}
    function add() {

        $this->form_validation->set_rules('username', 'username',  'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]|max_lengt[32]');
		$this->form_validation->set_rules('nama_lengkap', 'Full name', 'trim|required|min_length[4]|max_lengt[100]');
		$this->form_validation->set_rules('jabatan', 'Position', 'trim|required|min_length[2]|max_lengt[20]');
		$this->form_validation->set_rules('departemen', 'Department', 'trim|required|min_length[2]|max_lengt[20]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('mobile', 'mobile', 'trim|required|numeric');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric');
		$this->form_validation->set_rules('fax', 'fax', 'trim|required|numeric');
	
        $this->form_validation->set_error_delimiters('', '<br/>');
        
        if ($this->form_validation->run() == TRUE) {

            $params = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'jabatan' => $this->input->post('jabatan'),
				'departemen' => $this->input->post('departemen'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'phone' => $this->input->post('phone'),
				'fax' => $this->input->post('fax'),
				
                
                
            );
            if ($_FILES['photo']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = '200000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("photo")) {
                    $photo = $this->upload->data();
                    $params['photo'] = $this->imagePath . $photo['file_name'];
                }
            }

            $this->user_model->create($params);
            $this->session->set_flashdata('success', 'Post created');
            redirect('user2/view');
        }
		else{
		$this->register();
        $data['content'] = 'add1';
        $this->load->view($this->template, $data);
		}
    }

    function edit($id = null) {

        if ($id == null) {
            $id = $this->input->post('id');
        }
        $this->form_validation->set_rules('title', 'title', 'required|xss_clean');
        $this->form_validation->set_rules('body', 'body', 'required|xss_clean');
        $this->form_validation->set_rules('categories_id', 'category', 'required|xss_clean');
        $this->form_validation->set_rules('status', 'status', 'required|xss_clean');
        $this->form_validation->set_error_delimiters('', '<br/>');
        if ($this->form_validation->run() == TRUE) {

            $params = array(
                'title' => $this->input->post('title'),
                'permalink' => url_title($this->input->post('title')),
                'body' => $this->input->post('body'),
                'categories_id' => $this->input->post('categories_id'),
                'status' => $this->input->post('status'),
                'users_id' => $this->session->userdata('id'),
                'created' => date("Y-m-d H:i:s")
            );
            if ($_FILES['image']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = '200000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("image")) {
                    $image = $this->upload->data();
                    $params['image'] = $this->imagePath . $image['file_name'];
                }
            }

            $this->Posts_model->update($id, $params);
            $this->session->set_flashdata('success', 'Post edited');
            redirect('admin/posts');
        }

        $data['post'] = $this->Posts_model->findById($id);
        $data['categories'] = $this->Categories_model->findList();
        $data['status'] = $this->status;
        $data['content'] = 'admin/posts/edit';
        $this->load->view($this->template, $data);
    }

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

?>
