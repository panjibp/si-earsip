<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();

	}

	public function daftarUser()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('nip', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function editUser($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function prosesedituser($id, $data)
	{
		$this->db->update('user', $data, 'id = '.$id);
		if ($this->db->affected_rows()=='1') {
			return true;
		} else {
			return false;
		}
	}

	public function hapusUser($data)
	{
		$tables = array('user');
		$this->db->where('id', $data);
		$this->db->delete($tables);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
}