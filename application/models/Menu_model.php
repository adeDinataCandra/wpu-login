<?php

class Menu_model extends CI_Model
{

    public function create()
    {
        $data = array(

            'menu' => htmlspecialchars($this->input->post('menu', true)),

        );

        $this->db->insert('user_menu', $data);
        return true;
    }

    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function createSubMenu()
    {
        $data = array(
            'title' => htmlspesialchars($this->input->post('title', true)),
            'menu_id' => htmlspesialchars($this->input->post('menu_id', true)),
            'url' => htmlspesialchars($this->input->post('url', true)),
            'icon' => htmlspesialchars($this->input->post('icon', true)),
            'is_active' => htmlspesialchars($this->input->post('is_active', true))
        );
        $this->db->insert('user_sub_menu', $data);
    }
}
