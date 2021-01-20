<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        // is_login();
        $this->load->model('Tbl_arsip_model');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $jenis_surat = $this->uri->segment(3);
        $surat = $this->Tbl_arsip_model->get_all_query($jenis_surat);

        $data = array(
            'surat_data' => $surat
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->template->load('template','tbl_arsip_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_arsip_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_arsip' => $row->id_arsip,
		'no_surat' => $row->no_surat,
		'tanggal_surat' => $row->tanggal_surat,
		'tanggal_diterima' => $row->tanggal_diterima,
		'perihal' => $row->perihal,
		'id_departemen' => $row->id_departemen,
		'id_pengirim' => $row->id_pengirim,
		'file' => $row->file,
		'jenis_surat' => $row->jenis_surat,
	    );
            $this->template->load('template','tbl_arsip_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat/create_action'),
	    'id_arsip' => set_value('id_arsip'),
	    'no_surat' => set_value('no_surat'),
	    'tanggal_surat' => set_value('tanggal_surat'),
	    'tanggal_diterima' => set_value('tanggal_diterima'),
	    'perihal' => set_value('perihal'),
	    'id_departemen' => set_value('id_departemen'),
	    'id_pengirim' => set_value('id_pengirim'),
	    'file' => set_value('file'),
	    'jenis_surat' => set_value('jenis_surat'),
	);
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->template->load('template','tbl_arsip_form', $data);
    }
    
    function upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('file');
        $result = $this->upload->data();
        return $result;
    }
    
    function download($filename){
        $this->load->helper('download');
        force_download(base_url().'/uploads/'.$filename, NULL);
    }
    
    public function create_action() 
    {
        
        $upload = $this->upload();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_surat' => $this->input->post('no_surat',TRUE),
		'tanggal_surat' => $this->input->post('tanggal_surat',TRUE),
		'tanggal_diterima' => $this->input->post('tanggal_diterima',TRUE),
		'perihal' => $this->input->post('perihal',TRUE),
		'id_departemen' => $this->input->post('id_departemen',TRUE),
		'id_pengirim' => $this->input->post('id_pengirim',TRUE),
		'file' => $upload['file_name'],
		'jenis_surat' => $this->input->post('jenis_surat',TRUE),
	    );

            $this->Tbl_arsip_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('surat/index/'.$this->input->post('jenis_surat',TRUE)));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_arsip_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat/update_action'),
        		'id_arsip' => set_value('id_arsip', $row->id_arsip),
        		'no_surat' => set_value('no_surat', $row->no_surat),
        		'tanggal_surat' => set_value('tanggal_surat', $row->tanggal_surat),
        		'tanggal_diterima' => set_value('tanggal_diterima', $row->tanggal_diterima),
        		'perihal' => set_value('perihal', $row->perihal),
        		'id_departemen' => set_value('id_departemen', $row->id_departemen),
        		'id_pengirim' => set_value('id_pengirim', $row->id_pengirim),
                'file' => set_value('file'),
        		'jenis_surat' => set_value('jenis_surat', $row->jenis_surat),
	    );
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->template->load('template','tbl_arsip_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat/index/surat_masuk'));
        }
    }
    
    public function update_action() 
    {
        $upload = $this->upload();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_arsip', TRUE));
        } else {
            $data = array(
    		'no_surat'            => $this->input->post('no_surat',TRUE),
    		'tanggal_surat'       => $this->input->post('tanggal_surat',TRUE),
    		'tanggal_diterima'    => $this->input->post('tanggal_diterima',TRUE),
    		'perihal'             => $this->input->post('perihal',TRUE),
    		'id_departemen'       => $this->input->post('id_departemen',TRUE),
    		'id_pengirim'         => $this->input->post('id_pengirim',TRUE),
    		'file'                => $upload['file_name'],
    		'jenis_surat'         => $this->input->post('jenis_surat',TRUE),
	    );

            $this->Tbl_arsip_model->update($this->input->post('id_arsip', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat/index/surat_masuk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_arsip_model->get_by_id($id);

        if ($row) {
            $this->Tbl_arsip_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat/index/surat_masuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat/index/surat_masuk'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_surat', 'no surat', 'trim|required');
	$this->form_validation->set_rules('tanggal_surat', 'tanggal surat', 'trim|required');
	$this->form_validation->set_rules('tanggal_diterima', 'tanggal diterima', 'trim|required');
	$this->form_validation->set_rules('perihal', 'perihal', 'trim|required');
	$this->form_validation->set_rules('id_departemen', 'id departemen', 'trim|required');
	$this->form_validation->set_rules('id_pengirim', 'id pengirim', 'trim|required');
	//$this->form_validation->set_rules('file', 'file', 'trim|required');
	$this->form_validation->set_rules('jenis_surat', 'jenis surat', 'trim|required');

	$this->form_validation->set_rules('id_arsip', 'id_arsip', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_arsip.xls";
        $judul = "tbl_arsip";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "No Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal Diterima");
	xlsWriteLabel($tablehead, $kolomhead++, "Perihal");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Departemen");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Pengirim");
	xlsWriteLabel($tablehead, $kolomhead++, "File");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Surat");

	foreach ($this->Tbl_arsip_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_diterima);
	    xlsWriteLabel($tablebody, $kolombody++, $data->perihal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_departemen);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_pengirim);
	    xlsWriteLabel($tablebody, $kolombody++, $data->file);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_surat);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_arsip.doc");

        $data = array(
            'tbl_arsip_data' => $this->Tbl_arsip_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_arsip_doc',$data);
    }

}

/* End of file Surat.php */
/* Location: ./application/controllers/Surat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-05 20:27:17 */
/* http://harviacode.com */