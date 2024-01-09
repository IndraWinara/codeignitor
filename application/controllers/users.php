<?php


class Users extends CI_Controller
{
    // public function show($user_id, $username)
    // {

    //     $data['results'] = $this->user_model->get_users($user_id, $username);
    //     $this->load->view('user_view', $data);
    // }

    // public function insert($username, $password)
    // {
    //     $this->user_model->create_users([
    //         'username' => $username,
    //         'password' => $password
    //     ]);
    // }

    // public function update($user_id, $username, $password)
    // {

    //     $this->user_model->update_users([
    //         'username' => $username,
    //         'password' => $password
    //     ], $user_id);
    // }

    // public function delete($username)
    // {
    //     $this->user_model->delete_users($username);
    // }
    public function login()
    {
        echo $this->input->post('username') ."<br>";
        echo $this->input->post('password');
    }
}
