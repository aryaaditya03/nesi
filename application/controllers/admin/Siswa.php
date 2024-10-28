<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
        $this->load->model("auth_model");
        $this->load->library('form_validation');
        if(!$this->auth_model->current_user()){
        redirect('auth/login');
        }
    }

    public function index()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/_partials/breadcrumb.php");
        $this->load->view("admin/student/data_siswa", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }

    public function berkas()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/_partials/breadcrumb.php");
        $this->load->view("admin/student/berkas_siswa.php", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }

    public function datalogin()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/_partials/breadcrumb.php");
        $this->load->view("admin/student/data_login", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }

    

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Siswa_model->delete($id)) {
            redirect(site_url('admin/siswa/'));
        }
    }
    
    public function edit_data($id = null)
	{
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
        $data['current_user'] = $this->auth_model->current_user();
		$data['current_user2'] = $this->siswa_model->getById($id);

		if ($this->input->method() === 'post') {
			$rules = $this->siswa_model->edit_rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				$this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php", $data);
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view("admin/student/edit.php", $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
			}

			$new_data = [
				'id_siswa' => $data['current_user2']->id_siswa,
				'nisn' => $this->input->post('nisn'),
				'nik' => $this->input->post('nik'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'), 
				'agama' => $this->input->post('agama'),
				'jurusan' => $this->input->post('jurusan'),    
			];

			if($this->siswa_model->updateDt($new_data)){
				$this->session->set_flashdata('messageEdst', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>BERHASIL DISIMPAN!</div>');
				$this->load->view("admin/_partials/head.php");
                $this->load->view("admin/_partials/body.php", $data);
                $this->load->view("admin/_partials/content.php", $data);
                $this->load->view("admin/student/edit.php", $data);
                $this->load->view("admin/_partials/footer.php");
                $this->load->view("admin/_partials/modal.php");
                $this->load->view("admin/_partials/js.php");
			}
		}

		$this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/student/edit.php", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");
	}

    public function approval($id)
    {
        $this->load->model('siswa_model');
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $data['current_user2'] = $this->siswa_model->getById($id);
        $status = $this->input->post('status[]');

        
            if(!empty($status))
            {
                $where = [
                    'id_siswa'=> $data['current_user2']->id_siswa,
                    'status' => $this->input->post('status'), 
                ];
                $this->siswa_model->updateDt($where);
                $this->session->set_flashdata('messageDetail', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>SISWA TELAH DI VERIFIKASI!</div>');
                redirect(site_url('admin/siswa/'));
            }

        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/student/detail.php", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }

    public function Detail($id)
    {
        $this->load->model('siswa_model');
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auth_model->current_user();
        $data['current_user2'] = $this->siswa_model->getById($id);
        $this->load->view("admin/_partials/head.php");
        $this->load->view("admin/_partials/body.php", $data);
        $this->load->view("admin/_partials/content.php", $data);
        $this->load->view("admin/student/detail.php", $data);
        $this->load->view("admin/_partials/footer.php");
        $this->load->view("admin/_partials/modal.php");
        $this->load->view("admin/_partials/js.php");

    }


}
