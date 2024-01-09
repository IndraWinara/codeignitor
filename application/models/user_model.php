<?php


class User_model extends CI_Model
{
    function get_users($user_id, $username)
    {
        $this->db->where(['id' => $user_id, 'username' => $username]);
        $query = $this->db->get('users');
        return $query->result();
    }

    function create_users($data)
    {
        $this->db->insert('users',$data);
    }

    function update_users($data,$user_id)
    {
        $this->db->where(["id" => $user_id]);
        $this->db->update('users',$data);
    }

    function delete_users($username){
        $this->db->where("username", $username);
        $this->db->delete('users');
    }
}
