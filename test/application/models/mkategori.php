<?php
class Mkategori extends CI_Model{
function __construct()
{
parent::__construct();
}
function getkategori(){
return $this->db->get('category');
}
function tambahkategori($kategori){
$this->db->insert('category',array('kat_doc'=>$kategori));
}
function ambilkategori($id){
$this->db->where('id',$id);
return $this->db->get('category');
}
function updatekategori($id,$kategori){
$this->db->where('id',$id);
$this->db->update('category',array('kat_doc'=>$kategori));
}
function deletekategori($id){
$this->db->delete('category',array('id'=>$id));
}
}
?>