<?php
class Mndt extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select ma_nganh, ten_nganh, chuong_trinh_dao_tao, ghi_chu, gioi_thieu, ten from nganh_dao_tao ndt inner join co_so_dao_tao csdt on ndt.ma_csdt = csdt.ma_csdt;");
        return $query->num_rows();
    }

    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select ma_nganh, ten_nganh, chuong_trinh_dao_tao, ghi_chu, gioi_thieu, ten from nganh_dao_tao ndt inner join co_so_dao_tao csdt on ndt.ma_csdt = csdt.ma_csdt limit $start , $size");
        return $query->result_array();
    }

    public function deleteById($id){
        $this->db->query("delete from nganh_dao_tao where id_dv = $id;");
    }

    
}
?>