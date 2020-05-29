<?php
/**
 * Created by PhpStorm.
 * User: FUJITSU
 * Date: 12/6/2018
 * Time: 11:08 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("Mdd");
        $this->load->model("Mcn");
        $this->load->model("Mdv");
        $data['listddtntop2'] = $this->Mdd->getListTNRad(0,2);
        $data['listddnntop2'] = $this->Mdd->getListNNRad(0,2);
        $data['listddbxhtop2'] = $this->Mdd->getListBXH(0,2);
        $data['listddtop2'] = $this->Mdd->getListM(0,2);
        $data['listcntop3'] = $this->Mcn->getListRad(0,3);
        $data['listdvpttop2'] = $this->Mdv->getListPTRad(0,2);
        $data['listdvkstop2'] = $this->Mdv->getListKSRad(0,2);
        $data['listdvbxhtop6'] = $this->Mdv->getListBXH(0,6);
        $this->load->view('site/home_site_view', $data);
    }

    public function checkLogin(){
        $tk = isset($_POST['tk']) ? $_POST['tk'] : "";
        $mk = isset($_POST['mk']) ? $_POST['mk'] : "";
        $this->load->model("Muser");
        if ($this->Muser->checkLogin($tk, $mk) && $tk != "" && $mk != ""){
            //Đăng Nhập Thành Công
            $this->session->set_userdata("CheckLogin", true);
            $data['infLogin'] = $this->Muser->infLogin($tk, $mk);
            $this->session->set_userdata($data['infLogin']);
            if ($this->session->userdata("cap_do") == 1){
                //Nếu Là Khách
                echo "<script>alert('Đăng Nhập Thành Công !!!');</script>";
                $this->index();
            }else {
                //Nếu Là Admin (hoặc NV)
                redirect(base_url() . "index.php/admin");
            }

        }
        else{
            //Đăng Nhập Thất Bại
            echo "<script>alert('Tài Khoản Hoặc Mật Khẩu Không Đúng !!!');</script>";
            $this->index();
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function about(){
        $this->load->view("site/s_about_site_view");
    }

    public function contact(){
        $this->load->view("site/s_contact_site_view");
    }

    public function blog(){
        $this->load->view("site/s_blog_site_view");
    }

    public function ttcn($id){
        $this->load->model("Muser");
        $data['user'] = $this->Muser->getById($id);
        $this->load->view('site/s_ttcn_site_view', $data);
    }

    public function pro_ttcn($id){
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mk', 'Mật Khẩu', 'required');
        $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        if($this->form_validation->run() == FALSE){
            $this->ttcn($id);
        }
        else{
            $mk = isset($_POST['mk']) ? $_POST['mk'] : "";
            $ht = isset($_POST['ht']) ? $_POST['ht'] : "";
            $gt = isset($_POST['gt']) ? $_POST['gt'] : "Nam";
            $email = isset($_POST['email']) ? $_POST['email'] : "";
            $ns = isset($_POST['ns']) ? $_POST['ns'] : "";
            $dc = isset($_POST['dc']) ? $_POST['dc'] : "";
            $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : "";
            $this->load->model("Muser");
            $this->Muser->edit($id, $mk, $ht, $gt, $email, $ns, $dc, $sdt);
            $data['infLogin'] = $this->Muser->getById($id);
            $this->session->set_userdata($data['infLogin']);
            $this->ttcn($id);
        }
    }

    public function register(){
        $this->load->view('site/s_register_site_view');
    }

    public function pro_register(){
        //Kiểm tra bằng form validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tk', 'Tên Đăng Nhập', 'required');
        $this->form_validation->set_rules('mk', 'Mật Khẩu', 'required');
        $this->form_validation->set_rules('gt', 'Giới Tính', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('sdt', 'Số Điện Thoại', 'numeric');
        if($this->form_validation->run() == FALSE){
            echo "<script>alert('Lỗi Nhập !!!');</script>";
            $this->register();
        }
        else{
            try{
                $tk = isset($_POST['tk']) ? $_POST['tk'] : "";
                $mk = isset($_POST['mk']) ? $_POST['mk'] : "";
                $ht = isset($_POST['ht']) ? $_POST['ht'] : "";
                $gt = isset($_POST['gt']) ? $_POST['gt'] : "Nam";
                $email = isset($_POST['email']) ? $_POST['email'] : "";
                $ns = isset($_POST['ns']) ? $_POST['ns'] : "";
                $dc = isset($_POST['dc']) ? $_POST['dc'] : "";
                $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : "";
                $this->load->model("Muser");
                $this->Muser->add($tk, $mk, $ht, $gt, $email, $ns, $dc, $sdt);
                echo "<script>alert('Đăng Ký Thành Công !!!');</script>";
                $this->index();
            }
            catch(Exception $e){
                echo "<script>alert('Lỗi Tài Khoản Đã Tồn Tại !!!');</script>";
                $this->register();
            }
        }
    }

    public function get_list_search(){
        $s = isset($_POST['s_search']) ? $_POST['s_search'] : "";
        $s = trim(htmlspecialchars(addslashes($s)));
        $this->load->model("Mdd");
        $this->load->model("Mcn");
        $this->load->model("Mdv");
        $data['listdds'] = $this->Mdd->getListS(0, 1000, $s);
        $data['listdvs'] = $this->Mdv->getListS(0, 1000, $s);
        $data['listcns'] = $this->Mcn->getListS(0, 1000, $s);
        $data['countdd'] = $this->Mdd->countAllS($s);
        $data['countdv'] = $this->Mdv->countAllS($s);
        $data['countcn'] = $this->Mcn->countAllS($s);
        $this->load->view("site/s_search_site_view", $data);
    }

}