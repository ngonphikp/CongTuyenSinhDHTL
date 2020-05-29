<?php
class Mdv extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv;");
        return $query->num_rows();
    }

    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv limit $start , $size");
        return $query->result_array();
    }

    public function deleteById($id){
        $this->db->query("delete from ctdv where id_dv = $id;");
        $this->db->query("delete from dgsdv where id_dv = $id;");
        $this->db->query("delete from dgcdv where id_dv = $id;");
        $this->db->query("delete from dich_vu where id_dv = $id;");
    }

    public function countPT(){
        $query = $this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv where ct.loai = 'phương tiện';");
        return $query->num_rows();
    }

    public function countKS(){
        $query = $this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv where ct.loai = 'phương tiện';");
        return $query->num_rows();
    }

    public function countBXH(){
        $query = $this->db->query("select * from dich_vu dv join ctdv ct on dv.id_dv = ct.id_dv join dgsdv dgs on dgs.id_dv = dv.id_dv group by dv.id_dv order by sum(so_sao_dv)/count(so_sao_dv) desc, count(so_sao_dv) desc;");
        return $query->num_rows();
    }

    public function getListPT($start, $size){
        $start = isset($start)? $start : 0;
        $query = $this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv where ct.loai = 'phương tiện' limit $start, $size;");
        return $query->result_array();
    }

    public function getListPTRad($start, $size){
        $start = isset($start)? $start : 0;
        $query = $this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv where ct.loai = 'phương tiện' order by rand() limit $start, $size;");
        return $query->result_array();
    }

    public function getListKSRad($start, $size){
        $start = isset($start)? $start : 0;
        $query = $this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv where ct.loai = 'khách sạn' order by rand() limit $start, $size;");
        return $query->result_array();
    }

    public function getListKS($start, $size){
        $start = isset($start)? $start : 0;
        $query = $this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv where ct.loai = 'khách sạn' limit $start, $size;");
        return $query->result_array();
    }

    public function getByID($id){
        $query=$this->db->query("select * from dich_vu dv inner join ctdv ct on dv.id_dv = ct.id_dv where dv.id_dv = $id");
        return $query->row_array();
    }

    public function getCountStarById($id){
        $query=$this->db->query("select count(so_sao_dv) as counts from dgsdv where id_dv = $id;");
        return $query->row_array();
    }

    public function getSumStarById($id){
        $query=$this->db->query("select sum(so_sao_dv) as sums from dgsdv where id_dv = $id;");
        return $query->row_array();
    }

    public function getTypeById($id){
        $query=$this->db->query("select loai from ctdv where id_dv = $id");
        return $query->row_array();
    }

    public function getComments($id){
        $query = $this->db->query("select * from dgcdv ct join thong_tin_tai_khoan tk on ct.id_tk = tk.id_tk where ct.id_dv = $id;");
        return $query->result_array();
    }

    public function getListBXH($start, $size){
        $start = isset($start)? $start : 0;
        $query = $this->db->query("select * from dich_vu dv join ctdv ct on dv.id_dv = ct.id_dv join dgsdv dgs on dgs.id_dv = dv.id_dv group by dv.id_dv order by sum(so_sao_dv)/count(so_sao_dv) desc, count(so_sao_dv) desc limit $start, $size;");
        return $query->result_array();
    }


    public function countAllS($s){
        $query=$this->db->query("select * from dich_vu dv join ctdv ct on dv.id_dv = ct.id_dv where dv.ten_dv like '%$s%' OR ct.tieu_de_dv LIKE '%$s%' OR ct.noi_dung_dv LIKE '%$s%';");
        return $query->num_rows();
    }

    public function getListS($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dich_vu dv join ctdv ct on dv.id_dv = ct.id_dv where dv.ten_dv like '%$s%' OR ct.tieu_de_dv LIKE '%$s%' OR ct.noi_dung_dv LIKE '%$s%' limit $start , $size");
        return $query->result_array();
    }

    public function adv($ten, $link, $td, $nd, $loai){
        $this->db->query("insert into dich_vu(ten_dv, link_dv) values('$ten','$link');");
        $data=$this->db->query("select id_dv from dich_vu dv where id_dv >= all (select id_dv from dich_vu);")->row_array();
        $id=$data['id_dv'];
        $this->db->query("insert into ctdv(id_dv,tieu_de_dv, noi_dung_dv, loai) values($id,'$td','$nd','$loai');");
    }

    public function edit($id, $ten, $link, $td, $nd, $loai){
        $this->db->query("update dich_vu set ten_dv = '$ten', link_dv = '$link' where id_dv = $id;");
        $this->db->query("update ctdv set tieu_de_dv = '$td', noi_dung_dv = '$nd', loai = '$loai' where id_dv = $id;");
    }

    public function add_so_sao($id_dv, $id_tk, $so_sao){
        $this->db->query("INSERT INTO dgsdv (id_dv, id_tk, so_sao_dv) VALUES($id_dv, $id_tk, $so_sao);");
    }

    public function add_binh_luan($id_dv, $id_tk, $binh_luan, $thoi_gian){
        $this->db->query("INSERT INTO dgcdv (id_dv, id_tk, binh_luan_dv, thoi_gian) VALUES ($id_dv, $id_tk, '$binh_luan', '$thoi_gian');");
    }

    public function checkExists($id_dv, $id_tk){
        $query = $this->db->query("select * from dgsdv where id_dv = $id_dv and id_tk = $id_tk;");
        if ($query->num_rows() > 0)return TRUE;
        return FALSE;
    }

    public function edit_so_sao($id_dv, $id_tk, $so_sao){
        $this->db->query("update dgsdv set so_sao_dv = $so_sao where id_dv = $id_dv and id_tk = $id_tk;");
    }

}
?>