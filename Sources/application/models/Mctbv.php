<?php
class Mctbv extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from chi_tiet_bai_viet;");
        return $query->num_rows();
    }

    public function getListAll(){
        $query=$this->db->query("select * from chi_tiet_bai_viet;");
        return $query->result_array();
    }

    public function getListByMaBV($ma_bv){
        $query=$this->db->query("select * from chi_tiet_bai_viet where ma_bv = $ma_bv;");
        return $query->result_array();
    }    
}
?>