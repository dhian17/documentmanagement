<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Posts extends CI_Controller {

    var $template = 'template_admin';
    var $imagePath = 'public/media/posts/';
    

    function __construct() {
        parent::__construct();
       $this->load->model('modelakun');
        $this->load->model('Posts_model');
        $this->load->model('mkategori');
    }

    function index($page = null) {
	
		
        $this->load->library('pagination');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $this->Posts_model->countAll();
        $config['per_page'] = 10;
        $config['base_url'] = base_url() . 'admin/posts/index/';

        if ($this->input->get('q')):
            $q = $this->input->get('q');
            $data['posts'] = $this->Posts_model->findAll($config['per_page'], $this->uri->segment(4), $q);
            if (empty($data['posts'])) {
                $this->session->set_flashdata('error', 'Data tidak ditemukan');
                redirect('posts/index');
            }
            $config['total_rows'] = count($data['posts']);
        else:
            $data['posts'] = $this->Posts_model->findAll($config['per_page'], $this->uri->segment(4));
        endif;
        $this->pagination->initialize($config);
        //$data['status'] = $this->status;
		
        $data['pagination'] = $this->pagination->create_links();
        $data['isi'] = 'admin/posts/index';
        $this->load->view($this->template, $data);
    }
function view_each(){
		$id=$this->uri->segment(3);
		$this->load->model('posts_model');
		$data['data_doc']=$this->posts_model->tampil_doc($id);
		$data['isi']='view_each_doc';
		$this->load->view($this->template, $data);
		
	}	

    function add() {
		
		$this->load->model(array('posts_model','mkategori'));
		
		

        $this->form_validation->set_rules('title', 'title', 'required|xss_clean');
        $this->form_validation->set_rules('nomor', 'nomor', 'required|xss_clean');
        $this->form_validation->set_rules('version', 'vesrion', 'required|xss_clean');
        $this->form_validation->set_rules('history', 'history', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'type', 'required|xss_clean');
		$this->form_validation->set_rules('id_kategori', 'kategori', 'required|xss_clean');          
       // $this->form_validation->set_rules('categories_id', 'category', 'required|xss_clean');
        //$this->form_validation->set_rules('status', 'status', 'required|xss_clean');
        $this->form_validation->set_error_delimiters('', '<br/>');
        if ($this->form_validation->run() == TRUE) {

            $params = array(
                'title' => $this->input->post('title'),
                //'permalink' => url_title($this->input->post('title')),
                'nomor' => $this->input->post('nomor'),
				'version' => $this->input->post('version'),
				'history' => $this->input->post('history'),
				'type' => $this->input->post('type'),
				'id_kategori' => $this->input->post('id_kategori'),
                //'categories_id' => $this->input->post('categories_id'),
                //'status' => $this->input->post('status'),
                'users_id' => $this->session->userdata('id'),
                'created' => date("Y-m-d H:i:s")
            );
            if ($_FILES['image']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'jpg|png|jpeg|gif|doc|docx';
                $config['max_size'] = '200000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("image")) {
                    $image = $this->upload->data();
                    $params['image'] = $image['file_name'];
                }
            }

            $this->Posts_model->create($params);
            $this->session->set_flashdata('success', 'Post created');
            redirect('posts');
        }
        $data['kategori'] = $this->mkategori->getkategori();
        //$data['status'] = $this->Posts_model->status;
        $data['isi'] = 'admin/posts/add';
        $this->load->view($this->template, $data);
    }
	

    function edit($id = null) {
		
		$this->load->model(array('posts_model','mkategori'));
        if ($id == null) {
            $id = $this->input->post('id');
        }
        $this->form_validation->set_rules('title', 'title', 'required|xss_clean');
        $this->form_validation->set_rules('nomor', 'nomor', 'required|xss_clean');
        $this->form_validation->set_rules('version', 'vesrion', 'required|xss_clean');
        $this->form_validation->set_rules('history', 'history', 'required|xss_clean');
		$this->form_validation->set_rules('type', 'type', 'required|xss_clean');
		$this->form_validation->set_rules('id_kategori', 'kategori', 'required|xss_clean');   
       // $this->form_validation->set_rules('categories_id', 'category', 'required|xss_clean');
        //$this->form_validation->set_rules('status', 'status', 'required|xss_clean');
        $this->form_validation->set_error_delimiters('', '<br/>');
        if ($this->form_validation->run() == TRUE) {

            $params = array(
                'title' => $this->input->post('title'),
                //'permalink' => url_title($this->input->post('title')),
                'nomor' => $this->input->post('nomor'),
				'version' => $this->input->post('version'),
				'history' => $this->input->post('history'),
				'type' => $this->input->post('type'),
				'id_kategori'=>$this->input->post('kategori'),
                //'categories_id' => $this->input->post('categories_id'),
                //'status' => $this->input->post('status'),
                'users_id' => $this->session->userdata('id'),
                'created' => date("Y-m-d H:i:s")
            );
            if ($_FILES['image']['error'] != 4) {
                $config['upload_path'] = $this->imagePath;
                $config['allowed_types'] = 'jpg|png|jpeg|gif|doc|docx';
                $config['max_size'] = '200000';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("image")) {
                    $image = $this->upload->data();
                    $params['image'] =$image['file_name'];
                }
            }

            $this->Posts_model->update($id, $params);
            //$this->session->set_flashdata('success', 'Post edited');
            redirect('posts');
        }
		
        $data['posts'] = $this->Posts_model->findById($id);
        $data['kategori'] = $this->mkategori->getkategori();
        //$data['status'] = $this->status;
        $data['isi'] = 'admin/posts/edit';
        $this->load->view($this->template, $data);
    }

    function delete($id = null) {
		
        if ($id == null) {
            $this->session->set_flashdata('error', 'Invalid post');
            redirect('posts');
        } else {
            $post = $this->Posts_model->findById($id);
            if (file_exists($post['image'])) {
                unlink($post['image']);
            }
            $this->Posts_model->destroy($id);
            $this->session->set_flashdata('success', 'Post deleted');
            redirect('posts');
        }
    
	}
}

?>
