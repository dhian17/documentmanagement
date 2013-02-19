<?php

class User_model extends CI_Model{
	var $table = 'user';
	
	function __construct()
	{
		parent::__construct();
		
	}
	
	function tampil_data(){
		$data_user=$this->db->query("select * from user order by id desc");
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
    function create($params = array()) {
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
				'photo' => ('./uploads/user-icon.jpg'),
                
            );
            $this->db->insert($this->table, $data);
        } else {
            $this->db->insert($this->table, $params);
        }
    }





 function simpan_update($id, $params) {
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
				'photo' => $this->input->post('photo')
				
                
            );

            $this->db->where('id', $id);
            $this->db->update($this->table, $data);
        } else {
            $this->db->where('id', $id);
            $this->db->update($this->table, $params);
        }
    }
	
	function hapus_user($id){
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}

    function destroy($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
?>