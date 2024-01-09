<?php

class Home extends CI_Controller
{
    public function index()
    {
        // echo "controller home";
        $data['main_view'] = 'home_view';
        $this->load->view('/layouts/main',$data);
    }
}
