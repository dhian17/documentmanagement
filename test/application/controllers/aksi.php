<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aksi extends CI_Controller
{
	function index()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session == 'admin')
		{
			$this->load->view('template_admin');
		}
		elseif($session == 'mr')
		{
			$this->load->view('template_mr');
		}
		elseif($session == 'cto')
		{
			$this->load->view('template_cto');
		}
		elseif($session == 'vp')
		{
			$this->load->view('template_vp');
		}
		elseif($session == 'staff')
		{
			$this->load->view('template_staff');
		}
		else
		{
			header('location:./login');
		}
	}
}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */
