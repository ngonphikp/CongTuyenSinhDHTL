<div class="panel-group me-menu-admin">
    <div class="panel panel-default name_admin">
        <div class="panel-heading name_admin-1">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="info">
                Nguyễn Xuân Phi
            </div>
        </div>
    </div>
    <div class="panel_wrap" style="padding-top:20px;">
        <div class="panel panel-default">
            <div class="panel-heading admin_menu">
                <h4 class="panel-title">
                    <a href="javascript:void(0)">
                        <i class="fas fa-igloo" style="color:#fff;"></i>
                        Dashboard
                    </a>
                </h4>
            </div>
        </div>
        <?php
            if ($this->session->userdata("cap_do") == 0){
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a  class="nav_link" data-toggle="collapse" href="#me-admin-tv">
                                <i class="fas fa-user-friends"></i>
                                <p class="info">
                                    Quản lý Tài Khoản
                                    <i class="fas fa-angle-down"></i>
                                </p>
                            </a>
                        </h4>
                    </div>
                    <div id="me-admin-tv" class="panel-collapse collapse">
                        <ul>
                            <li><a href="<?php echo base_url();?>admin/add_user">Thêm Tài Khoản</a></li>
                            <li><a href="<?php echo base_url();?>admin/get_list_user">Xem Tài Khoản</a></li>
                        </ul>
                    </div>
                </div>
            <?php
            }
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="nav_link" data-toggle="collapse" href="#me-admin-cs"><i class="fa fa-user" aria-hidden="true"></i>
                        <p class="info">
                            Quản lý Cơ Sở Đào Tạo
                            <i class="fas fa-angle-down"></i>          
                        </p>
                    </a>
                </h4>
            </div>
            <div id="me-admin-cs" class="panel-collapse collapse">
                <ul>
                    <li><a href="<?php echo base_url();?>index.php/admin/add_csdt">  Thêm Cơ Sở</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/get_list_csdt">  Xem Cơ Sở</a></li>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="nav_link" data-toggle="collapse" href="#me-admin-ndt"><i class="fa fa-user" aria-hidden="true"></i>
                        <p class="info">
                            Quản lý Ngành Đào Tạo
                            <i class="fas fa-angle-down"></i>
                        </p> 
                    </a>
                </h4>
            </div>
            <div id="me-admin-ndt" class="panel-collapse collapse">
                <ul>
                    <li><a href="<?php echo base_url();?>index.php/admin/add_ndt">  Thêm Ngành Đào Tạo</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/get_list_ndt">  Xem Ngành Đào Tạo</a></li>
                </ul>
            </div>
        </div>
        <!-- <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="nav_link" data-toggle="collapse" href="#me-admin-thm"><i class="fa fa-user" aria-hidden="true"></i>   Quản lý tổ hợp môn xét tuyển</a>
                </h4>
            </div>
            <div id="me-admin-thm" class="panel-collapse collapse">
                <ul>
                    <li><a href="<?php echo base_url();?>index.php/admin/add_thmxt">  Thêm tổ hợp môn xét tuyển</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/get_list_thmxt">  Xem tổ hợp môn xét tuyển</a></li>
                </ul>
            </div>
        </div> -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="nav_link" data-toggle="collapse" href="#me-admin-hsxt"><i class="fa fa-user" aria-hidden="true"></i>
                        <p class="info">
                            Quản lý Hồ Sơ Xét Tuyển
                            <i class="fas fa-angle-down"></i>
                        </p>
                    </a>
                </h4>
            </div>
            <div id="me-admin-hsxt" class="panel-collapse collapse">
                <ul>
                    <li><a href="<?php echo base_url();?>index.php/admin/add_hsxt">  Thêm Hồ Sơ Xét Tuyển</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/get_list_hsxt">  Xem Hồ Sơ Xét Tuyển</a></li>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a href="<?php echo base_url();?>index.php/admin/get_list_dm"><i class="fa fa-user" aria-hidden="true"></i>
                        <p class="info">
                            Quản lý Danh Mục
                        </p>
                    </a>
                </h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="nav_link" data-toggle="collapse" href="#me-admin-bv"><i class="fa fa-user" aria-hidden="true"></i>
                        <p class="info">
                            Quản lý Bài Viết
                            <i class="fas fa-angle-down"></i>
                        </p>
                    </a>
                </h4>
            </div>
            <div id="me-admin-bv" class="panel-collapse collapse">
                <ul>
                    <li><a href="<?php echo base_url();?>index.php/admin/add_bv">  Thêm Bài Viết</a></li>
                    <li><a href="<?php echo base_url();?>index.php/admin/get_list_bv">  Xem Bài Viết</a></li>
                </ul>
            </div>
        </div>
    </div>
    
</div>