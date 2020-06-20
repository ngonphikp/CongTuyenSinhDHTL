<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6 title_form-wrap">
                        <h1 class="title_form">Bảng hồ sơ xét tuyển</h1>
                        <form action="<?php echo base_url();?>index.php/admin/get_list_hsxt_s" method="post" class="form-inline ml-3">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit" style="border:1px solid #ccc;">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-body">
            <table class="table table-striped table-bordered table-list" style="font-size:10px;font-weight:700;color:#000!important;">
                <thead>
                <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th>Mã hồ sơ</th>
                    <th>Họ Tên</th>
                    <!-- <th>Giới Tính </th>
                    <th>Ngày Sinh</th>
                    <th>Tỉnh Thành Phố </th>
                    <th>Phường Thị Xã</th>
                    <th>Quận Huyện</th> -->
                    <th> Số CMND</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <!-- <th>Hình ảnh CMND</th>
                    <th>Hình ảnh chân dung</th> -->
                    <!-- <th>Tôn giáo</th> -->
                    <th>Ngày đăng kí</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($listHsxt as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="btn btn-default" href="<?php echo base_url();?>index.php/admin/edit_csdt/<?php echo $row['ma_hsxt'];?>"><em class="fa fa-pencil"></em></a>
                            <br>
                            <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url();?>index.php/admin/delete_csdt/<?php echo $row['ma_hsxt'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['ma_hsxt'];?></td>
                        <td><?php echo $row['ho_ten_ts'];?></td>
                        <td><?php echo $row['so_cmnd_cccd_ts'];?></td>
                        <td><?php echo $row['sdt_ts'];?></td>
                        <td><?php echo $row['email_ts'];?></td>
                        <!-- <td><?php echo $row['dia_chi_thon_ban_duong_pho'];?></td> -->
                        
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="list123">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</div>