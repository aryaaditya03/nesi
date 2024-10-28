<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->model("auth_model");
        $this->load->library('form_validation');
        if(!$this->auth_model->current_user()){
        redirect('auth/login');
        }
    }

    public function index()
    {
        $data["user"] = $this->User_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php");
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/users/data_user", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }

    public function add()
    {
        $login = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($login->rules());

        if ($validation->run()) {
            $login->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/users/add");
    }

    public function edit($id = null)
    {

        $data['current_user'] = $this->auth_model->current_user();
		$data['user'] = $this->User_model->getAll();


        if (!isset($id)) redirect('admin/user');
       
        $login = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($login->rules());

        if ($validation->run()) {
            $login->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $login->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php");
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view('admin/users/edit', $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->User_model->delete($id)) {
            redirect(site_url('admin/user'));
        }
    }

    public function tambahData()
	{
		$this->load->library('form_validation');
		$this->load->model('user_model');
        $data['current_user'] = $this->auth_model->current_user();
		$data['user'] = $this->user_model->getAll();
        
		if ($this->input->method() === 'post') {
			$rules = $this->user_model->add_rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('messageUs', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>GAGAL MENYIMPAN!</div>');
				$this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php");
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view('admin/users/add', $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
                
			}

			$new_password_data = [
                
                'id_user' => $this->id_user = uniqid(),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'avatar' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'last_login' => time()

				// 'password_updated_at' => date("Y-m-d H:i:s"),
			];

			if($this->user_model->saveReg($new_password_data)){
				$this->session->set_flashdata('messageUs', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>BERHASIL DITAMBAHKAN!</div>');
				$this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php");
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view('admin/users/add', $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
                
			}
		}

        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php");
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view('admin/users/add', $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");
        
	}

    
}
