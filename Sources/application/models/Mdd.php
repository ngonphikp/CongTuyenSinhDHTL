<?php
class Mdd extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd;");
        return $query->num_rows();
    }

    public function countTN(){
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where ct.loai = 'Trong Nước';");
        return $query->num_rows();
    }

    public function countNN(){
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where ct.loai = 'Ngoài Nước';");
        return $query->num_rows();
    }

    public function getList($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd limit $start , $size");
        return $query->result_array();
    }

    public function getListM($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd order by dd.id_dd desc limit $start , $size");
        return $query->result_array();
    }

    public function getListMTN($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where ct.loai = 'Trong Nước' order by dd.id_dd desc limit $start , $size");
        return $query->result_array();
    }

    public function getListMNN($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where ct.loai = 'Ngoài Nước' order by dd.id_dd desc limit $start , $size");
        return $query->result_array();
    }

    public function getListTNRad($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where ct.loai = 'Trong Nước' order by RAND() limit $start , $size");
        return $query->result_array();
    }

    public function getListNNRad($start, $size){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where ct.loai = 'Ngoài Nước' order by RAND() limit $start , $size");
        return $query->result_array();
    }

    public function deleteById($id){
        $this->db->query("delete from ctdd where id_dd = $id;");
        $this->db->query("delete from dgsdd where id_dd = $id;");
        $this->db->query("delete from dgcdd where id_dd = $id;");
        $this->db->query("delete from dia_diem where id_dd = $id;");
    }

    public function getByID($id){
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where dd.id_dd = $id");
        return $query->row_array();
    }

    public function getTypeById($id){
        $query=$this->db->query("select loai from ctdd where id_dd = $id");
        return $query->row_array();
    }

    public function getSumStarById($id){
        $query=$this->db->query("select sum(so_sao_dd) as sums from dgsdd where id_dd = $id");
        return $query->row_array();
    }

    public function getCountStarById($id){
        $query=$this->db->query("select count(so_sao_dd) as counts from dgsdd where id_dd = $id");
        return $query->row_array();
    }

    public function getComments($id){
        $query = $this->db->query("select * from dgcdd ct join thong_tin_tai_khoan tk on ct.id_tk = tk.id_tk where ct.id_dd = $id;");
        return $query->result_array();
    }

    public function countBXH(){
        $query=$this->db->query("select * from dia_diem dd join ctdd ct on dd.id_dd = ct.id_dd join dgsdd dgs on dgs.id_dd = dd.id_dd group by dd.id_dd order by sum(so_sao_dd)/count(so_sao_dd) desc, count(so_sao_dd) desc;");
        return $query->num_rows();
    }

    public function getListBXH($start, $size){
        $start = isset($start)? $start : 0;
        $query = $this->db->query("select * from dia_diem dd join ctdd ct on dd.id_dd = ct.id_dd join dgsdd dgs on dgs.id_dd = dd.id_dd group by dd.id_dd order by sum(so_sao_dd)/count(so_sao_dd) desc, count(so_sao_dd) desc limit $start , $size");
        return $query->result_array();
    }

    public function countAllS($s){
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where dd.ten_dd like '%$s%' OR ct.tieu_de_dd like '%$s%' OR ct.noi_dung_dd like '%$s%';");
        return $query->num_rows();
    }

    public function getListS($start, $size, $s){
        $start = isset($start)? $start : 0;
        $query=$this->db->query("select * from dia_diem dd inner join ctdd ct on dd.id_dd = ct.id_dd where dd.ten_dd like '%$s%' OR ct.tieu_de_dd like '%$s%' OR ct.noi_dung_dd like '%$s%' limit $start , $size");
        return $query->result_array();
    }

    public function add($ten, $link, $td, $nd, $loai){
        $this->db->query("insert into dia_diem(ten_dd, link_dd) values('$ten','$link');");
        $data=$this->db->query("select id_dd from dia_diem dd where id_dd >= all (select id_dd from dia_diem);")->row_array();
        $id=$data['id_dd'];
        $this->db->query("insert into ctdd(id_dd,tieu_de_dd, noi_dung_dd, loai) values($id,'$td','$nd','$loai');");
    }

    public function edit($id, $ten, $link, $td, $nd, $loai){
        $this->db->query("update dia_diem set ten_dd = '$ten', link_dd = '$link' where id_dd = $id;");
        $this->db->query("update ctdd set tieu_de_dd = '$td', noi_dung_dd = '$nd', loai = '$loai' where id_dd = $id;");
    }

    public function add_so_sao($id_dd, $id_tk, $so_sao){
        $this->db->query("INSERT INTO dgsdd (id_dd, id_tk, so_sao_dd) VALUES($id_dd, $id_tk, $so_sao);");
    }

    public function add_binh_luan($id_dd, $id_tk, $binh_luan, $thoi_gian){
        $this->db->query("INSERT INTO dgcdd (id_dd, id_tk, binh_luan_dd, thoi_gian) VALUES ($id_dd, $id_tk, '$binh_luan', '$thoi_gian');");
    }

    public function checkExists($id_dd, $id_tk){
        $query = $this->db->query("select * from dgsdd where id_dd = $id_dd and id_tk = $id_tk;");
        if ($query->num_rows() > 0)return TRUE;
        return FALSE;
    }

    public function edit_so_sao($id_dd, $id_tk, $so_sao){
        $this->db->query("update dgsdd set so_sao_dd = $so_sao where id_dd = $id_dd and id_tk = $id_tk;");
    }

}
?>