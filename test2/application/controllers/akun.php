<?php

class Akun extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ModelAkun');
		$this->load->model('mkategori');
    }

    function login() {
        $isi = false;
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		$valid = $this->form_validation->run();
		
		if($valid == TRUE)
		{
			
			$username = $this->input->post('username');
            $password = md5($this->input->post('password'));
			
			if($this->ModelAkun->login($username, $password))
			{
				$this->load->model('ModelAkun');
				$session = $this->ModelAkun->cek_logged();
				$throw['pesan'] = 'Login sukses...';
                $throw['redirect'] = 'home';
                $isi = true;
				
			}
			else
			{
				$throw['pesan'] = 'Username / Password salah...<br/>Silahkan coba lagi...';
                $throw['redirect'] = 'login';
                $isi = true;
			}
		}
		else
		{
			$throw['pesan'] = validation_errors();
            $throw['redirect'] = 'login';
            $isi = true;
		}
		 $this->load->view('redirect', $throw);
        
        if (!$isi) {
            redirect('login');
        }

    }

function index()
	{
		$validasi = array
		(
			array
			(
			'field' => 'username', 'label' => 'Nama Login Admin', 'rules' => 'required|trim|htmlspecialchars'
			),
			array
			(
			'field' => 'password', 'label' => 'Password Admin', 'rules' => 'required|trim|htmlspecialchars'
			),
		);
	
		$this->form_validation->set_rules($validasi);
		$this->form_validation->set_message('required', 'Fieldnya Diisi Dong Tant!');
		$valid = $this->form_validation->run();

		if($valid == TRUE)
		{
			$this->load->model('modelakun');
			$login_array = array($this->input->post('username'), md5(sha1($this->input->post('password'))));
			
			if($this->modelakun->login($login_array))
			{
				$this->load->model('modelakun');
				$session = $this->modelakun->cek_logged();
		
				
			}
			else
			{
				$this->load->view('login_page');
			}
		}
		else
		{
			$this->load->view('login_page');
		}
	}



    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}