<header>
    <nav class="me-nav navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url();?>">
                <span><img src="<?php echo base_url();?>assets/img/logo.png">Traveling </span>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav nav-right">
                    <li class="d-flex justify-content-center">
                        <form action="<?php echo base_url() . 'index.php/home/get_list_search'?>" method="post" class="searchbar">
                            <input class="search_input" type="text" name="s_search" placeholder="Search...">
                            <input class="search_icon btn-primary" type="submit" value="O" id="OK" name="OK">
                        </form>
                    </li>
                    <?php
                    //Nếu đăng nhập là Admin (hoặc NV)
                    if ($this->session->userdata("cap_do") != 1 && $this->session->userdata("CheckLogin")){?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="<?php echo base_url();?>index.php/admin">Home Admin</a>
                        </li>
                    <?php } ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Địa Điểm</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/dia_diem/view_bxh">Bảng Xếp Hạng</a>
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/dia_diem/view_moi">Mới</a>
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/dia_diem/view_trong_nuoc">Trong Nước</a>
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/dia_diem/view_ngoai_nuoc">Ngoài Nước</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dịch Vụ</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/dich_vu/view_bxh">Bảng Xếp Hạng</a>
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/dich_vu/view_pt">Phương Tiện</a>
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/dich_vu/view_ks">Khách Sạn</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/bang_xep_hang">Bảng Xếp Hạng</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="<?php echo base_url();?>index.php/cam_nang">Cẩm Nang</a>
                    </li>
                </ul>
                <p class="ml-auto navbar-text actions">
                    <?php
                    //Nếu đã đăng nhập
                    if ($this->session->userdata("CheckLogin")){ ?>
                        <div class="dropdown">
                        <a class="btn btn-light" style="color: black;"><i class="fa fa-user"></i><?php echo $this->session->userdata("ho_ten"); ?></a>
                            <div class="dropdown-content">
                                <a href="<?php echo base_url() . "index.php/home/ttcn/" . $this->session->userdata("id_tk");?>"><i class="fa fa-cogs"></i>Setting</a>
                                <a href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-power-off"></i>Logout</a>
                            </div>
                        </div>
                    <?php }
                    //Nếu chưa đăng nhập
                    else{ ?>
                        <div class="dropdown">
                            <a class="btn btn-light btnDangNhap" style="color: black;"><i class="fa fa-user"></i>Đăng Nhập</a>
                            <a class="btn btn-light" role="button" href="<?php echo base_url();?>index.php/home/register"><i class="fa fa-sign-in"></i>Đăng Ký</a>
                        </div>
                    <?php } ?>
                </p>
            </div>
        </div>
    </nav>
</header>