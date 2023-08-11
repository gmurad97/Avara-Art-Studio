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
        $this->load->view("user/index.php");
    }

    public function statement()
    {
        $data["statement_data"] = $this->UserModel->statement_get_db();
        $this->load->view("user/statement.php",$data);
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
