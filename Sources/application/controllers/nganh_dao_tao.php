<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Nganh_dao_tao_c extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->model("Mndt");
        $data['listddtntop3'] = $this->Mndt->getListTNRad(0,3);
        $data['listddnntop3'] = $this->Mndt->getListNNRad(0,3);
        $data['listddtop3'] = $this->Mndt->getListM(0,3);
        $data['listddbxhtop3'] = $this->Mndt->getListBXH(0,3);
        $this->load->view('site/dia_diem_site_view', $data);
    }

    public function view_trong_nuoc(){
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countTN();
        $config['base_url'] = base_url()."index.php/dia_diem/view_trong_nuoc";
        $config['per_page'] = 9;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listddtn']= $this->Mndt->getListMTN($start, $config['per_page']);
        $this->load->view("site/dia_diem_trong_nuoc_site_view", $data);
    }

    public function view_ngoai_nuoc(){
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countNN();
        $config['base_url'] = base_url()."index.php/dia_diem/view_ngoai_nuoc";
        $config['per_page'] = 9;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listddnn']= $this->Mndt->getListMNN($start, $config['per_page']);
        $this->load->view("site/dia_diem_ngoai_nuoc_site_view", $data);
    }

    public function view_bxh(){
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countBXH();
        $config['base_url'] = base_url()."index.php/dia_diem/view_bxh";
        $config['per_page'] = 9;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listddbxh']= $this->Mndt->getListBXH($start, $config['per_page']);
        $this->load->view('site/dia_diem_bxh_site_view', $data);
    }

    public function view_moi(){
        $this->load->model("Mndt");
        $config['total_rows'] = $this->Mndt->countAll();
        $config['base_url'] = base_url()."index.php/dia_diem/view_moi";
        $config['per_page'] = 9;

        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['listddm']= $this->Mndt->getListM($start, $config['per_page']);
        $this->load->view("site/dia_diem_moi_site_view", $data);
    }

    public function view_detail($id){
        $this->load->model("Mndt");
        $data['dd'] = $this->Mndt->getByID($id);

        //Lấy số sao
        $sums =  $this->Mndt->getSumStarById($id);
        $data['counts'] =  $this->Mndt->getCountStarById($id);
        $temp = $data['counts']['counts'];

        if ($sums['sums'] == "")$sums['sums'] = 0;
        if ($data['counts']['counts'] == "0")$data['counts']['counts'] = 1;
        $data['star'] = $sums['sums'] / $data['counts']['counts'];

        if ($temp == "0")$data['counts']['counts'] = 0;

        //Lấy 4 dd ngẫu nhiên tương ứng
        $type = $this->Mndt->getTypeById($id);
        $data['listddtop4'] = array();
        if ($type['loai'] === "Trong Nước"){
            $data['listddtop4'] = $this->Mndt->getListTNRad(0,4);
        }elseif ($type['loai'] === "Ngoài Nước"){
            $data['listddtop4'] = $this->Mndt->getListNNRad(0,4);
        }
        //Lấy comments
        $data['comments'] = $this->Mndt->getComments($id);
        $this->load->view("site/s_detail_dd_site_view", $data);
    }

    public function pro_so_sao(){
        $so_sao = isset($_POST['so_sao']) ? $_POST['so_sao'] : "";
        $id_dd = isset($_POST['id_dd']) ? $_POST['id_dd'] : "";
        $id_tk =  $this->session->userdata("id_tk");
        $this->load->model("Mndt");
        //Nếu lần đầu đánh giá
        if (!$this->Mndt->checkExists($id_dd, $id_tk)){
            $this->Mndt->add_so_sao($id_dd, $id_tk, $so_sao);
        }
        else{
            //Nếu đánh giá lại
            $this->Mndt->edit_so_sao($id_dd, $id_tk, $so_sao);
        }
        echo "<script>alert('Đánh Giá Thành Công !!!');</script>";
        $this->view_detail($id_dd);
    }

    public function pro_binh_luan(){
        $binh_luan = isset($_POST['binh_luan']) ? $_POST['binh_luan'] : "";
        $id_dd = isset($_POST['id_dd']) ? $_POST['id_dd'] : "";
        $id_tk =  $this->session->userdata("id_tk");
        $t=time();
        $thoi_gian = date("Y-m-d H:m:s",$t);
        $this->load->model("Mndt");
        $this->Mndt->add_binh_luan($id_dd, $id_tk, $binh_luan, $thoi_gian);
        $this->view_detail($id_dd);
    }

}