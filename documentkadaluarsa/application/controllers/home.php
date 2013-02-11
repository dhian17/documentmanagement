<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ModelAkun');
    }

    function index() {
        if ($this->session->userdata('username') == false)
            redirect('login_page');

        $isi['isi']='tengah';
		$this->load->view('template_admin',$isi);
		
    }

}