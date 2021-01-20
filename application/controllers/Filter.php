<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller
{

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SKPD_Model');
	}

	public function index()
	{
		$tanggalawal = $this->input->post('tanggalawal');
		$tanggalakhir = $this->input->post('tanggalakhir');

		// $data['title'] = "Laporan Penjualan By Tanggal";
		// $data['subtitle'] = "Dari tanggal : ".$tanggalawal.' Sampai tanggal : '.$tanggalakhir;
		$data['datafilter'] = $this->SKPD_Model->filterbytanggal($tanggalawal,$tanggalakhir);

		$this->load->view('cetak-skpd-filter', $data);
	}


}