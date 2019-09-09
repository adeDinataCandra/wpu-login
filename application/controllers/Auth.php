<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        var_dump($this->input->post);
        die;
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required', array('required' => 'Kamu harus mengisi password'));

        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password1]', array('required' => 'Kamu harus mengisi konfirmasi dengan benar'));

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Wpu User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $this->user_model->insert();
            redirect('auth');
        }
    }
}
