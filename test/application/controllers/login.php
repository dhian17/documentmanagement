<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModelAkun');
		$this->session->userdata('username');
    }

    public function index() {
        

        $this->load->view('login_page');
    }

}
