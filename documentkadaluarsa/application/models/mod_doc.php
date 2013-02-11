<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_doc extends CI_Model
{
	function registrasi()
	{
		$id_doc = $this->input->post('id_doc');
		$no_doc = $this->input->post('no_doc');
		$judul_doc = $this->input->post('judul_doc');
		$jenis_doc = $this->input->post('jenis_doc');
		$kat_doc = $this->input->post('kat_doc');
		$versi_doc = $this->input->post('versi_doc');
		$tanggal_doc = $this->input->post('tanggal_doc');
		$author = $this->input->post('author');
		$sejarah_revisi = $this->input->post('sejarah_revisi');

		$data = array
		(
			'id_doc' => $id_doc, 'no_doc' => $no_doc, 'judul_doc' => $judul_doc, 'jenis_doc' => $jenis_doc, 'kat_doc' => $kat_doc, 'versi_doc' => $versi_doc, 'tanggal_doc' => $tanggal_doc, 'author' => $author, 'sejarah_revisi' => $sejarah_revisi
		);

		$this->db->insert('document', $data);

		$perubahan = $this->db->affected_rows();

		if($perubahan)
		{
			echo '<script language="JavaScript">alert("Selamat Tant Anda Sudah Terdaftar!"); window.location = "login";</script>';
		}
		else
		{
			echo '<script language="JavaScript">alert("Maaf Tant Anda Gagal Registrasi!"); window.location = "document";</script>';
		}
	}
}

/* End of file mod_registrasi.php */
/* Location: ./application/models/mod_registrasi.php */
