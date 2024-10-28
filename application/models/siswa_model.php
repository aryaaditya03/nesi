<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "siswa";

    public $id_siswa;
    public $nisn;
    public $nama_siswa;
    public $jurusan;
    public $asal_sekolah;
    public $tanggal_lahir;
    public $kota_lahir;
    public $no_handphone;
    public $alamat;
    public $email;
    public $password;
    public $ijazah;
    public $nilai_siswa;
    public $skhun;
    public $last_login;
    public $agama;
    public $jenis_kelamin;


    public function rules()
    {
        return [

            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'numeric'],

            ['field' => 'nk',
            'label' => 'Nik',
            'rules' => 'numeric'],

            ['field' => 'nama_siswa',
            'label' => 'Nama_siswa',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'kota_lahir',
            'label' => 'Kota_lahir',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal_lahir',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],

            ['field' => 'asal_sekolah',
            'label' => 'Asal_sekolah',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'no_handphone',
            'label' => 'No_handphone',
            'rules' => 'numeric'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[5]'],

            ['field' => 'ulangi_password',
            'label' => 'Ulangi_password',
            'rules' => 'required|min_length[5]|matches[password]'],



        ];
    }

    public function lengkapi_rules()
    {
        return [
            

            ['field' => 'nama_siswa',
            'label' => 'Nama_siswa',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'kota_lahir',
            'label' => 'Kota_lahir',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal_lahir',
            'rules' => 'required'],

            ['field' => 'asal_sekolah',
            'label' => 'Asal_sekolah',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'no_handphone',
            'label' => 'No_handphone',
            'rules' => 'numeric'],

            ['field' => 'nama_wali',
            'label' => 'Nama_wali',
            'rules' => 'required'],

            ['field' => 'nama_ibu',
            'label' => 'Nama_ibu',
            'rules' => 'required'],

            ['field' => 'nama_ayah',
            'label' => 'Nama_ayah',
            'rules' => 'required'],
        ];
    }

    public function edit_rules()
    {
        return [

            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'numeric'],

            ['field' => 'nik',
            'label' => 'Nik',
            'rules' => 'numeric'],
            
            ['field' => 'jenis_kelamin',
            'label' => 'Jenis_kelamin',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required'],

            
        ];
    }
    
    public function cp_rules()
    {
        return [

            ['field' => 'current_password',
            'label' => 'Current_password',
            'rules' => 'required'],

            ['field' => 'password_confirm',
            'label' => 'Password_confirm',
            'rules' => 'required|matches[password]'],
            
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'password_confirm',
            'label' => 'Password_confirm',
            'rules' => 'required|matches[password]'],
            

        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_siswa" => $id])->row();
    }

    public function getByJK($id)
    {
        return $this->db->get_where($this->_table, ["jenis_kelamin" => $id])->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_siswa" => $id));
    }

    public function hitungSiswa()
    {
        $query = $this->db->get('siswa');
        if($query->num_rows()>0){
            return $query->num_rows();        
        }
        else
        {
            return 0;
        }
    }

    public function hitungJurusanIpa()
    {
        $query = $this->db->get_where('siswa', ['jurusan' => 'IPA']);
        if($query->num_rows()>0){
            return $query->num_rows();        
        }
        else
        {
            return 0;
        }
    }

    public function hitungJurusanIps()
    {
        $query = $this->db->get_where('siswa', ['jurusan' => 'IPS']);
        if($query->num_rows()>0){
            return $query->num_rows();        
        }
        else
        {
            return 0;
        }
    }

    public function saveReg($data)
	{
		return $this->db->insert($this->_table, $data);
	}

    public function updateDt($data)
	{
		if (!$data['id_siswa']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id_siswa' => $data['id_siswa']]);
	}


    public function update($table, $data, $where)
    {
        $this->db->where($where)
                ->update($table, $data);
            return TRUE;
    }

}
