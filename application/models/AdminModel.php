<?php

class AdminModel extends CI_Model
{
    public function get_admin_data_row($data)
    {
        return $this->db->select("a_id")->where($data)->get("admin")->row_array();
    }
}
