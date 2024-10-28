<?php

class Setting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
        $this->load->library('form_validation');
		if (!$this->auth_model->current_user()) {
		redirect('auth/login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php");
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view('admin/setting', $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

	}


	public function edit_profile()
	{
		$this->load->library('form_validation');
		$this->load->model('profile_model');
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->profile_model->profile_rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				$this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php");
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view('admin/setting_edit_un', $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
			}

			$new_data = [
				'id_user' => $data['current_user']->id_user,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
			];

			if($this->profile_model->update($new_data)){
				$this->session->set_flashdata('messagePr', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>BERHASIL DISIMPAN!</div>');
				$this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php");
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view('admin/setting_edit_un', $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
			}
		}

		$this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php");
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view('admin/setting_edit_un', $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");
	}

	public function edit_password()
	{
		$this->load->library('form_validation');
		$this->load->model('profile_model');
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->profile_model->password_rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('messagePw', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>SALAH!</div>');
                $this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php");
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view('admin/setting_edit_pass', $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
			}

			$new_password_data = [
				'id_user' => $data['current_user']->id_user,
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				// 'password_updated_at' => date("Y-m-d H:i:s"),
			];

			if($this->profile_model->update($new_password_data)){
				$this->session->set_flashdata('messagePw', '<div class="alert alert-success alert-dismissible" role="alert"><button type=""button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD BERHASIL DISIMPAN</div>');
                $this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php");
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view('admin/setting_edit_pass', $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
			}
		}

		$this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php");
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view('admin/setting_edit_pass', $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");
	}

    public function changePassword()
    {
        $this->load->model('profile_model');
        $data['current_user'] = $this->auth_model->current_user();
        $data['siswa'] = $this->db->get_where('siswa', ['id_siswa' => 
        $this->session->userdata('id_siswa')])->row_array();


        if ($this->input->method() === 'post') {
			$rules = $this->profile_model->CP_rules();
			$this->form_validation->set_rules($rules);

        if  ($this->form_validation->run() == false){
            $this->session->set_flashdata('messagePw', '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
            aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD ERROR!</div>');
            redirect(site_url('admin/setting/changepassword'));
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('password');
            if(!password_verify($current_password, $data['current_user']->password)) {
                $this->session->set_flashdata('messagePw', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD SAAT INI SALAH</div>');
                redirect('admin/setting/changepassword');
            } else{
                if($current_password == $new_password) {
                    $this->session->set_flashdata('messagePw', '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD TIDAK BOLEH SAMA!</div>');
                    redirect('admin/setting/changepassword');
                } else {
                    $new_data = [
                        'id_user' => $data['current_user']->id_user,
                        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),  
                    ];
                    if ($this->profile_model->updateDt($new_data)) {
                        $this->session->set_flashdata('messagePw', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>SUKSES GANTI PASSWORD</div>');
                        redirect(site_url('admin/setting/changepassword'));
                    }
                }
            }
        }
    }
            $this->load->view("admin/_partials/head.php");
            $this->load->view("admin/_partials/body.php");
            $this->load->view("admin/_partials/content.php", $data);
            $this->load->view('admin/setting_edit_pass.php', $data);
            $this->load->view("admin/_partials/footer.php");
            $this->load->view("admin/_partials/modal.php");
            $this->load->view("admin/_partials/js.php");
    }
}