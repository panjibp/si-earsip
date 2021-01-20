<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{

		// CAN'T MOVE TO LOGIN PAGE IF ALREADY LOGGED IN
		if ($this->session->userdata('username'))
		{
			redirect ('departemen/home');
		}

		// VALIDATION RULES
		$this->form_validation->set_rules('username', 'Username', 'required|trim', [
			'required' => "Username can't be blank"
		]);

		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
			'required' => "Password can't be blank",
			'min_length' => 'Password too short'
		]);

		// VALIDATION FAILED
		if ($this->form_validation->run() == false)
		{
			$data['title'] = 'Login Page';
			$this->load->view('auth/login_new', $data);
		}	// VALIDATION SUCCESSFUL
			else
			{
				$this->_login();
			}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		// USERNAME IS VALID
		if ($user)
		{	// PASSWORD IS VALID
			if (password_verify($password, $user['password']))
			{
				$data = [
					'username' => $user['username'],
					'tipe_user' => $user['tipe_user']
				];
				
				$this->session->set_userdata($data);
				redirect('main/home');
			}	// PASSWORD IS INVALID
				else
				{
					redirect('auth');
				}
		}	// USERNAME IS INVALID
			else
			{
				redirect('auth');
			}
	}

	public function registration()
	{

		// CAN'T MOVE TO REGISTRATION PAGE IF ALREADY LOGGED IN
		if ($this->session->userdata('username'))
		{
			redirect('user');
		}

		// VALIDATION RULES
		$this->form_validation->set_rules('fullname', 'Full Name', 'required|trim', [
			'required' => "Full Name can't be blank"
		]);

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'required' => "Username can't be blank",
			'is_unique' => "Username has already been registered"
		]);

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'required' => "Password can't be blank",
			'matches' => "Password don't match",
			'min_length' => 'Password too short'
		]);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		// VALIDATION FAILED
		if ($this->form_validation->run() == false)
		{
			$data['title'] = 'User Registration';
			$this->load->view('auth/registration', $data);
		}	// VALIDATION SUCCESSFUL
			else
			{
				$data = [
					'fullname' => htmlspecialchars($this->input->post('fullname', true)),
					'username' => htmlspecialchars($this->input->post('username', true)),
					'image' => 'default.png',
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'date_created' => time()
				];

			// INSERT TO DATABASE
			$this->db->insert('user', $data);
			redirect('auth');
			}
	}

	// log the user out
	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('auth');
	}

}