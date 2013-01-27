<?php

class Admin extends Controller {

	function Admin()
	{
		parent::Controller();	
	
	}
	function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->view('tampilan_admin');
		$isi['isi']='tengah';
		$this->load->view('template_admin',$isi);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */