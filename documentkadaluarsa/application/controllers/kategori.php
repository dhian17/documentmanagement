<?php
class Kategori extends CI_Controller
{

	function Kategori()
	{
	  parent::__construct();
      $this->load->model('mkategori');
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
		$this->load->model(array('mkategori'));
		$isi['isi']='list_kategori';
		$isi['kategori']=$this->mkategori->getkategori();
	    $this->load->view('template_admin',$isi);	
	}

	function tambah()
	{
		$isi['isi']='form_kategori';
		$this->load->view('template_admin',$isi);
	}

	function submit()
	{
		$this->load->model('mkategori');
		$kategori=$this->input->post('category',TRUE);
		$this->mkategori->tambahkategori($kategori);
		redirect('kategori');
	}
	
	function edit()
	{
		$id=$this->uri->segment(3);
		$this->load->model('mkategori');
		$isi['kategori']=$this->mkategori->ambilkategori($id);
		$isi['isi']='form_edit_kategori';
		$this->load->view('template_admin',$isi);
	}

	function edit_submit()
	{
		$this->load->model('mkategori');
		$id=$this->input->post('id',TRUE);
		$kategori=$this->input->post('category',TRUE);
		$this->mkategori->updatekategori($id,$kategori);
		redirect('kategori');
	}
	
	function delete()
	{
		$id=$this->uri->segment(3);
		$this->load->model('mkategori');
		$this->mkategori->deletekategori($id);
		redirect('kategori');
	}
}
?>
