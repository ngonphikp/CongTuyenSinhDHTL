<?php
/**
 * Created by PhpStorm.
 * User: FUJITSU
 * Date: 12/6/2018
 * Time: 11:08 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Bang_xep_hang extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("Mdd");
        $this->load->model("Mdv");
        $data['listddbxhtop6'] = $this->Mdd->getListBXH(0,6);
        $data['listdvbxhtop6'] = $this->Mdv->getListBXH(0,6);
        $this->load->view('site/bang_xep_hang_site_view', $data);
    }

}