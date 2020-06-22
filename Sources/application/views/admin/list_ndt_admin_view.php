<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6 title_form-wrap">
                        <h1 class="title_form">Bảng thông tin ngành đào tạo</h1>
                        <form action="<?php echo base_url();?>index.php/admin/get_list_ndt_s" method="post" class="form-inline">
                            <div class="form-control form_ip">
                                <input class="form-control search-field" type="text" placeholder="Tìm kiếm.." name="search">
                                <div class="btn_tk">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
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
                    <th>Mã ngành</th>
                    <th>Tên ngành</th>
                    <th>Chương trình đào tạo</th>
                    <th>Ghi chú</th>
                    <th>Giới thiệu </th>
                    <th>Cơ sở đào tạo</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($listNdt as $row){?>
                
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="edit ed" href="<?php echo base_url();?>index.php/admin/edit_ndt/<?php echo $row['ma_ndt'];?>"><em class="fas fa-pencil-alt"></em></a>
                            <br>
                            <a class="delete ed" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url();?>index.php/admin/delete_ndt/<?php echo $row['ma_ndt'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['ma_ndt'];?></td>
                        <td><?php echo $row['ten_ndt'];?></td>
                        <td><?php echo $row['chuong_trinh_dao_tao_ndt'];?></td>
                        <td><?php echo $row['ghi_chu_ndt'];?></td>
                        <td><?php echo $row['gioi_thieu_ndt'];?></td>
                        <td><?php echo $row['ten_csdt'];?></td>
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