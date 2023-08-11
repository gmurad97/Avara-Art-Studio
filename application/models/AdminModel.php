<?php

class AdminModel extends CI_Model
{

    public function xl_rows_control($tableName, $idDbName)
    {
        $about_us_rows_count = $this->db->from($tableName)->count_all_results();
        if ($about_us_rows_count == 1) {
            return $this->db->get($tableName)->row_array()[$idDbName];
        } else if ($about_us_rows_count > 1) {
            return $this->db->order_by($idDbName, "DESC")->limit(1)->get($tableName)->row_array()[$idDbName];
        } else {
            return -1;
        }
    }

    public function get_admin_data_row($data)
    {
        return $this->db->select("a_id")->where($data)->get("admin")->row_array();
    }

    public function insert_statement_data($data)
    {
        $this->db->insert("statement", $data);
    }

    public function update_statement_data($id, $data)
    {
        $this->db->where("s_id", $id)->update("statement", $data);
    }

    public function get_statement_data($id)
    {
        return $this->db->where("s_id", $id)->get("statement")->row_array();
    }
    public function gallery_get_db(){
        return
    }
}
