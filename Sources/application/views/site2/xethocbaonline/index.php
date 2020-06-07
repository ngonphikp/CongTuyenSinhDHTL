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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/footer.css">
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
                            <div class="name-truong">
                                <h3 style="font-size: 27px;font-weight: 600;color: #001373;">
                                    TRƯỜNG ĐẠI HỌC THỦY LỢI
                                </h3>
                                <h4 style="font-size: 20px;font-weight: 600;">
                                    T H U Y L O I &#160; U N I V E R S I TY
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_menu" style="display:none;">
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
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6 float-right">
                            <p>
                                <strong>Tìm kiếm</strong>
                            </p>
                            <hr>
                            <div class="Search_tt">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Số CMND">
                                </div>
                                <div class="form-group" style="display:flex;">
                                    <input type="text" class="form-control" id="" placeholder="Mã số thí sinh">
                                    <button type="submit" class="btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="content">
                    <h3 class="title-heading">
                        <i class="fas fa-exclamation-circle"></i>
                        <p>THÔNG TIN THÍ SINH</p>
                    </h3>
                    
                    <div class="form-xettuyen">
                        <form action="" method="POST" role="form" id="form">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Họ, chữ đệm và tên của thí sinh:</label>
                                        <input type="text" class="form-control" id="" placeholder="Họ, chữ đệm và tên của thí sinh">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Giới tính:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value="">Giới tính</option>
                                            <option value="">Nam</option>
                                            <option value="">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Ngày/tháng/năm sinh:</label>
                                        <input type="text" class="form-control" id="" placeholder="Họ, chữ đệm và tên của thí sinh">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Nơi sinh:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Thành phố Hà Nội</option>
                                            <option value="">Thành phố Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Dân tộc:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Kinh</option>
                                            <option value="">Thái</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Chứng minh thư nhân dân:</label>
                                        <input type="text" class="form-control" id="" placeholder="Số chứng minh thư nhân dân hoặc căn cước công dân">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Ngày cấp:</small> </label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Nơi cấp:<small>(ghi theo cmnd/cccd)</small> </label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <b>Hộ khẩu thường trú</b>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Thành phố Hà Nội</option>
                                            <option value="">Thành phố Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Quận Hoàng Mai</option>
                                            <option value="">Quận Đống Đa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Xã/phường:</label>
                                        <input type="text" class="form-control" id="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Thôn/bản/đường phố:</label>
                                        <input type="text" class="form-control" id="" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <p><b>Nơi học lớp 10 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <!-- Lớp 10 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Thành phố Hà Nội</option>
                                            <option value="">Thành phố Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Quận Hoàng Mai</option>
                                            <option value="">Quận Đống Đa</option>
                                            <option value="">Huyện Thường Tín</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Trường THPT:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">THPT Vân Tảo</option>
                                            <option value="">THPT Thường Tín</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END 10 -->

                            <!-- Lớp 11 -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <p><b>Nơi học lớp 11 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Thành phố Hà Nội</option>
                                            <option value="">Thành phố Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Quận Hoàng Mai</option>
                                            <option value="">Quận Đống Đa</option>
                                            <option value="">Huyện Thường Tín</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Trường THPT:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">THPT Vân Tảo</option>
                                            <option value="">THPT Thường Tín</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END 11 -->

                            <!-- Lớp 12 -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <p><b>Nơi học lớp 12 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và ghi mã tỉnh, mã trường)</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Tỉnh/TP:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Thành phố Hà Nội</option>
                                            <option value="">Thành phố Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Quận/huyện:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">Quận Hoàng Mai</option>
                                            <option value="">Quận Đống Đa</option>
                                            <option value="">Huyện Thường Tín</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Trường THPT:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">THPT Vân Tảo</option>
                                            <option value="">THPT Thường Tín</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- END 12 -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Điện thoại liên lạc:</label>
                                        <input type="text" class="form-control" id="" placeholder="Điện thoại liên lạc">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Email:</label>
                                        <input type="text" class="form-control" id="" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Năm tốt nghiệp:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Khu vực ưu tiên:</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">KV1</option>
                                            <option value="">KV2</option>
                                            <option value="">KV2 - NT</option>
                                            <option value="">KV3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="title__ip">Đối tượng ưu tiên (nếu có):</label>
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value="">Đối tượng ưu tiên </option>
                                            <option value="">01</option>
                                            <option value="">02</option>
                                            <option value="">03</option>
                                            <option value="">04</option>
                                            <option value="">05</option>
                                            <option value="">06</option>
                                            <option value="">07</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:15px 0;">
                                <div class="col-md-12">
                                    <p style="color:#dd4b39;">Lưu ý: Mỗi CMTND chỉ được lưu 1 lần, vui lòng kiểm tra kỹ các thông tin trước khi đăng ký. </p>
                                    
                                    <button type="button" class="btn btn-info">
                                        <i class="fas fa-file"></i>
                                        Lưu
                                    </button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php 
               include( APPPATH.'views/site2/home/footer.php');
        ?>