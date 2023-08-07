<?php

class UserController extends CI_Controller
{
    public function index()
    {
        $this->load->view("user/index.php");
    }

    public function statement()
    {
        $this->load->view("user/statement.php");
    }

    public function archive()
    {
        $this->load->view("user/gallery.php");
    }

    public function contact()
    {
        $this->load->view("user/contact.php");
    }
}
