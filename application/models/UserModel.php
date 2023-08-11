<?php

class UserModel extends CI_Model{
    public function statement_get_db()
    {
        return $this->db->order_by("s_id", "DESC")->limit(1)->get("statement")->row_array();
    }
}