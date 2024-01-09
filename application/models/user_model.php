<?php

class User_model extends CI_Model
{
    function create_user($data){
        $this->db->insert('users',$data);
    }
}
