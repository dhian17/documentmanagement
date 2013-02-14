<?php

class ModelAkun extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->model('mkategori');
    }


function login($username, $password)
	{
		
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$admin = $this->db->get('user', 1);

		if($admin->num_rows() > 0)
		{
			$baris = $admin->row();
			$id = $baris->id;
			$level= $baris->level;
			$nama_lengkap = $baris->nama_lengkap;
			$username = $baris->username;
			$password = $baris->password;
			$jabatan = $baris->jabatan;
			$departemen = $baris->departemen;
			$email = $baris->email;
			$mobile = $baris->mobile;
			$phone = $baris->phone;
			$fax = $baris->fax;
			$photo = $baris->photo;
			
			if($password == $password)
			{
				if($level == 1)
				{
					$this->session->set_userdata('admin', $nama_lengkap);
					return TRUE;
				}
				elseif($level == 2)
				{
					$this->session->set_userdata('mr', $nama_lengkap);
					return TRUE;
				}
				elseif($level == 3)
				{
					$this->session->set_userdata('cto', $nama_lengkap);
					return TRUE;
				}
				elseif($level == 4)
				{
					$this->session->set_userdata('vp', $nama_lengkap);
					return TRUE;
				}
				elseif($level == 5)
				{
					$this->session->set_userdata('staff', $nama_lengkap);
					return TRUE;
				}
				else
				{
					echo '<script language="JavaScript">alert("Maaf Anda Tidak Memiliki Akses! \n Kontak Admin Untuk Mengaktifkan Akun Anda!"); window.location = "login";</script>';
					return FALSE;
				}
			}
			else
			{
				echo '<script language="JavaScript">alert("Maaf Username atau Password Salah!"); window.location = "login";</script>';
				return FALSE;
			}
		}
		else
		{
			echo '<script language="JavaScript">alert("Maaf Anda Belum Terdaftar!"); window.location = "login";</script>';
			return FALSE;
		}
	}

	function cek_logged()
	{
		if($this->session->userdata('admin'))
		{
			return 'admin';
		}
		elseif($this->session->userdata('mr'))
		{
			return 'mr';
		}
		elseif($this->session->userdata('cto'))
		{
			return 'cto';
		}
		elseif($this->session->userdata('vp'))
		{
			return 'vp';
		}
		elseif($this->session->userdata('staff'))
		{
			return 'staff';
		}
		else
		{
			return FALSE;
		}
	}

    function cekUserPass($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('user');
        return $query->num_rows() > 0;
    }
    
    function isLogin() {
        return $this->session->userdata('username');
    }


}

?>