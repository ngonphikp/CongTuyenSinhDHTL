<div id="wrapper">
    <div id="nav">
        <div class="container">
            <div class="nav__wrapp">
                <div class="nav__left">
                    <ul class="nav__left--list">
                        <li class="nav__left--item">
                            <a href="<?php echo base_url();?>">
                                <i class="fas fa-home"></i>
                                Trang chủ
                            </a>
                        </li>
                        <?php
                        //Nếu đăng nhập là Admin (hoặc NV)
                        if ($this->session->userdata("CheckLogin")){?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="<?php echo base_url();?>index.php/admin">Home Admin</a>
                            </li>
                        <?php } ?>
                        <li class="nav__left--item">
                            <a href="<?php echo base_url();?>home/lienhe">
                                <i class="fas fa-phone-alt"></i>
                                Liên hệ
                            </a>
                        </li>
                        <li class="nav__left--item">
                            <a href="<?php echo base_url();?>home/tvts">
                                <i class="fas fa-users"></i>
                                Tư vấn
                            </a>
                        </li>
                        <!-- <li class="nav__left--item">
                            <div class="search__menu-mb">
                                <i class="fas fa-search"></i>
                            </div>
                        </li> -->
                    </ul>
                </div>
                <div class="nav__mid">
                    <div class="nav__mid--search">
                        <form class="form-inline" id="search_form" action="/action_page.php">
                            <div class="search">
                                    <input type="text" name="" id="search" placeholder="Tìm kiếm...">
                                    <button type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="ml-auto navbar-text actions">
                    <?php
                    //Nếu đã đăng nhập
                    if ($this->session->userdata("CheckLogin")){ ?>
                        <div class="dropdown">
                        <a class="btn btn-light" style="color: black;"><i class="fa fa-user"></i><?php echo $this->session->userdata("ho_ten"); ?></a>
                            <div class="dropdown-content">
                                <a href="<?php echo base_url() . "index.php/home/ttcn/" . $this->session->userdata("id_tk");?>"><i class="fa fa-cogs"></i>Cài đặt</a>
                                <a href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-power-off"></i>Đăng xuất</a>
                            </div>
                        </div>
                    <?php }
                    //Nếu chưa đăng nhập
                    else{ ?>
                        <div class="dropdown">
                            <a class="btn btn-light btnDangNhap" style="color: black;"><i class="fa fa-user"></i>Đăng Nhập</a>
                        </div>
                    <?php } ?>
                </p>
                 <!-- Show menu moblie-->
                 <div class="nav__menu">
                    <i class="fas fa-bars menu-x" ></i>
                </div>        
                <!-- Show icon search moblie-->
                <div class="search__menu-mb">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Decive Moblie -->   
    <div class="search-mb">
        <div class="top_nav-mb">
            <input type="text" placeholder="Tìm kiếm">
            <span>
                <i class="fas fa-search"></i>
            </span>
        </div>
    </div>
    <!-- Search Decive Moblie__END -->