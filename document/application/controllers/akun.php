<?php

class Akun extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ModelAkun');
    }

    function login() {
        $isi = false;
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            if ($this->ModelAkun->cekUserPass($username, $password)) {
                $config = array(
                    'username' => $username,
                    'login' => true
                );
                $this->session->set_userdata($config);
                $throw['pesan'] = 'Login sukses...';
                $throw['redirect'] = 'home';
                $isi = true;
            } else {
                $throw['pesan'] = 'Username / Password salah...<br/>Silahkan coba lagi...';
                $throw['redirect'] = 'login';
                $isi = true;
            }
        } else {
            $throw['pesan'] = validation_errors();
            $throw['redirect'] = 'login';
            $isi = true;
        }

        $this->load->view('redirect', $throw);
        
        if (!$isi) {
            redirect('login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}