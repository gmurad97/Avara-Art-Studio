<?php

class UserModel extends CI_Model{
    public function statement_get_db()
    {
        return $this->db->order_by("s_id", "DESC")->limit(1)->get("statement")->row_array();
    }
    public function gallery_get_db(){
        return $this->db->get("gallery")->result_array();
    }

    public function slider_get_db(){
        return $this->db->get("slider")->result_array();
    }
}