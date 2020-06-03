<?php
class Mdm extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from danh_muc;");
        return $query->num_rows();
    }

    public function getListAll(){
        $query=$this->db->query("select * from danh_muc;");
        return $query->result_array();
    }
}
?>