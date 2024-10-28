<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $name;
    public $email;
    public $username;
    public $password;
    public $avatar;
    public $created_at;
    public $last_login;

    public function rules()
    {
        return [

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],



        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByUsername($username)
    {
        return $this->db->get_where($this->_table, $this->session->userdata['username'])->row();

    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }

    public function add_rules()
	{
		return [
            [
				'field' => 'id_user',
				'label' => 'Id_user'
			],
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required'
			],
            [
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
            [
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			],
            
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
            'rules' => 'required|min_length[5]'],

            ['field' => 'password_confirm',
            'label' => 'Password_confirm',
            'rules' => 'required|matches[password]|min_length[5]'],
            

        ];
    }

    public function saveReg($data)
	{
		return $this->db->insert($this->_table, $data);
	}

    public function updateDt($data)
	{
		if (!$data['id_user']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id_user' => $data['id_user']]);
	}
    

}
