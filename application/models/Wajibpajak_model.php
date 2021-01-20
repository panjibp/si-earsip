<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Wajibpajak_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function daftarWajibPajak()
	{
		$this->db->select('*');
		$this->db->from('tbl_wajibpajak');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanWajibPajak($data)
	{
		$this->db->insert('tbl_wajibpajak', $data);
		if ($this->db->affected_rows()==1) {
			return true;
		} else {
			return false;
		}
	}

	public function editWajibPajak($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_wajibpajak');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function prosesEditWajibPajak($id, $data)
	{
		$this->db->update('tbl_wajibpajak', $data, 'id = '.$id);
		if ($this->db->affected_rows()=='1') {
			return true;
		} else {
			return false;
		}
	}

	public function hapusWajibPajak($data)
	{
		$tables = array('tbl_wajibpajak');
		$this->db->where('id', $data);
		$this->db->delete($tables);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}