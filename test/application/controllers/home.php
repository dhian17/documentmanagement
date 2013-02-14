<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ModelAkun');
    }

    function index() {
        

        $isi['isi']='content';
		
		
		$session = $this->ModelAkun->cek_logged();
		
		if($session == 'admin')
		{
			$this->load->view('template_admin',$isi);
		}
		elseif($session == 'mr')
		{
			$this->load->view('template_mr',$isi);
		}
		elseif($session == 'cto')
		{
			$this->load->view('template_cto',$isi);
		}
		elseif($session == 'vp')
		{
			$this->load->view('template_vp',$isi);
		}
		elseif($session == 'staff')
		{
			$this->load->view('template_staff',$isi);
		}
		else
		{
			redirect('login_page');
		}
    }

}