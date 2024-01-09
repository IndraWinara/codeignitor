<?php

class User extends CI_Controller
{
    public function login()
    {
        echo "logged in" . "<br>";
        echo "input data username -->" . $this->input->post('username') . "<br>";
        echo "input data password -->" . $this->input->post('password') . "<br>";
    }
    public function signup()
    {
        $username = $this->input->post('username');
        $email =  $this->input->post('email');
        $password = $this->input->post('password');

        $this->user_model->create_user([
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ]);
        $this->load->view('/layouts/main');
    }
}
