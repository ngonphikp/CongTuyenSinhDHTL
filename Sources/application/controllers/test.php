<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Test extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("Mqh");

    }

    // 
    public function get_list_qh_all(){
        $this->load->model("Mqh");
        $data= $this->Mqh->getListAll();
        echo json_encode ($data, JSON_UNESCAPED_UNICODE);
    }

    public function get_list_ttp_all(){
        $this->load->model("Mttp");
        $data= $this->Mttp->getListAll();
        echo json_encode ($data, JSON_UNESCAPED_UNICODE);
    }

    public function get_list_thpt_all(){
        $this->load->model("Mthpt");
        $data= $this->Mthpt->getListAll();
        echo json_encode ($data, JSON_UNESCAPED_UNICODE);
    }
}