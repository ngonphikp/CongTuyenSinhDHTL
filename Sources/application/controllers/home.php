<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index()
	{
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        //var_dump($data);

        $this->load->view('site/home/index', $data);
    }
    
    public function lienhe(){
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);
        $this->load->view("site/lienhe/index", $data);
    }

    public function tbxt(){
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        $this->load->view('site/thongbaoxettuyen/index', $data);
    }

    public function ttnxt(){
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['bvC'] = $this->Mbv->getListAll();

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);
        $this->load->view('site/thongtinnganhxettuyen/index', $data);
    }

    public function ttxt(){
        $this->load->model("Mdm");
        $this->load->model("Mbv");

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        $this->load->view('site/thongtinxettuyen/index', $data);
    }

    public function tvts(){
        $this->load->model("Mdm");
        $this->load->model("Mbv");
        $data['dmC'] = $this->Mdm->getByMaDMCha(1);

        $data['bvC'] = $this->Mbv->getListAll();

        $data['TVTS'] = $this->Mdm->getByMaDM(4);
        $data['TVTSC'] = $this->Mdm->getByMaDMCha(4);

        $data['TSCLY'] = $this->Mdm->getByMaDM(2.2);
        $data['TSCLYC'] = $this->Mdm->getByMaDMCha(2.2);

        $data['TTHD'] = $this->Mdm->getByMaDM(6.1);

        $data['TTNTS'] = $this->Mdm->getByMaDM(3);
        $data['TTNTSC'] = $this->Mdm->getByMaDMCha(3);

        $data['WSKV'] = $this->Mdm->getByMaDM(5.2);

        $data['DSCH'] = $this->Mdm->getByMaDM(4.2);

        $this->load->view('site/tuvantuyensinh/index', $data);
    }

    public function xhb(){
        $this->load->view('site/xethocbaonline/index');
    }
    public function tracuutuyensinh(){
        $this->load->view('site/tracuutuyensinh/index');
    }
    public function login_mb(){
        $this->load->view('site/Login_moblie/index');
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
            redirect(base_url() . "index.php/admin");
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

    public function ttcn($id){
        $this->load->model("Muser");
        $data['user'] = $this->Muser->getById($id);
        $this->load->view('admin/s_ttcn_admin_view', $data);
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
        $this->load->view("site/s_search_site_view", $data);
    }

}