<?php
class Mts extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function countAll(){
        $query=$this->db->query("select * from nguyen_vong");
        return $query->num_rows();
    }

    public function where($id)
    {
        $query=$this->db->query("select * from nguyen_vong");
        return $query->result_array();
    }
    
    
    
    
}
?>