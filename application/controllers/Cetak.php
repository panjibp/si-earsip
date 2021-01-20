<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Cetak extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
	}

	public function cetakWP()
	{
		error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
 
        $pdf = new FPDF('L', 'mm','Letter');
 
        $pdf->AddPage();
 
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR ARSIP WAJIB PAJAK',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
 
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(40,6,'Nomor Polisi',1,0,'C');
        $pdf->Cell(70,6,'Nama',1,0,'C');
        $pdf->Cell(80,6,'Alamat',1,0,'C');
        $pdf->Cell(40,6,'ID Wajib Pajak',1,0,'C');
 
        $pdf->SetFont('Arial','',10);

        $pdf->Output('D', 'Laporan_WajibPajak.pdf');
	}

}