<?php

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    public function avara_login()
    {
        $this->load->view("admin/Login");
    }

    public function avara_login_action()
    {
        $input_username = $this->input->post("inputUsername", true);
        $input_password = hash("md5", $this->input->post("inputPassword", true));

        if (!empty($input_username) && !empty($input_password)) {
            $data = [
                "a_username" => $input_username,
                "a_password" => $input_password
            ];

            $adm_data_row = $this->AdminModel->get_admin_data_row($data);
            if ($adm_data_row) {
                $this->session->set_userdata("adm_auth", $adm_data_row["a_id"]);
                redirect(base_url("dashboard"));
            } else {
                $this->session->set_flashdata("adm_auth_error", "Wrong username or password.");
                redirect($_SERVER["HTTP_REFERER"]);
            }
        } else {
            $this->session->set_flashdata("adm_auth_error", "Please fill in all fields.");
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }


    public function avara_dashboard()
    {
        $this->load->view("admin/Dashboard");
    }
}
