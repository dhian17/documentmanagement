<?php
class Kategori extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('mkategori');
}
function index(){
$this->load->model(array('posts_model','mkategori'));
$data['isi']='list_kategori';
$data['kategori']=$this->mkategori->getkategori();
$this->load->view('template_admin',$data);
}
function tambah(){
$data['isi']='form_kategori';
$this->load->view('template_admin',$data);
}
function submit(){
$this->load->model(array('posts_model','mkategori'));
$kategori=$this->input->post('kategori',TRUE);
$this->mkategori->tambahkategori($kategori);
redirect('kategori');
}
function edit(){
$id=$this->uri->segment(4);
$this->load->model(array('posts_model','mkategori'));
$data['kategori']=$this->mkategori->ambilkategori($id);
$data['isi']='form_edit_kategori';
$this->load->view('template_admin',$data);
}
function edit_submit(){
$this->load->model(array('posts_model','mkategori'));
$id=$this->input->post('id',TRUE);
$kategori=$this->input->post('kategori',TRUE);
$this->mkategori->updatekategori($id,$kategori);
redirect('kategori');
}
function delete(){
$id=$this->uri->segment(4);
$this->load->model(array('posts_model','mkategori'));
$this->mkategori->deletekategori($id);
redirect('kategori');
}
}
?>
