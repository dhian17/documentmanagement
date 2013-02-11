<?php
class Upload extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('files_model');
      $this->load->database();
      $this->load->helper('url');
   }
   public function index()
   {
      $isi['isi']='form_upload';
	$this->load->view('template_admin',$isi);
   }
   
   function home(){
		$isi['isi']='tengah';
		$this->load->view('template_admin',$isi);
	}
	
	function view_file(){
		$data['data_file']=$this->files_model->tampil_data();
		$data['isi']='crud_view';
		$this->load->view('template_admin',$data);
		
		//$this->load->view('Guest_view',$data);
	}
   
   public function upload_file()
{
   $status = "";
   $msg = "";
   $file_element_name = 'userfile';
   if (empty($_POST['title']))
   {
      $status = "error";
      $msg = "Please enter a title";
   }
   if ($status != "error")
   {
      $config['upload_path'] = './files/';
      $config['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
      $config['max_size']  = 1024 * 8;
      
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload($file_element_name))
      {
         $status = 'error';
         $msg = $this->upload->display_errors('', '');
      }
      else
      {
         $data = $this->upload->data();
         $file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
         if($file_id)
         {
            $status = "success";
            $msg = "File successfully uploaded";
         }
         else
         {
            unlink($data['full_path']);
            $status = "error";
            $msg = "Something went wrong when saving the file, please try again.";
         }
      }
      @unlink($_FILES[$file_element_name]);
   }
   echo json_encode(array('status' => $status, 'msg' => $msg));
}

public function files()
{
   $files = $this->files_model->get_files();
   $this->load->view('files', array('files' => $files));
}
public function delete_file($file_id)
{
   
		$file_id = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->files_model->tampil_data($file_id);
		if ($result == null) redirect('upload');
		else $this->files_model->delete_file($file_id);
	  	redirect('upload/view_file');
}
}
?>