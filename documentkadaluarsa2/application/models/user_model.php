<?php
class User_model extends CI_Model
	{ 
 		function __construct()
		{
 			parent::__construct();
 		}
	
	//untuk menampilkan data awal
	function tampil_data(){
		$data_user=$this->db->query("select * from user order by id asc");
		return $data_user;
	}
	
	function tampil_data2($id){

	$this->db->select('*');
		$this->db->where('id',$id);
return $this->db->get('user');
		
	}
	
	function ambil_user($id){
		$this->db->where('id',$id);
		return $this->db->get('user');
	}
	//mendefinisikan nama tabel
	var $table="user";
	
	//untuk simpan data
	
		 function create($params = array()) {
        if (empty($params)) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
				'fullname' => $this->input->post('nama_lengkap'),
				'position' => $this->input->post('jabatan'),
				'departemen' => $this->input->post('departemen'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'phone' => $this->input->post('phone'),
				'fax' => $this->input->post('fax'),
				'photo' => $this->input->post('photo')
                
            );
            $this->db->insert($this->table, $data);
        } else {
            $this->db->insert($this->table, $params);
        }
    }

	//untuk update data
	 function simpan_update($id) {
        if (empty($params)) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'jabatan' => $this->input->post('jabatan'),
				'departemen' => $this->input->post('departemen'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'phone' => $this->input->post('phone'),
				'fax' => $this->input->post('fax'),
				
                
            );

            $this->db->where('id', $id);
            $this->db->update($this->table, $data);
        } else {
            $this->db->where('id', $id);
            $this->db->update($this->table, $params);
        }
    }



	
	//untuk hapus data
	function hapus_user($id){
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	
	//cari data saat akan di edit
	function cari_data($id){
		return $this->db->get_where($this->table, array('id' => $id), 1)->row();
	}
}
?>