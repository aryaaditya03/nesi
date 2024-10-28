<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('admin/login/login');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->auth_model->login($username, $password)){
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('messageLogin', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
            aria-label="Close"><span aria-hidden="true">&times;</span></button>LOGIN GAGAL! Username/Password Salah</div>');
		}

		$this->load->view('admin/login/login');
	}

	public function login_siswa()
	{
		$this->load->model('auths_model');
		$this->load->library('form_validation');

		$rules = $this->auths_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('siswaa/login');
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->auths_model->login($email, $password)){
			redirect('students/dashboard');
		} else {
			$this->session->set_flashdata('messageLoginSiswa', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD SALAH!</div>');
		}

		$this->load->view('siswaa/login');
	}

	public function logout()
	{
		$this->load->model('auth_model');
		$this->auth_model->logout();
		redirect(site_url());
	}
}