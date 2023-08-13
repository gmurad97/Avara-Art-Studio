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

    public function avara_statement_create()
    {
        $checkRowsStatement = $this->AdminModel->xl_rows_control("statement", "s_id");
        if ($checkRowsStatement == (-1)) {
            $this->load->view("admin/Statement/Create");
        } else {
            redirect(base_url("statement_edit"));
        }
    }

    public function avara_statement_create_action()
    {
        $input_statement_title = $this->input->post("input_statement_title", true);

        $statement_cfg_img["upload_path"]      = "./file_manager/statement/";
        $statement_cfg_img["allowed_types"]    = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
        $statement_cfg_img["file_ext_tolower"] = true;
        $statement_cfg_img["remove_spaces"]    = true;
        $statement_cfg_img["encrypt_name"]     = true;

        $this->load->library("upload", $statement_cfg_img);

        if ($this->upload->do_upload("input_statement_img")) {
            $statement_img = $this->upload->data();
            $data = [
                "s_title"   => $input_statement_title,
                "s_img"     => $statement_img["file_name"]
            ];
            $this->AdminModel->insert_statement_data($data);
            redirect(base_url('statement_edit'));
        } else {
            $data = [
                "s_title"   => $input_statement_title
            ];
            $this->AdminModel->insert_statement_data($data);
            redirect(base_url('statement_edit'));
        }
    }

    public function avara_statement_edit()
    {
        $checkRowsStatement = $this->AdminModel->xl_rows_control("statement", "s_id");
        if ($checkRowsStatement == (-1)) {
            redirect(base_url("statement_create"));
        } else {
            $data["statement"] = $this->AdminModel->get_statement_data($this->AdminModel->xl_rows_control("statement", "s_id"));
            $this->load->view("admin/Statement/Edit", $data);
        }
    }

    public function avara_statement_edit_action()
    {
        $input_statement_title = $this->input->post("input_statement_title", true);

        $statement_cfg_img["upload_path"]      = "./file_manager/statement/";
        $statement_cfg_img["allowed_types"]    = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
        $statement_cfg_img["file_ext_tolower"] = true;
        $statement_cfg_img["remove_spaces"]    = true;
        $statement_cfg_img["encrypt_name"]     = true;

        $this->load->library("upload", $statement_cfg_img);

        if ($this->upload->do_upload("input_statement_img")) {
            $statement_img = $this->upload->data();
            $data = [
                "s_title"   => $input_statement_title,
                "s_img"     => $statement_img["file_name"]
            ];
            $this->AdminModel->update_statement_data($this->AdminModel->xl_rows_control("statement", "s_id"), $data);
            redirect(base_url('statement_edit'));
        } else {
            $data = [
                "s_title"   => $input_statement_title
            ];
            $this->AdminModel->update_statement_data($this->AdminModel->xl_rows_control("statement", "s_id"), $data);
            redirect(base_url('statement_edit'));
        }
    }











    public function avara_gallery_create()
    {
        $this->load->view("admin/Gallery/Create");
    }

    public function avara_gallery_create_action()
    {
        $g_cfg_img["upload_path"]       = "./file_manager/gallery";
        $g_cfg_img["allowed_types"]     = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
        $g_cfg_img["file_ext_tolower"]  = true;
        $g_cfg_img["remove_spaces"]     = true;
        $g_cfg_img["encrypt_name"]      = true;

        $this->load->library("upload", $g_cfg_img);

        if ($this->upload->do_upload("input_gallery_img")) {
            $gallery_img = $this->upload->data();
            $data = [
                "g_img" => $gallery_img["file_name"]
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->gallery_create($data);
            redirect(base_url("gallery_list"));
        } else {
            $this->session->set_flashdata("gallery_img_unupload", "Error! Image not uploaded.");
            redirect(base_url("gallery_create"));
        }
    }

    public function avara_gallery_list()
    {
        $data["gallery_get_db"] = $this->AdminModel->gallery_get_db();
        $this->load->view("admin/gallery/List", $data);
    }

    public function avara_gallery_delete($id)
    {
        if (file_exists("./file_manager/gallery/" . $this->AdminModel->gallery_get_id_db($id)["g_img"])) {
            unlink("./file_manager/gallery/" . $this->AdminModel->gallery_get_id_db($id)["g_img"]);
        }
        $this->AdminModel->gallery_id_delete($id);
        redirect(base_url("gallery_list"));
    }








    public function avara_slider_create()
    {
        $this->load->view("admin/Slider/Create");
    }

    public function avara_slider_create_action()
    {
        $s_cfg_img["upload_path"]       = "./file_manager/slider";
        $s_cfg_img["allowed_types"]     = "jpg|jpeg|png|svg|JPG|JPEG|PNG|SVG";
        $s_cfg_img["file_ext_tolower"]  = true;
        $s_cfg_img["remove_spaces"]     = true;
        $s_cfg_img["encrypt_name"]      = true;

        $this->load->library("upload", $s_cfg_img);

        if ($this->upload->do_upload("input_slider_img")) {
            $slider_img = $this->upload->data();
            $data = [
                "s_img" => $slider_img["file_name"]
            ];
            $this->AdminModel->slider_create($data);
            redirect(base_url("slider_list"));
        } else {
            $this->session->set_flashdata("slider_img_unupload", "Error! Image not uploaded.");
            redirect(base_url("slider_create"));
        }
    }

    public function avara_slider_list()
    {
        $data["slider_get_db"] = $this->AdminModel->slider_get_db();
        $this->load->view("admin/Slider/List", $data);
    }

    public function avara_slider_delete($id)
    {
        if (file_exists("./file_manager/slider/" . $this->AdminModel->slider_get_id_db($id)["s_img"])) {
            unlink("./file_manager/slider/" . $this->AdminModel->slider_get_id_db($id)["s_img"]);
        }
        $this->AdminModel->slider_id_delete($id);
        redirect(base_url("slider_list"));
    }











    public function avara_contact_create()
    {
        $checkRowscontact = $this->AdminModel->xl_rows_control("contact", "с_id");
        if ($checkRowscontact == (-1)) {
            $this->load->view("admin/contact/Create");
        } else {
            redirect(base_url("contact_edit"));
        }
    }

    public function avara_contact_create_action()
    {
        $input_contact_location = $this->input->post("input_contact_location", true);
        $input_contact_phone = $this->input->post("input_contact_phone", true);
        $input_contact_email = $this->input->post("input_contact_email", true);

        $data = [
            "c_location"   => $input_contact_location,
            "c_phone"   => $input_contact_phone,
            "c_email"   => $input_contact_email,
        ];

        $this->AdminModel->insert_contact_data($data);
        redirect(base_url('contact_edit'));
    }

    public function avara_contact_edit()
    {
        $checkRowscontact = $this->AdminModel->xl_rows_control("contact", "c_id");
        if ($checkRowscontact == (-1)) {
            redirect(base_url("contact_create"));
        } else {
            $data["contact"] = $this->AdminModel->get_contact_data($this->AdminModel->xl_rows_control("contact", "c_id"));
            $this->load->view("admin/contact/Edit", $data);
        }
    }

    public function avara_contact_edit_action()
    {
        $input_contact_location = $this->input->post("input_contact_location", true);
        $input_contact_phone = $this->input->post("input_contact_phone", true);
        $input_contact_email = $this->input->post("input_contact_email", true);

        $data = [
            "c_location"   => $input_contact_location,
            "c_phone"   => $input_contact_phone,
            "c_email"   => $input_contact_email,
        ];
        $this->AdminModel->update_contact_data($this->AdminModel->xl_rows_control("contact", "c_id"), $data);
        redirect(base_url('contact_edit'));
    }
}
