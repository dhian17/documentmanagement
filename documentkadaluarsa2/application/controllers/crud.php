<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('crud_model');
		$this->load->model('mkategori');
    }

	function index()
	{
		$isi['isi']='crud_view';
		$this->load->view('template_admin',$isi);
		$data['cd'] = '';
		$data['cd_row'] = $this->crud_model->read_data();
		
	}
	
	 function home(){
		$isi['isi']='tengah';
		$this->load->view('template_admin',$isi);
	}
	
	function view_file(){
		$data['data_file']=$this->crud_model->tampil_data();
		$data['isi']='crud_view';
		$this->load->view('template_admin',$data);
		
		//$this->load->view('Guest_view',$data);
	}
	
	function edit()
	{
		$kode = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->crud_model->get_data($kode);
		if ($result == null) redirect('crud');
		else $data['cd'] = $result;
		$data['cd_row'] = $this->crud_model->read_data();
		$this->load->view('crud_view', $data);
	}
	
	function delete()
	{   
		$kode = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->crud_model->get_data($kode);
		if ($result == null) redirect('crud');
		else $this->crud_model->delete_data($kode);
	  	redirect('crud/view_file');
	}
	
	function create()
	{
	  	$data = array(
	  		'version' => $this->input->post('versi'),
	  		'hostory' => $this->input->post('histories'),
	  		'tanggal' => $this->input->post('date'),
	  		'type' => $this->input->post('types'),
			'categories' => $this->input->post('category')			
	  	);
	  	$this->crud_model->create_data($data);
	  	redirect('crud');
	}
	
	function update()
	{
		$code = $this->input->post('code');
	  	$data = array(
	  		'version' => $this->input->post('versi'),
	  		'hostory' => $this->input->post('histories'),
	  		'tanggal' => $this->input->post('date'),
	  		'type' => $this->input->post('types'),
			'categories' => $this->input->post('category')		
	  	);
		$this->crud_model->update_data($code,$data);
		redirect('crud');
	}
	
}