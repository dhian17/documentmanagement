<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_doc extends CI_Controller
{
	
	public function __construct()
	{
	
		parent::__construct();
      $this->load->model('mod_doc');
      $this->load->database();
      $this->load->helper('url');
	
	}
	
	function home(){
	$isi['isi']='tengah';
	$this->load->view('template_admin',$isi);	
	}
	
	function head(){
	$isi['isi']='header';
	$this->load->view('template_admin',$isi);	
	}
	
	function index()
	{
		$isi['isi']='upload';
	$this->load->view('template_admin',$isi);	
		$validasi = array
		(
			array
			(
			'field' => 'no_doc', 'label' => 'No Document', 'rules' => 'required|trim|htmlspecialchars'
			),
			
			array
			(
			'field' => 'judul_doc', 'label' => 'Document Title', 'rules' => 'required|trim|htmlspecialchars'
			),
			
			array
			(
			'field' => 'jenis_doc', 'label' => 'Document Type', 'rules' => 'required|trim|htmlspecialchars|'
			),
			
			array
			(
			'field' => 'kat_doc', 'label' => 'Category', 'rules' => 'required|trim|htmlspecialchars'
			),
			
			array
			(
			'field' => 'versi_doc', 'label' => 'Version', 'rules' => 'required|trim|htmlspecialchars'
			),
			
			array
			(
			'field' => 'tanggal_doc', 'label' => 'Date', 'rules' => 'required|trim|htmlspecialchars'
			),
			
			array
			(
			'field' => 'author', 'label' => 'Author', 'rules' => 'required|trim|htmlspecialchars'
			),
			
			array
			(
			'field' => 'sejarah_revisi', 'label' => 'History', 'rules' => 'required|trim|htmlspecialchars'
			),
		);
	
		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_message('required', 'Input Tidak Boleh Kosong!');
		$this->form_validation->set_message('valid_email', 'Email Anda Tidak Valid!');
		$this->form_validation->set_message('min_length', 'Password Minimal 6 Karakter!');
		$this->form_validation->set_message('matches', 'Password Tidak Sama!');
		$valid = $this->form_validation->run();

		if($valid == TRUE)
		{
			$this->load->model('mod_doc');
			$this->mod_doc->registrasi();
		}
		else
		{
			$this->load->view('document');
		}
	}
	



}

/* End of file registrasi.php */
/* Location: ./application/controllers/registrasi.php */
?>