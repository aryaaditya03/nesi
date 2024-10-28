<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("siswaa/registrasi", $data);
        

    }

    public function add()
    {
        $siswaa = $this->Siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswaa->rules());
        
        if ($validation->run()) {
            $siswaa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        

        $this->load->view("siswaa/registrasi");

    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/siswa');
       
        $siswaa = $this->Siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswaa->rules());

        if ($validation->run()) {
            $siswaa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswaa"] = $siswaa->getById($id);
        if (!$data["siswaa"]) show_404();
        
        $this->load->view("admin/student/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Siswa_model->delete($id)) {
            redirect(site_url('admin/siswa/'));
        }
    }
    
    public function regis()
	{
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
		$data['current_user'] = $this->siswa_model->getAll();
        
		if ($this->input->method() === 'post') {
			$rules = $this->siswa_model->rules();
			$this->form_validation->set_rules($rules);


			if($this->form_validation->run() === FALSE){
                $this->session->set_flashdata('messageReg', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>SALAH!</div>');
				redirect(site_url('students/registrasi/regis'));
			}

			$new_password_data = [
                
                'id_siswa' => $this->id_siswa = uniqid(),
                'nisn' => $this->input->post('nisn'),
                'nik' => $this->input->post('nik'),
                'nama_siswa' => $this->input->post('nama_siswa'),
                'jurusan' => $this->input->post('jurusan'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'kota_lahir' => $this->input->post('kota_lahir'),
                'no_handphone' => $this->input->post('no_handphone'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'email' => $this->input->post('email'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_wali' => $this->input->post('nama_wali'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'last_login' => time()

				// 'password_updated_at' => date("Y-m-d H:i:s"),
			];

			if($this->siswa_model->saveReg($new_password_data)){
				$this->session->set_flashdata('messageReg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>DATA BERHASIL DISIMPAN</div>');
				redirect(site_url('students/registrasi/regis'));
			}
		}

        $this->load->view('siswaa/registrasi');
	}
    
    
}
