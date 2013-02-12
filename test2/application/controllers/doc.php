<?php
class Doc extends CI_Controller {
var $template = 'template_admin';
	public function __construct() {
        parent::__construct();
		$this->load->model('mkategori');
		$this->load->helper(array('form','url', 'text_helper','date','file'));
		$this->load->database();
		//$this->load->plugin();
		//session_start();
	}
	
	
	
	
function upload()
	{
		
			$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
			$this->load->model('Admin_model');
			$isi['query']=$this->Admin_model->Tampil_File();
			$isi['isi']='upload';
			$query=$this->Admin_model->Tampil_File();
			$tot_hal = $this->Admin_model->Total_File();
      		$config['base_url'] = base_url() . '/index.php/doc/upload';
       		$config['total_rows'] = $tot_hal->num_rows();
			
			$this->load->view($this->template, $isi);
			}
			
			}
		
	function tambahupload()
	{
		
			$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
			$this->load->model('Admin_model');
			$data["kat"]=$this->Admin_model->Kat_Down();
	   		//$data['scriptmce'] = $this->scripttiny_mce();
			$data['isi']='tambah_upload';
			$this->load->view($this->template, $data);
			
			}
			
			}
			
	function simpanupload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{

		
		$in=array();
			$this->load->model('Admin_model');
			$tgl = " %Y-%m-%d";
			$jam = "%h:%i:%a";
			$time = time();
			$in["tgl_posting"] = mdate($tgl,$time);
			$in["judul_file"]=$this->input->post('judul');
			$in["nomor"]=$this->input->post('nomor_document');
			$in["version"]=$this->input->post('version_document');
			$in["history"]=$this->input->post('history_document');
			$in["type"]=$this->input->post('type_document');
			//$in["author"]=$nim;
			$in["id_kat"]=$this->input->post('kategori');
			//$acak=rand(00000000000,99999999999);
			$bersih=$_FILES['userfile']['name'];
			$nm=str_replace(" ","_","$bersih");
			$pisah=explode(".",$nm);
			$nama_murni=$pisah[0];
			$ubah=$nama_murni; //tanpa ekstensi
			$config["file_name"]=$ubah; //dengan eekstensi
			$in["nama_file"]=$nm;
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'exe|sql|psd|pdf|xls|ppt|php|php4|php3|js|swf|Xhtml|zip|mid|midi|mp2|mp3|wav|bmp|gif|jpg|jpeg|png|html|htm|txt|rtf|mpeg|mpg|avi|doc|docx|xlsx';
			$config['max_size'] = '50000';
			$config['max_width'] = '400';
			$config['max_height'] = '300';						
			$this->load->library('upload', $config);
		
			if(!$this->upload->do_upload())
			{
			 echo $this->upload->display_errors();
			}
			else {
			$this->Admin_model->Simpan_Upload($in);
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/doc/upload'>";
			}

			}
	}
			
	function editupload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
		$datestring = "Login : %d-%m-%Y pukul %h:%i %a";
		$time = time();
		$data = array();
		
		$id='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$id='';
		}
		else
		{
    			$id = $this->uri->segment(3);
		}
		
		
	   	//$data['scriptmce'] = $this->scripttiny_mce();
			
			$this->load->model('Admin_model');
			$data["kategori"]=$this->Admin_model->Edit_Upload($id);
			$data["cur_kat"]=$this->Admin_model->Kat_Down();
			$data["tanggal"] = mdate($datestring, $time);
		
			$this->load->view('edit_upload',$data);
		
			}
			
	}
	function updateupload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
		$in=array();
			$this->load->model('Admin_model');
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'exe|sql|psd|pdf|xls|ppt|php|php4|php3|js|swf|Xhtml|zip|mid|midi|mp2|mp3|wav|bmp|gif|jpg|jpeg|png|html|htm|txt|rtf|mpeg|mpg|avi|doc|docx|xlsx';
			$config['max_size'] = '10000';
			$config['max_width'] = '400';
			$config['max_height'] = '300';
				//$acak=rand(00000000000,99999999999);
				$bersih=$_FILES['userfile']['name'];
				$nm=str_replace(" ","_","$bersih");
				$pisah=explode(".",$nm);
				$nama_murni=$pisah[0];
				$ubah=$nama_murni; //tanpa ekstensi
				$config["file_name"]=$ubah; //dengan eekstensi
				$in2["nama_file"]=$nm;			
			$this->load->library('upload', $config);
		
			if(empty($_FILES['userfile']['name'])){
				$in["judul_file"]=$this->input->post('judul');
				$in["nomor"]=$this->input->post('nomor_documnet');
			$in["version"]=$this->input->post('version_document');
			$in["history"]=$this->input->post('history_document');
			$in["type"]=$this->input->post('type_document');
				$in["id_download"]=$this->input->post('id_download');
				$in["id_kat"]=$this->input->post('kategori');
				$this->Admin_model->Update_Upload($in);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/doc/upload'>";
				
			}
			else{
				if(!$this->upload->do_upload())
				{
			 	echo $this->upload->display_errors();
				}
				else {
				$in2["judul_file"]=$this->input->post('judul');
				$in["nomor"]=$this->input->post('nomor_documnet');
			$in["version"]=$this->input->post('version_document');
			$in["history"]=$this->input->post('history_document');
			$in["type"]=$this->input->post('type_document');
				$in2["id_download"]=$this->input->post('id_download');
				$in2["id_kat"]=$this->input->post('kategori');

				$this->Admin_model->Update_Upload($in2);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/doc/upload'>";
				}
			}
			}
	}
			
	function hapusupload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
		$in=array();
		$id='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$id='';
		}
		else
		{
    			$id = $this->uri->segment(3);
		}
			
			$this->load->model('Admin_model');
			$hapus=$this->Admin_model->Edit_Upload($id);
			foreach($hapus->result() as $t)
			{
				unlink("./upload/$t->nama_file");
			}
			$this->Admin_model->Delete_Upload($id);
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/doc/upload'>";
			
			
	}
	}
	function katdownload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
			$this->load->model('Admin_model');
			$this->load->library('Pagination');
			$data['kategori']=$this->Admin_model->Kat_Down();
			$data['isi']='kat_download';
			$this->load->view($this->template, $data);
	   		//$data['scriptmce'] = $this->scripttiny_mce();
		
		}
	
			
	}
	function tambahkatdownload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
			//$data['scriptmce'] = $this->scripttiny_mce();
			$data['isi']='tambah_kat_download';
			$this->load->view($this->template, $data);
		
		}
			}
			
	function simpankatdownload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
			$this->load->model('Admin_model');
			$in=array();
			$in['nama_kategori_download']=$this->input->post('nama');
			$this->Admin_model->Simpan_Kat_Download($in);
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/doc/katdownload'>";
			}
	}
	function editkatdownload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
		$id='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$id='';
		}
		else
		{
    			$id = $this->uri->segment(3);
		}
			$this->load->model('Admin_model');
			$data['det']=$this->Admin_model->Edit_Kat_Download($id);
	   		//$data['scriptmce'] = $this->scripttiny_mce();
			$data['isi']='edit_kat_download';
			$this->load->view($this->template, $data);
			
		}
			}
			
	function updatekatdownload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
		$in=array();
			$this->load->model('Admin_model');
			$in=array();
			$in['id_kategori_download']=$this->input->post('id_kat');
			$in['nama_kategori_download']=$this->input->post('nama');
			$this->Admin_model->Update_Kat_Download($in);
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/doc/katdownload'>";
		}
	}
	function hapuskatdownload()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
		$id='';		
		if ($this->uri->segment(3) === FALSE)
		{
    			$id='';
		}
		else
		{
    			$id = $this->uri->segment(3);
		}
			$this->load->model('Admin_model');
			$this->Admin_model->Hapus_Kat_Download($id);
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/doc/katdownload'>";
		}
	}
	function logout()
	{
		$this->load->model('modelakun');
		$session = $this->modelakun->cek_logged();
		
		if($session != 'admin')
		{
			$login = site_url() . 'login';
			header("location:$login");
		}
		else
		{
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=".base_url()."'>";
	}
	}
}
?>