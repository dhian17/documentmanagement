<?php
Class Guest_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	//untuk menampilkan data awal
	function tampil_data(){
		$data_guest=$this->db->query("select * from user order by id_gb asc");
		return $data_guest;
	}
	
	
	//mendefinisikan nama tabel
	var $table="user";
	var $table1="comments";
	
	//untuk simpan data
	function simpan_guest($data){
		$this->db->insert($this->table,$data);
	}
	
	//untuk update data
	function simpan_update($id_gb,$data){
		$this->db->where('id_gb', $id_gb);
		$this->db->update($this->table, $data);
	}
	
	//untuk hapus data
	function hapus_guest($id){
		$this->db->where('id',$id);
		$this->db->delete($this->table1);
	}
	
	//cari data saat akan di edit
	function cari_data($id_gb){
		return $this->db->get_where($this->table, array('id_gb' => $id_gb), 1)->row();
	}
}
?>