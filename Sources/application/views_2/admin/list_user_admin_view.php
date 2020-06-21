<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6 title_form-wrap">
                        <h1 class="title_form">Bảng User - Thông tin User</h1>
                        <form action="<?php echo base_url();?>index.php/admin/get_list_user_s" method="post" class="form-inline ml-3">
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
            <table class="table table-striped table-bordered table-list">
                <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th>ID</th>
                        <th>Tên Đăng Nhập</th>
                        <th>Mật Khẩu</th>
                        <th>Cấp Độ</th>
                        <th>Họ Tên</th>
                        <th>Email</th>
                        <th>Ngày Sinh</th>
                        <th>Giới Tính</th>
                        <th>Địa Chỉ</th>
                        <th>SĐT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listUser as $row){?>
                        <tr class="w3-animate-left">
                            <td align="center">
                                <a  class="edit ed" href="<?php echo base_url();?>index.php/admin/edit_user/<?php echo $row['id_tk'];?>"><em class="fas fa-pencil-alt"></em></a>
                                <br>
                                <a  class="delete ed" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url();?>index.php/admin/delete_user/<?php echo $row['id_tk'];?>"><em class="fa fa-trash"></em></a>
                            </td>
                            <td><?php echo $row['id_tk'];?></td>
                            <td><?php echo $row['ten_dang_nhap'];?></td>
                            <td><?php echo $row['mat_khau'];?></td>
                            <td><?php echo $row['cap_do'];?></td>
                            <td><?php echo $row['ho_ten_tk'];?></td>
                            <td><?php echo $row['email_tk'];?></td>
                            <td><?php echo $row['ngay_sinh_tk']?></td>
                            <td><?php echo $row['gioi_tinh_tk'];?></td>
                            <td><?php echo $row['dia_chi_tk'];?></td>
                            <td><?php echo $row['sdt_tk'];?></td>
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