<header id="header">
    <nav class="me-nav navbar navbar-light navbar-expand-md navigation-clean-button">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-item_link">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url();?>index.php/admin">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="">
                    Liên hệ
                </a>
            </li>
        </ul>
        <div id="search_admin">
            <form action="" method="POST" role="form">
                <div class="form-group search_admin-wrapp">
                    <input type="text" class="form-control" id="" placeholder="Search" size="15">
                    <button type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav_right">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>">Cổng Tuyển Sinh Đại Học Thủy Lợi</a>
                </li>
                <li class="account_admin">
                    <div class="dropdown">
                        <a class="" style="color:#555;"><i class="fa fa-user"></i><?php echo $this->session->userdata("ho_ten_tk"); ?></a>
                        <div class="dropdown-content">
                            <a href="<?php echo base_url() . "index.php/home/ttcn/" . $this->session->userdata("id_tk");?>"><i class="fa fa-cogs"></i>Cài đặt</a>
                            <a href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-power-off"></i>Đăng xuất</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>