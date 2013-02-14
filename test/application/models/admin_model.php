<?php
class Admin_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
			
		
		function Tampil_File()
		{
			$t=$this->db->query("select * from tbldownload left join tblkategoridownload on 	
			tbldownload.id_kat=tblkategoridownload.id_kategori_download order by id_download DESC");
			return $t;
		}
		function Total_File()
		{
			$t=$this->db->query("select * from tbldownload left join tblkategoridownload on 	
			tbldownload.id_kat=tblkategoridownload.id_kategori_download");
			return $t;
		}
		
    function Kat_Down()
		{
			$kat=$this->db->query("select * from tblkategoridownload order by id_kategori_download DESC");
			return $kat;
		}
		function Simpan_Upload($in)
		{
			
			$kat=$this->db->insert('tbldownload',$in);
			return $kat;
		}
		function Edit_Upload($id)
		{
			$t=$this->db->query("select * from tbldownload left join tblkategoridownload on 	
			tbldownload.id_kat=tblkategoridownload.id_kategori_download where id_download='$id'");
			return $t;
		}
		
		 function Update_Upload($in)
		{
			
			$this->db->where('id_download',$in['id_download']);
			$this->db->update('tbldownload',$in);
		}

		function Delete_Upload($id)
		{
			$this->db->where('id_download',$id);
			$this->db->delete('tbldownload');
		}
		function Simpan_Kat_Download($in)
		{
			$kat=$this->db->insert('tblkategoridownload',$in);
			return $kat;
		}
		function Edit_Kat_Download($id)
		{
			$t=$this->db->query("select * from tblkategoridownload where id_kategori_download='$id'");
			return $t;
		}
		function Update_Kat_Download($in)
		{
			$this->db->where('id_kategori_download',$in['id_kategori_download']);
			$this->db->update('tblkategoridownload',$in);
		}
		function Hapus_Kat_Download($id)
		{
			$this->db->where('id_kategori_download',$id);
			$this->db->delete('tblkategoridownload');
		}
		
	}