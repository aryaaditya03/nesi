<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
        $this->load->model("auths_model");
        $this->load->library('form_validation');
        if(!$this->auths_model->current_user()){
            redirect('auth/login_siswa');
        }
        }

	public function index()
	{
        $data['current_user'] = $this->auths_model->current_user();
        $this->load->view("siswaa/_partials/head.php");
        $this->load->view("siswaa/_partials/body.php");
        $this->load->view("siswaa/_partials/content.php", $data);
        $this->load->view("siswaa/upload/uploadijazah.php", $data);
        $this->load->view("siswaa/_partials/footer.php");
        $this->load->view("siswaa/_partials/modal.php");
        $this->load->view("siswaa/_partials/js.php");

	}

    public function ijazah()
	{
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
        $this->load->model('auth_model');
        $data['current_user'] = $this->auths_model->current_user();
        
            if ($this->input->method() === 'post') {
                // the user id contain dot, so we must remove it
                $file_name = str_replace('ijazah_','',$data['current_user']->nisn);
                $config['upload_path']          = FCPATH.'./img/uploads/ijazah/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['file_name']            = $file_name;
                $config['overwrite']            = true;
                $config['max_size']             = 3000; // 1MB
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;
        
                $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('ijazah')){
                    $data['error'] = $this->upload->display_errors();
                } else {
                    $uploaded_data = $this->upload->data();
                }
                
        
                    $new_data = [
                        'id_siswa' => $data['current_user']->id_siswa,
                        'ijazah' => $uploaded_data['file_name'],
                    ];
            
                    if ($this->siswa_model->updateDt($new_data)) {
                        $this->session->set_flashdata('messageIjazah', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>IJAZAH BERHASIL DI UPLOAD!</div>');
                        redirect(site_url('students/upload'));
                    }
                
            }
            
            $this->load->view("siswaa/_partials/head.php");
            $this->load->view("siswaa/_partials/body.php");
            $this->load->view("siswaa/_partials/content.php", $data);
            $this->load->view("siswaa/upload/uploadijazah.php");
            $this->load->view("siswaa/_partials/footer.php");
            $this->load->view("siswaa/_partials/modal.php");
            $this->load->view("siswaa/_partials/js.php");
        }

    public function nilai_siswa()
    {
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
        $this->load->model('auth_model');
        $data['current_user'] = $this->auths_model->current_user();
        
            if ($this->input->method() === 'post') {
                // the user id contain dot, so we must remove it
                $file_name = str_replace('nilai_','',$data['current_user']->nisn);
                $config['upload_path']          = FCPATH.'./img/uploads/nilai/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['file_name']            = $file_name;
                $config['overwrite']            = true;
                $config['max_size']             = 3000; // 1MB
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;
        
                $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('nilai_siswa')){
                    $data['error'] = $this->upload->display_errors();
                } else {
                    $uploaded_data = $this->upload->data();
                
        
                    $new_data = [
                        'id_siswa' => $data['current_user']->id_siswa,
                        'nilai_siswa' => $uploaded_data['file_name'],
                    ];
            
                    if ($this->siswa_model->updateDt($new_data)) {
                        $this->session->set_flashdata('messageNilai_siswa', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>NILAI BERHASIL DI UPLOAD!</div>');
                        redirect(site_url('students/upload/nilai_siswa'));
                    }
                }
                
            }
            
            $this->load->view("siswaa/_partials/head.php");
            $this->load->view("siswaa/_partials/body.php");
            $this->load->view("siswaa/_partials/content.php", $data);
            $this->load->view("siswaa/upload/uploadnilai.php", $data);
            $this->load->view("siswaa/_partials/footer.php");
            $this->load->view("siswaa/_partials/modal.php");
            $this->load->view("siswaa/_partials/js.php");
    }

        public function skhun()
	    {
		$this->load->library('form_validation');
		$this->load->model('siswa_model');
        $this->load->model('auth_model');
        $data['current_user'] = $this->auths_model->current_user();
        
            if ($this->input->method() === 'post') {
                // the user id contain dot, so we must remove it
                $file_name = $file_name = str_replace('skhun_','',$data['current_user']->nisn);
                $config['upload_path']          = FCPATH.'./img/uploads/skhun/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['file_name']            = $file_name;
                $config['overwrite']            = true;
                $config['max_size']             = 3000; // 1MB
                $config['max_width']            = 1080;
                $config['max_height']           = 1080;
        
                $this->load->library('upload', $config);
        
                if (!$this->upload->do_upload('skhun')){
                    $data['error'] = $this->upload->display_errors();
                } else {
                    $uploaded_data = $this->upload->data();
                }
                
        
                    $new_data = [
                        'id_siswa' => $data['current_user']->id_siswa,
                        'skhun' => $uploaded_data['file_name'],
                    ];
            
                    if ($this->siswa_model->updateDt($new_data)) {
                        $this->session->set_flashdata('messageSkhun', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>SKHUN BERHASIL DI UPLOAD!</div>');
                        redirect(site_url('students/upload/skhun'));
                    }
                
            }
            
            $this->load->view("siswaa/_partials/head.php");
            $this->load->view("siswaa/_partials/body.php");
            $this->load->view("siswaa/_partials/content.php", $data);
            $this->load->view("siswaa/upload/uploadskhun.php", $data);
            $this->load->view("siswaa/_partials/footer.php");
            $this->load->view("siswaa/_partials/modal.php");
            $this->load->view("siswaa/_partials/js.php");
        }

        public function removeIjazah()
        {
            $current_user = $this->auths_model->current_user();
            $this->load->model('siswa_model');
                
            // hapus file
            $file_name = str_replace('ijazah_', '', $current_user->nisn);
            array_map('unlink', glob(FCPATH."./img/uploads/ijazah/$file_name.*"));

            $new_data = [
                'id_siswa' => $current_user->id_siswa,
                'ijazah' => null,
            ];

            if ($this->siswa_model->updateDt($new_data)) {
                $this->session->set_flashdata('messageIjazah', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>FILE SEBELUMNYA BERHASIL DIHAPUS!</div>');
                redirect(site_url('students/upload/ijazah'));
            }
        }

        public function removeNilai()
        {
            $current_user = $this->auths_model->current_user();
            $this->load->model('siswa_model');
                
            // hapus file
            $file_name = str_replace('nilai_', '', $current_user->nisn);
            array_map('unlink', glob(FCPATH."./img/uploads/nilai/$file_name.*"));

            $new_data = [
                'id_siswa' => $current_user->id_siswa,
                'nilai_siswa' => null,
            ];

            if ($this->siswa_model->updateDt($new_data)) {
                $this->session->set_flashdata('messageNilai', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>FILE SEBELUMNYA BERHASIL DIHAPUS!</div>');
                redirect(site_url('students/upload/nilai_siswa'));
            }
        }

        public function removeSkhun()
        {
            $current_user = $this->auths_model->current_user();
            $this->load->model('siswa_model');
                
            // hapus file
            $file_name = str_replace('nilai_', '', $current_user->nisn);
            array_map('unlink', glob(FCPATH."./img/uploads/nilai/$file_name.*"));

            $new_data = [
                'id_siswa' => $current_user->id_siswa,
                'nilai_siswa' => null,
            ];

            if ($this->siswa_model->updateDt($new_data)) {
                $this->session->set_flashdata('messageSkhun', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>FILE SEBELUMNYA BERHASIL DIHAPUS!</div>');
                redirect(site_url('students/upload/skhun'));
            }
        }
}