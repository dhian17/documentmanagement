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
	
	//mendefinisikan nama tabel
	var $table="user";
	
	//untuk simpan data
	function simpan_user($data){
		$this->db->insert($this->table,$data);
	}
	
	//untuk update data
	function simpan_update($id,$data){
		$this->db->where('id', $id);
		$this->db->update($this->table, $data);
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