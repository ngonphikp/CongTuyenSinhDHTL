<?php
/**
 * Created by PhpStorm.
 * User: FUJITSU
 * Date: 12/6/2018
 * Time: 11:08 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Cam_nang extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("Mcn");
        $config['total_rows'] = $this->Mcn->countAll();
        $config['base_url'] = base_url()."index.php/cam_nang/index";
        $config['per_page'] = 6;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listcn'] = $this->Mcn->getList($start, $config['per_page']);
        $this->load->view("site/cam_nang_site_view", $data);
    }

    public function view_detail($id){
        $this->load->model("Mcn");
        $data['cn'] = $this->Mcn->getByID($id);
        $data['listcntop4'] = $this->Mcn->getListRad(0,4);
        $this->load->view("site/s_detail_cn_site_view", $data);
    }

}