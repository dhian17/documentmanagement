<?php
class Download extends CI_Controller {

 function Download()
 {
 parent::__construct();
 $this->load->helper('download','url');
 $this->load->model('crud_model');

 
 }
 function index()
 {
 $this->load->view('crud_view');
 }


	function files()
{

/*$this->load->model('crud_model');	
$this->load->helper('download');
$name = $this->crud_model->get_files($files);;
$data = file_get_contents("application/views/download/".$name);
force_download($name,$data);
redirect('crud/view_file');*/

$name = "narasi.pdf";
$data = file_get_contents("application/views/download/narasi.pdf");

force_download($name,$data);
	}
 
}
?>