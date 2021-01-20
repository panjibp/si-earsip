<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Wajibpajak_model');
		$this->load->model('SKPD_model');
		$this->load->model('Home_model');
		$this->load->model('User_model');
	}

	public function home()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jml_wajibpajak'] = $this->Home_model->jumlahWajibPajak();
		$data['jml_skpd'] = $this->Home_model->jumlahSKPD();
		$data['jml_user'] = $this->Home_model->jumlahUser();

		$this->template->load('template','home', $data);
	}

	public function wajibPajak()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['wajibpajak'] = $this->Wajibpajak_model->daftarWajibPajak();

		$this->template->load('template', 'wajibpajak', $data);
	}
	public function tambahWajibPajak()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->template->load('template','wajibpajak-tambah', $data);
	}

	public function prosesSimpanWajibPajak()
	{
		$data['nomor_polisi'] = $this->input->post('nomor_polisi');
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['id_wajibpajak'] = $this->input->post('id_wajibpajak');

		$this->Wajibpajak_model->simpanWajibPajak($data);
		redirect('main/wajibpajak');

	}

	public function editWajibPajak()
	{
		$id = $this->input->get('id');

		$data['wajibpajak'] = $this->Wajibpajak_model->editWajibPajak($id);
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->template->load('template','wajibpajak-edit', $data);

		$this->session->set_flashdata('id', $id);
	}

	public function prosesEditWajibPajak()
	{
		$id = $this->session->flashdata('id');

		$data['nomor_polisi'] = $this->input->post('nomor_polisi');
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['id_wajibpajak'] = $this->input->post('id_wajibpajak');

		$this->Wajibpajak_model->prosesEditWajibPajak($id, $data);
		redirect('main/wajibpajak');
	}

	public function prosesHapusWajibPajak()
	{
		$data = $this->input->get('id');

		$this->Wajibpajak_model->hapusWajibPajak($data);
		redirect('main/wajibpajak');
	}

	public function SKPD()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['skpd'] = $this->SKPD_model->daftarSKPD();

		$this->template->load('template', 'skpd', $data);
	}

	public function tambahSKPD()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->template->load('template', 'skpd-tambah', $data);
	}

	public function prosesSimpanSKPD()
	{
		$data['numerator'] = $this->input->post('numerator');
		$data['tgl_daftar'] = $this->input->post('tgl_daftar');
		$data['no_polisi'] = $this->input->post('no_polisi');
		$data['jenis_model'] = $this->input->post('jenis_model');
		$data['tahun'] = $this->input->post('tahun');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['id_numerator'] = $this->input->post('id_numerator');

		$this->SKPD_model->simpanSKPD($data);
		redirect('main/skpd');
	}

	public function editSKPD()
	{
		$id = $this->input->get('id');

		$data['skpd'] = $this->SKPD_model->editSKPD($id);
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->template->load('template','skpd-edit', $data);

		$this->session->set_flashdata('id', $id);
	}

	public function prosesEditSKPD()
	{
		$id = $this->session->flashdata('id');

		$data['numerator'] = $this->input->post('numerator');
		$data['tgl_daftar'] = $this->input->post('tgl_daftar');
		$data['no_polisi'] = $this->input->post('no_polisi');
		$data['jenis_model'] = $this->input->post('jenis_model');
		$data['tahun'] = $this->input->post('tahun');
		$data['keterangan'] = $this->input->post('keterangan');
		$data['id_numerator'] = $this->input->post('id_numerator');

		$this->SKPD_model->prosesEditSKPD($id, $data);
		redirect('main/skpd');
	}

	public function prosesHapusSKPD()
	{
		$data = $this->input->get('id');

		$this->SKPD_model->hapusSKPD($data);
		redirect('main/skpd');
	}

	public function user()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['daftaruser'] = $this->User_model->daftaruser();

		$this->template->load('template', 'user', $data);
	}

	public function userTambah()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'is_unique' => "Username telah terdaftar, gunakan yang lain."
		]);

		if ($this->form_validation->run() == false)
		{
			$this->template->load('template','user-tambah', $data);
		} else {
			$data2 = [
					'nip' => $this->input->post('nip'),
					'fullname' => $this->input->post('fullname'),
					'username' => $this->input->post('username'),
					'image' => 'default.png',
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'tipe_user' => $this->input->post('tipe_user'),
					'date_created' => time()
				];
			$this->db->insert('user', $data2);
			redirect('main/user');
		}
	}

	public function userEdit()
	{
		$id = $this->input->get('id');

		$data['edituser'] = $this->User_model->edituser($id);
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->template->load('template', 'user-edit', $data);

		$this->session->set_flashdata('id', $id);
	}

	public function prosesUserEdit()
	{
		$id = $this->session->flashdata('id');
		$password = $this->input->post('password');
		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$data = array(
			'nip' => $this->input->post('nip'),
			'fullname' => $this->input->post('fullname'),
			'password' => $password_hash,
			'tipe_user' => $this->input->post('tipe_user')
		);

		$this->User_model->prosesedituser($id, $data);
		redirect('main/user');
	}

	public function prosesHapusUser()
	{
		$data = $this->input->get('id');

		$this->User_model->hapusUser($data);
		redirect('main/user');
	}

	public function updateProfile()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->template->load('template','updateprofile', $data);
		
	}

	public function prosesUpdateProfile()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');

		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$this->db->set('password', $password_hash);
		$this->db->set('fullname', $fullname);
		$this->db->where('username', $this->session->userdata('username'));
		$this->db->update('user');

		redirect('main/home');
	}

	public function cetakWajibPajak()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['wajibpajak'] = $this->Wajibpajak_model->daftarWajibPajak();

		$this->load->view('cetak-wajibpajak', $data);
	}

	public function cetakSKPD()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['skpd'] = $this->SKPD_model->daftarSKPD();

		$this->load->view('cetak-skpd', $data);
	}

}