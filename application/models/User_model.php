<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{

    public function insert()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
        ];

        $this->db->insert('user', $data);
        redirect('auth');
    }
}
