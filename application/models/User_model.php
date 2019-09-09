<?php

class User_model extends CI_Model
{

    public function create()
    {
        $data = array(

            'name' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'image' => 'default.jpg',
            'password' => hash('ripemd160', $this->input->post('password1')),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()

        );

        $this->db->insert('user', $data);
        return true;
    }
}
