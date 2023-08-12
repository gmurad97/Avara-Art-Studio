<?php

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }
    public function index()
    {
        $data["slider_data"] = $this->UserModel->slider_get_db();
        $this->load->view("user/index.php",$data);
    }

    public function statement()
    {
        $data["statement_data"] = $this->UserModel->statement_get_db();
        $this->load->view("user/statement.php",$data);
    }

    public function archive()
    {
        $data["gallery_data"] = $this->UserModel->gallery_get_db();
        $this->load->view("user/gallery.php",$data);
    }

    public function contact()
    {
        $this->load->view("user/contact.php");
    }
}
