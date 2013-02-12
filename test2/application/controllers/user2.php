<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class User2 extends CI_Controller {
	var $template = 'template_admin';
	var $imagePath = './uploads/';
	
	function User2()
	{
	  parent::__construct();
      $this->load->model('user_model');
	  $this->load->helper(array('form', 'url'));
       //$this->load->library('image_moo') ;
	  }
	
	function view(){
		$isi['data_user']=$this->user_model->tampil_data();
		$isi['isi']='view_detail_user';
		$this->load->view($this->template, $isi);
		
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

		$this->load->model('user_model');
		$id=$this->input->post('id',TRUE);
		$data=$this->input->post('user',TRUE);
		$this->user_model->simpan_update($id, $params);
		redirect('user2/view');
	}
	$this->edit_user();
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
		$this->register();
        
    }

    

 function hapus_user($id){
		$id=$this->uri->segment(3);
		$this->load->model('user_model');
		$this->user_model->hapus_user($id);
		$this->session->set_flashdata('message','<blink>Data berhasil dihapus</blink>');
		redirect('user2/view');
	}

   
}

?>
