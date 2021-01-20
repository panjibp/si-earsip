<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function jumlahWajibPajak()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('tbl_wajibpajak');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jumlahSKPD()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('tbl_skpd');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

	public function jumlahUser()
	{
		$this->db->select('count(*)');
		$query = $this->db->get('user');
		$cnt = $query->row_array();
		return $cnt['count(*)'];
	}

}