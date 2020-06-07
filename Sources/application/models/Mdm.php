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

    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from danh_muc limit $start, $size;");
        return $query->result_array();
    }

    public function add($ma, $ten, $ma_cha){
        $this->db->query("INSERT INTO danh_muc VALUES ('$ma', '$ten', '$ma_cha');");
    }
}
?>