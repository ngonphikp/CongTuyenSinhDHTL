<?php
class Mbv extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from bai_viet;");
        return $query->num_rows();
    }

    public function getListAll(){
        $query=$this->db->query("select * from bai_viet;");
        return $query->result_array();
    }

    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from bai_viet limit $start, $size;");
        return $query->result_array();
    }
}
?>