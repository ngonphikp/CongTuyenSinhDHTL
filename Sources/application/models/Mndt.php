<?php
class Mndt extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select ma_nganh, ten_nganh, chuong_trinh_dao_tao, ghi_chu, gioi_thieu, csdt.ten from nganh_dao_tao ndt inner join co_so_dao_tao csdt on ndt.ma_csdt = csdt.ma_csdt;");
        return $query->num_rows();
    }

    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select ma_nganh, ten_nganh, chuong_trinh_dao_tao, ghi_chu, gioi_thieu, csdt.ten from nganh_dao_tao ndt inner join co_so_dao_tao csdt on ndt.ma_csdt = csdt.ma_csdt limit $start , $size");
        return $query->result_array();
    }

    public function deleteById($id){
        $this->db->query("delete from nganh_dao_tao where ma_nganh = $id;");
    }

    public function add($tennganh, $chuongtrinhdaotao, $ghichu, $gioithieu, $coso){
        $this->db->query("insert into nganh_dao_tao(ten_nganh, chuong_trinh_dao_tao, ghi_chu, gioi_thieu,ma_csdt) values('$tennganh','$chuongtrinhdaotao','$ghichu','$gioithieu','$coso');");
        // $data=$this->db->query("select id_dd from dia_diem dd where id_dd >= all (select id_dd from dia_diem);")->row_array();
        // $id=$data['id_dd'];
        // $this->db->query("insert into ctdd(id_dd,tieu_de_dd, noi_dung_dd, loai) values($id,'$td','$nd','$loai');");
    }
    public function edit($id,$tennganh, $chuongtrinhdaotao, $ghichu, $gioithieu, $coso){
        $this->db->query("update nganh_dao_tao set ten_nganh = '$tennganh', chuong_trinh_dao_tao = '$chuongtrinhdaotao', ghi_chu= '$ghichu' , gioi_thieu='$gioithieu',ma_csdt= '$coso' where ma_nganh = $id;");
        
    }
    public function getById($id){
        $query=$this->db->query("select ma_nganh, ten_nganh, chuong_trinh_dao_tao, ghi_chu, gioi_thieu, csdt.ten from nganh_dao_tao ndt inner join co_so_dao_tao csdt on ndt.ma_csdt = csdt.ma_csdt where ndt.ma_nganh = $id;");
        return $query->row_array();
    }

    public function getListS($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select ma_nganh, ten_nganh, chuong_trinh_dao_tao, ghi_chu, 
        gioi_thieu, csdt.ten from nganh_dao_tao ndt inner join co_so_dao_tao csdt 
        on ndt.ma_csdt = csdt.ma_csdt where ndt.ten_nganh like '%$s%' OR ndt.ma_nganh 
        like '%$s%' limit $start , $size");
        return $query->result_array();
    }

    public function countAllS($s){
        $query=$this->db->query("select ma_nganh, ten_nganh, chuong_trinh_dao_tao, ghi_chu, 
        gioi_thieu, csdt.ten from nganh_dao_tao ndt inner join co_so_dao_tao csdt 
        on ndt.ma_csdt = csdt.ma_csdt where ndt.ten_nganh like '%$s%' OR ndt.ma_nganh like '%$s%';");
        return $query->num_rows();
    }
    
}
?>