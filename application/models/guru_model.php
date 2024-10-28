<?php defined('BASEPATH') OR exit('No direct script access allowed');

class guru_model extends CI_Model
{
    private $_table = "guru";

    public $id_guru;
    public $kode_guru;
    public $nama_guru;
    public $mapel;
    public $email;
    public $no_telp;

    public function rules()
    {
        return [
            ['field' => 'id_guru',
            'label' => 'Id_guru',
            'rules' => 'numeric'],

            ['field' => 'kode_guru',
            'label' => 'Kode_guru',
            'rules' => 'required'],
            
            ['field' => 'nama_guru',
            'label' => 'Nama_guru',
            'rules' => 'required'],
            
            ['field' => 'mapel',
            'label' => 'Mapel',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'no_telp',
            'label' => 'No_telp',
            'rules' => 'required'],
            

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_guru" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_guru = uniqid();
        $this->kode_guru = $post["kode_guru"];
        $this->nama_guru = $post["nama_guru"];
        $this->mapel = $post["mapel"];
        $this->email = $post["email"];
        $this->no_telp = $post["no_telp"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_guru = $post["id"];
        $this->kode_guru = $post["kode_guru"];
        $this->nama_guru = $post["nama_guru"];
        $this->mapel = $post["mapel"];
        $this->email = $post["email"];
        $this->no_telp = $post["no_telp"];
        $this->db->update($this->_table, $this, array('id_guru' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_guru" => $id));
    }
}
