<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePass extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
        $this->load->model("auths_model");
        $this->load->model("siswa_model");
        $this->load->model("user_model");
        $this->load->library('form_validation');
        if(!$this->auths_model->current_user()){
            redirect('auth/login_siswa');
        }
    }

    public function changePassword()
    {
        $data['current_user'] = $this->auths_model->current_user();
        $data['siswa'] = $this->db->get_where('siswa', ['id_siswa' => 
        $this->session->userdata('id_siswa')])->row_array();


        if ($this->input->method() === 'post') {
			$rules = $this->siswa_model->CP_rules();
			$this->form_validation->set_rules($rules);

        if  ($this->form_validation->run() == false){
            $this->load->view("siswaa/_partials/head.php");
            $this->load->view("siswaa/_partials/body.php");
            $this->load->view("siswaa/_partials/content.php", $data);
            $this->load->view('siswaa/changepass.php', $data);
            $this->load->view("siswaa/_partials/footer.php");
            $this->load->view("siswaa/_partials/modal.php");
            $this->load->view("siswaa/_partials/js.php");
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('password');
            if(!password_verify($current_password, $data['current_user']->password)) {
                $this->session->set_flashdata('messageNP', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD SAAT INI SALAH</div>');
                redirect('students/changepass/changepassword');
            } else{
                if($current_password == $new_password) {
                    $this->session->set_flashdata('messageNP', '<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>PASSWORD TIDAK BOLEH SAMA!</div>');
                    redirect('students/changepass/changepassword');
                } else {
                    $new_data = [
                        'id_siswa' => $data['current_user']->id_siswa,
                        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),  
                    ];
                    if ($this->siswa_model->updateDt($new_data)) {
                        $this->session->set_flashdata('messageNP', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"
                        aria-label="Close"><span aria-hidden="true">&times;</span></button>SUKSES GANTI PASSWORD</div>');
                        redirect(site_url('students/changepass/changepassword'));
                    }
                }
            }
        }
    }
            $this->load->view("siswaa/_partials/head.php");
            $this->load->view("siswaa/_partials/body.php");
            $this->load->view("siswaa/_partials/content.php", $data);
            $this->load->view('siswaa/changepass.php', $data);
            $this->load->view("siswaa/_partials/footer.php");
            $this->load->view("siswaa/_partials/modal.php");
            $this->load->view("siswaa/_partials/js.php");
    }
}