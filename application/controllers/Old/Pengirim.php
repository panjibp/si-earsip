<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengirim extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        // is_login();
        $this->load->model('Tbl_pengirim_surat_model');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $pengirim = $this->Tbl_pengirim_surat_model->get_all();

        $data = array(
            'pengirim_data' => $pengirim
        );
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->template->load('template','tbl_pengirim_surat_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_pengirim_surat_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pengirim' => $row->id_pengirim,
		'nama_pengirim' => $row->nama_pengirim,
		'alamat' => $row->alamat,
		'no_hp' => $row->no_hp,
		'email' => $row->email,
	    );
            $this->template->load('template','tbl_pengirim_surat_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengirim'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pengirim/create_action'),
	    'id_pengirim' => set_value('id_pengirim'),
	    'nama_pengirim' => set_value('nama_pengirim'),
	    'alamat' => set_value('alamat'),
	    'no_hp' => set_value('no_hp'),
	    'email' => set_value('email'),
	);
        $this->template->load('template','tbl_pengirim_surat_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_pengirim' => $this->input->post('nama_pengirim',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );

            $this->Tbl_pengirim_surat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengirim'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_pengirim_surat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengirim/update_action'),
		'id_pengirim' => set_value('id_pengirim', $row->id_pengirim),
		'nama_pengirim' => set_value('nama_pengirim', $row->nama_pengirim),
		'alamat' => set_value('alamat', $row->alamat),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'email' => set_value('email', $row->email),
	    );
            $this->template->load('template','tbl_pengirim_surat_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengirim'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pengirim', TRUE));
        } else {
            $data = array(
		'nama_pengirim' => $this->input->post('nama_pengirim',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );

            $this->Tbl_pengirim_surat_model->update($this->input->post('id_pengirim', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengirim'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_pengirim_surat_model->get_by_id($id);

        if ($row) {
            $this->Tbl_pengirim_surat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengirim'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengirim'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_pengirim', 'nama pengirim', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');

	$this->form_validation->set_rules('id_pengirim', 'id_pengirim', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_pengirim_surat.xls";
        $judul = "tbl_pengirim_surat";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pengirim");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hp");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");

	foreach ($this->Tbl_pengirim_surat_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pengirim);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_hp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_pengirim_surat.doc");

        $data = array(
            'tbl_pengirim_surat_data' => $this->Tbl_pengirim_surat_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbl_pengirim_surat_doc',$data);
    }

}

/* End of file Pengirim.php */
/* Location: ./application/controllers/Pengirim.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-11-05 20:21:55 */
/* http://harviacode.com */