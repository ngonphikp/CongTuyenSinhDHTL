<div class="content">
    <div class="col-md-12 ">
        <h1 class="title_form">Thêm cơ sở đào tạo</h1>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_csdt'); ?>
        <form action="<?php echo base_url();?>index.php/admin/pro_add_user" method="post" class="custom-form" style="padding: 0; margin: 0; width: 100%">
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Tên cơ sở đào tạo</label></div>
                <div class="col-lg-8 col-md-8 input-column"><input class="form-control" type="text" name="tencsdt"></div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Tỉnh/TP </label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <select id="seltinhthanhphocsdt" name="tinhthanhphocsdt" class="form-control">
                        <option value="">Chọn tỉnh thành phố</option>
                    </select>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Quận/huyện</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <select id="selquanhuyencsdt" name="tinhthanhphocsdt" class="form-control">
                        <option value="">Chọn quận huyện</option>
                    </select>
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Xã/phường</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <input class="form-control" type="text" name="thonbanduongphocsdt">
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label">Thôn/bản/đường phố</label></div>
                <div class="col-lg-8 col-md-8 label-column">
                    <input class="form-control" type="text" name="phuongthixacsdt">
                </div>
            </div>
            <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label"></label></div>
                <div class="col-lg-8 col-md-8 label-column"> <input class="btn btn-info" type="submit" value="Thêm"></div>
            </div>
        </form>
    
    <?php echo validation_errors();?>
</div>