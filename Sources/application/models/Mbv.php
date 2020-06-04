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
        $query=$this->db->query("select * from bai_viet bv inner join danh_muc dm on bv.ma_dm = dm.ma_dm limit $start, $size;");
        return $query->result_array();
    }

    public function deleteByMaBV($ma_bv){
        $this->db->query("delete from bai_viet where ma_bv = $ma_bv;");
    }

    public function add($dm, $td, $ndtt, $link){
        $this->db->query("INSERT INTO bai_viet (ma_dm, tieu_de_bv, noi_dung_tom_tat_bv, link_anh_bia_bv) VALUES ('$dm', '$td', '$ndtt', '$link');");
    }
}
?>