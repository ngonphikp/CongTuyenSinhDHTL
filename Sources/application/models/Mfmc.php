<?php
class Mfmc extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from file_minh_chung");
        return $query->num_rows();
    }

    public function where($ma_hsxt,$ma_file_minh_chung)
    {
        $query=$this->db->query("select * from file_minh_chung where ma_hsxt='$ma_hsxt' and ma_file_minh_chung='$ma_file_minh_chung';");
        return $query->result_array();
    }
    
    public function add($ma_hsxt, $mo_ta, $ten_file, $dung_luong){
        $this->db->query("insert into file_minh_chung(ma_hsxt, mo_ta, ten_file, dung_luong)  values('$ma_hsxt','$mo_ta','$ten_file', '$dung_luong');");
        //$this->db->query("insert into ho_so_xet_tuyen(ma_ts) values($ma_ts);");
    }

    public function getByMaHsxt($ma_hsxt){
        $query=$this->db->query("select * from file_minh_chung where ma_hsxt='$ma_hsxt';");
        return $query->result_array();
    }
}
?>