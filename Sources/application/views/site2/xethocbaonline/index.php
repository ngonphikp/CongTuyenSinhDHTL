<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/reset.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/comon.css">
    <title>Document</title>
</head>
<body>
    
    <div id="wrapper">
        <div id="header" class="header-nguyenvong">
            <div class="container">
                    <div class="header__wrapp">
                            <div class="header__left">
                                <a href="" class="logo_tl">
                                    <div id="logo">
                                        <img src="<?php echo base_url();?>assets/img/logo/Logo-Thuy_Loi.png" alt="">
                                    </div>
                                    <div class="name-school">
                                        <h1>
                                            <strong>Trường Đại học Thủy lợi</strong>
                                        </h1>
                                        <h4>
                                            T H U Y L O I     U N I V E R S I TY
                                        </h4>
                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
                
                
            </div>
            <div class="nav_menu">
                <div class="container">
                    <ul class="list_menu">
                        <li>
                            <a href="">
                                <i class="fas fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">TUYỂN SINH ĐẠI HỌC</a>
                        </li>
                        <li>
                            <a href="">TUYỂN SINH THẠC SĨ</a>
                        </li>
                        <li>
                            <a href="">TUYỂN SINH TIẾN SĨ</a>
                        </li>
                        <li>
                            <a href="">NGÀNH ĐÀO TẠO</a>
                        </li>
                        <li>
                            <a href="">ĐĂNG KÍ XÉT TUYỂN ĐẠI HỌC</a>
                        </li>
                    </ul>
                </div>
                
               
            </div>
        </div>
        <div id="main">
            <div class="container">
                <div class="txt-center">
                    <h1>
                        PHIẾU ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY
                    </h1>
                    <small>(Dành cho thí sinh xét tuyển bằng học bạ)</small>
                </div>
                <div class="process">
                    <ul class="list_process">
                        <li class="num active">
                            <p> Khai báo thông tin thí sinh</p>
                        </li>
                        <li class="num">
                            <p>Đăng ký nguyện vọng</p>
                        </li>
                        <li class="num">
                            <p>Nộp tài liệu minh chứng</p>
                        </li>
                        <li class="num">
                            <p>Hoàn thành hồ sơ</p>
                        </li>
                    </ul>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-7"></div>
                        <div class="col-sm-5 float-right">
                            <p>
                                <strong>Tìm kiếm</strong>
                            </p>
                            <hr>
                            <form action="" method="POST" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Số CMND">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Mã số thí sinh">
                                    <button type="submit" class="btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>asset/bootstrap/js/bootstrap.min.css"></script>
    <script src="<?php echo base_url();?>assets/fonts/a076d05399.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/materialize.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
</body>
</html>