<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {
	private $table_name; 
	
	public function __construct()
	{
		parent::__construct();
		$this->table_name = 'cd';
	}

	function create_data($data)
	{
	  	$this->db->insert($this->table_name, $data);
	  	if($this->db->affected_rows() > 0){
			return true;
		} else{
			return false;
		}
	}
	
	function tampil_data(){
		$data_file=$this->db->query("select * from cd order by kode_cd asc");
		return $data_file;
	}
	
	function read_data()
	{
		$sql = $this->db->get($this->table_name);
	  	if($sql->num_rows() > 0){			
			foreach($sql->result() as $row){
				$data[] = $row;
			}			
			return $data;
		} else {
			return null;
		}
	}
	
	function update_data($kode,$data)
	{
	  	$this->db->where('kode_cd', $kode);
	  	$this->db->update($this->table_name, $data);
	  	if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	function delete_data($kode)
	{
	  	$this->db->where('kode_cd', $kode);
	  	$this->db->delete($this->table_name);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}	  	
	}
	
	function get_data($kode){
		$this->db->where('kode_cd', $kode);
		$query = $this->db->get($this->table_name);
		if($query->num_rows() > 0){
			return $query->row();
		}
		else{
			return null;
		}
	}
	
	function get_files($files){
		$this->db->where('version', $files);
		$query = $this->db->get($this->table_name);
		if($query->num_rows() > 0){
			return $query->row();
		}
		else{
			return null;
		}
	}	
			
	
}