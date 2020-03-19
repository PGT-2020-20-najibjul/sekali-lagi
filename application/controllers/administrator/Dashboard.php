<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('administrator/dashboard');
        $this->load->view('templates_administrator/dashboard');
    }
}
