<?php

class Profile_model extends CI_Model
{
	private $_table = "user";

	public function profile_rules()
	{
		return [
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|max_length[32]'
			],
		];
	}

	public function password_rules()
	{
		return [
			[
				'field' => 'password',
				'label' => 'New_password',
				'rules' => 'required|min_length[5]'
			],
			[
				'field' => 'password_confirm',
				'label' => 'Password_confirm',
				'rules' => 'required|min_length[5]|matches[password]'
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

	public function update($data)
	{
		if (!$data['id_user']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id_user' => $data['id_user']]);
	}

	public function updateDt($data)
	{
		if (!$data['id_user']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id_user' => $data['id_user']]);
	}
}