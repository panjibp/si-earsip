<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class SKPD_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function daftarSKPD()
	{
		$this->db->select('*');
		$this->db->from('tbl_skpd');
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanSKPD($data)
	{
		$this->db->insert('tbl_skpd', $data);
		if ($this->db->affected_rows()==1) {
			return true;
		} else {
			return false;
		}
	}

	public function editSKPD($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_skpd');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function prosesEditSKPD($id, $data)
	{
		$this->db->update('tbl_skpd', $data, 'id = '.$id);
		if ($this->db->affected_rows()=='1') {
			return true;
		} else {
			return false;
		}
	}

	public function hapusSKPD($data)
	{
		$tables = array('tbl_skpd');
		$this->db->where('id', $data);
		$this->db->delete($tables);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function filterbytanggal($tanggalawal,$tanggalakhir)
	{
		$query = $this->db->query("SELECT * from tbl_skpd where tgl_daftar BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tgl_daftar ASC ");

		return $query->result();
	}

}