<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lengkapi extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
        $this->load->model("Siswa_model");
        $this->load->model("auths_model");
        $this->load->library('form_validation');
		if(!$this->auths_model->current_user()){
			redirect('auth/login_siswa');
		}
        }

	public function index()
	{
        $data["siswa"] = $this->Siswa_model->getAll();
        $data['current_user'] = $this->auths_model->current_user();
        $this->load->view("siswaa/_partials/head.php");
        $this->load->view("siswaa/_partials/body.php");
        $this->load->view("siswaa/_partials/content.php", $data);
        $this->load->view("siswaa/lengkapi/ld", $data);
        $this->load->view("siswaa/_partials/footer.php");
        $this->load->view("siswaa/_partials/modal.php");
        $this->load->view("siswaa/_partials/js.php");

	}

    public function edit_data()
	{
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
		$data['current_user'] = $this->auths_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->siswa_model->lengkapi_rules();
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() === FALSE){
				$this->session->set_flashdata('messageEditLd', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>GAGAL UPDATE!</div>');
				redirect(site_url('students/lengkapi/edit_data'));
			}

			$new_data = [
				'id_siswa' => $data['current_user']->id_siswa,
				'nisn' => $data['current_user']->nisn,
				'nik' => $data['current_user']->nik,
				'nama_siswa' => $this->input->post('nama_siswa'),
				'email' => $this->input->post('email'),
				'kota_lahir' => $this->input->post('kota_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $data['current_user']->jenis_kelamin,  
				'agama' => $data['current_user']->agama,  
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'jurusan' => $data['current_user']->jurusan,     
				'no_handphone' => $this->input->post('no_handphone'),
				'nama_wali' => $this->input->post('nama_wali'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nama_ayah' => $this->input->post('nama_ayah'),
                'alamat' => $this->input->post('alamat'),
			];

			if($this->siswa_model->updateDt($new_data)){
				$this->session->set_flashdata('messageEditLd', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>BERHASIL DI UPDATE!</div>');
				redirect(site_url('students/lengkapi/edit_data'));
			}
		}

		$this->load->view("siswaa/_partials/head.php");
        $this->load->view("siswaa/_partials/body.php");
        $this->load->view("siswaa/_partials/content.php", $data);
        $this->load->view("siswaa/lengkapi/ld.php", $data);
        $this->load->view("siswaa/_partials/footer.php");
        $this->load->view("siswaa/_partials/modal.php");
        $this->load->view("siswaa/_partials/js.php");
	}
}
