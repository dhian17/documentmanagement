<?php
class Home1 extends CI_Controller{
function __cosntruct(){
parent::__construct();

$this->load->model(array('posts_model','categories_model'));
}
function index(){
	
$this->load->model(array('posts_model','categories_model'));
$data['isi']='content'; 
$data['posts']=$this->posts_model->findAll();

$this->load->view('template_admin',$data); 
}

function selengkapnya(){
$id=$this->uri->segment(3);
$data['isi']='content';
$data['posts']=$this->posts_model->selengkapnya($id);
$this->load->view('template_admin',$data);
}
function perkategori(){
	
$this->load->model(array('posts_model','categories_model'));
$id=$this->uri->segment(3);
$data['isi']='selengkapnyaa';
$data['posts']=$this->posts_model->selengkapnyaa($id);
$this->load->view('template_admin',$data);
}
function perkategori_vp(){
	
$this->load->model(array('posts_model','categories_model'));
$id=$this->uri->segment(3);
$data['isi']='selengkapnyaa';
$data['posts']=$this->posts_model->selengkapnyaa($id);
$this->load->view('template_vp',$data);
}
function perkategori_staff(){
	
$this->load->model(array('posts_model','categories_model'));
$id=$this->uri->segment(3);
$data['isi']='selengkapnyaa_staff';
$data['posts']=$this->posts_model->selengkapnyaa($id);
$this->load->view('template_staff',$data);
}


function getberitakategori($id){
$this->db->where('categories_id',$id);
$this->db->order_by('id','desc');
$q=$this->db->get('posts');
return $q;
}


}
?>