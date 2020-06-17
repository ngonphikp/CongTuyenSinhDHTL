<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Admin_new extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //Nếu chưa đăng nhập
        if (!$this->session->userdata("CheckLogin")){
            redirect(base_url());
        }
    }

    // Admin new
    public function index(){
        $this->load->model("Muser");
        $data['countUser'] = $this->Muser->countAll();

        $this->load->view('admin_new/home_admin_view', $data);
    }

    public function get_list_user(){
        $this->load->model("Muser");
        $config['total_rows'] = $this->Muser->countAll();
        $config['base_url'] = base_url()."index.php/admin_new/get_list_user";
        $config['per_page'] = 5;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listUser']= $this->Muser->getList($start, $config['per_page']);
        $this->load->view("admin_new/get_list_user_admin_view", $data);
    }
    
}