<?php
class Home1 extends CI_Controller{
function __cosntruct(){
parent::__construct();
//$this->load->model(array('mberita','mkomentar'));
//$this->load->scaffolding('berita');
$this->load->model(array('posts_model','mkategori'));
}
function index(){
	
$this->load->model(array('posts_model','mkategori'));
//$data['title']='Kota Wisata Batu'; //$title di view
$data['isi']='content'; //akan kita buat file content.php di view
$data['posts']=$this->posts_model->getpost();
//$data['footer']='@denny_umm'; //$footer di view
$this->load->view('template_admin',$data); //load ke view template.php dengan beban $data
}

function selengkapnya(){
$id=$this->uri->segment(3);
//$data['title']='Kota Wisata Batu';
$data['isi']='content';
$data['posts']=$this->posts_model->selengkapnya($id);
//$data['komentar']=$this->mkomentar->liskoment($id);
//$data['footer']='@denny_umm';
$this->load->view('template_admin',$data);
}
function perkategori(){
	
$this->load->model(array('posts_model','mkategori'));
$id=$this->uri->segment(3);
//$data['title']='Kota Wisata Batu';
$data['isi']='selengkapnyaa';
$data['posts']=$this->posts_model->selengkapnyaa($id);
//$data['komentar']=$this->mkomentar->liskoment($id);
//$data['footer']='@denny_umm';
$this->load->view('template_admin',$data);
}

/*function addkoment(){
$id_berita=$this->input->post('id',TRUE);
$nama=$this->input->post('nama',TRUE);
$email=$this->input->post('email',TRUE);
$website=$this->input->post('website',TRUE);
$koment=$this->input->post('komentar',TRUE);
$this->mkomentar->addkoment($id_berita,$nama,$email,$website,$koment);
redirect('home/selengkapnya/'.$id_berita,'refresh');
}*/

function getberitakategori($id){
$this->db->where('id_kategori',$id);
$this->db->order_by('id','desc');
$q=$this->db->get('posts');
return $q;
}


/*function perpage(){
$id=$this->uri->segment(3);
//$data['title']='Kota Wisata Batu';
$data['content']='selengkapnyaaa';
$data['berita']=$this->mberita->selengkapnyaaa($id);
$data['komentar']=$this->mkomentar->liskoment($id);
//$data['footer']='@denny_umm';
$this->load->view('template',$data);
}

function getberitapage($id_page){
$this->db->where('id_page',$id_page);
$this->db->order_by('id','desc');
$q=$this->db->get('berita');
return $q;
}*/
}
?>